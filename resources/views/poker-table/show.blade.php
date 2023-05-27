<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-md text-gray-800 dark:text-gray-200 leading-tight">
            {{ $pokerTable->name }}
        </h2>
    </x-slot>
    <script>
        window.onload = function () {
            window.Echo.join('App.Models.PokerTable.{{$pokerTable->id}}')
                .joining((data) => console.log(data))
                .leaving((data) => console.log(data))
                .here((data) => console.log(data));

            window.Echo.channel('App.Models.PokerTable.{{$pokerTable->id}}').listen('.OnlineUsersEvent', (data) => console.log(data));

        }
    </script>
</x-app-layout>
