<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <a href="{{ route('register') }}">Add</a> | <a href="http://">List</a> | <a href="http://">Remove</a>
        </h2>
    </x-slot>

    <div class="lists">
        <div class="gp-list">
            <h3 class="list-ttl">List of Services</h3>
            <ul class="serv-list">
                @foreach ($services as $service)
                <li class='serv-list-item'>
                    {{ $service->name }}
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</x-app-layout>