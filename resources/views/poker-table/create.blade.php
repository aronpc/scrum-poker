<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('app.create_new_poker_table') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <form action="{{ route('poker-table.store') }}" method="post">
                @csrf
                <div class="form-control w-full">
                    <label for="name" class="label">
                        <span class="label-text">{{ __('app.poker_table_name') }}</span>
                    </label>
                    <input type="text" id="name" name="name" placeholder="{{ __('app.poker_table_name') }}"
                           class="input input-bordered w-full"/>
                    @error('name')
                    <label class="label">
                        <span class="label-text-alt text-error">{{ $message }}</span>
                    </label>
                    @enderror
                </div>
                <div class="w-full pt-1">
                    <button type="submit" class="btn btn-outline btn-primary">{{ __('app.submit') }}</button>
                </div>
            </form>
        </div>

        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            @include('poker-table.list', compact('pokerTables'))
        </div>
    </div>
</x-app-layout>