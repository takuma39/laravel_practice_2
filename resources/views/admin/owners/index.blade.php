<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <p>エロクアント</p>
                    @foreach($e_all as $e_owner)
                    {{ $e_owner->name}}：{{ $e_owner->created_at->diffForHumans()}}<br>
                    @endforeach
                    <br>

                    <p>クエリビルダ</p>
                    @foreach($q_get as $q_owner)
                    {{ $q_owner->name}}：{{ $q_owner->created_at}}<br>
                    @endforeach
                    <br>

                    <p>クエリビルダ--Carbon</p>
                    @foreach($q_get as $q_owner)
                    {{ $q_owner->name}}：{{ carbon\carbon::parse($q_owner->created_at)}}<br>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
