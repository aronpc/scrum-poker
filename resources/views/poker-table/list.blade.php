<div class="overflow-x-auto">
    <table class="table w-full">
        <!-- head -->
        <thead>
        <tr>
            <th>{{ __('app.poker_table_id') }}</th>
            <th>{{ __('app.name') }}</th>
            <th>{{ __('app.menu.actions') }}</th>
        </tr>
        </thead>
        <tbody>
        @forelse($pokerTables as $table)
            <!-- row 1 -->
            <tr>
                <th>{{ $table->id }}</th>
                <td class="w-full">{{ $table->name }}</td>
                <td></td>
            </tr>
        @empty
            <tr>
                <td colspan="100%" class="text-center">
                    <h1>{{ __('app.no_results_found') }}</h1>
                </td>
            </tr>
        @endforelse
        </tbody>
    </table>
</div>