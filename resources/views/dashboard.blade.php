<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="forms">
        <div class="serv-form">
            <form  action="{{ @route('addserv') }}" method="post">
                @csrf
                <ul class="serv-list">
                    <li class="serv-item">
                        <label class="serv-label required" for="name">Service Name</label>
                        <input class="serv-text" type="text" id="name" name="name" value="">
                    </li>
                    <li class="serv-item">
                        <label class="serv-label required" for="description">Service Description</label>
                        <input class="serv-text" type="text" id="description" name="description" value="">
                    </li>
                    <li class="serv-item">
                        <label class="serv-label" for="image">Service Image</label>
                        <input class="serv-text" type="text" id="image" name="image" value="">
                    </li>
                    <li class="serv-item serv-submit">
                        <input class="button serv-btn" type="submit" id="submit" name="submit" value="Add Service">
                    </li>
                </ul>
            </form>
        </div>
        <div class="proj-form">
            <form  action="{{ @route('addproj') }}" method="post">
                @csrf
                <ul class="proj-list">
                    <li class="proj-item">
                        <label class="proj-label required" for="name">Project Name</label>
                        <input class="proj-text" type="text" id="name" name="name" value="">
                    </li>
                    <li class="proj-item">
                        <label class="proj-label" for="image">Project Image</label>
                        <input class="proj-text" type="text" id="image" name="image" value="">
                    </li>
                    <li class="proj-item proj-submit">
                        <input class="button proj-btn" type="submit" id="submit" name="submit" value="Add Project">
                    </li>
                </ul>
            </form>
        </div>
    </div>
</x-app-layout>
