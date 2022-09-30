<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        </h2>
    </x-slot>

    <div class="forms">
        <h3 id="services" class="dash-ttl">SERVICES</h3>
        <div id="hidden-serv" class="hidden">
            <div class="serv-info">
                <form  class="serv-form" action="{{ @route('addserv') }}" method="post">
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
        </div>
        <h3 id="projects" class="dash-ttl">PROJECTS</h3>
        <div id="hidden-proj" class="hidden">
            <div class="proj-info">
                <form class="proj-form" action="{{ @route('addproj') }}" method="post">
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
            <div class="lists">
                <div class="gp-list">
                    <h3 class="list-ttl">List of Projects</h3>
                    <ul class="proj-list">
                        @foreach ($projects as $project)
                        <li class='proj-list-item'>
                            {{ $project->name }}
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <h3 id="customers" class="dash-ttl">CUSTOMERS</h3>
        <div id="hidden-cust" class="hidden">
            <div class="cust-lists">
                <div class="gp-list">
                    <h3 class="list-ttl">List of Customers</h3>
                    <ul class="cust-list">
                        <li class='cust-list-item'>
                            <div class="bold">Name</div>
                            <div class="bold">Mail</div>
                            <div class="bold">Phone</div>
                            <div class="bold">Message</div>
                        </li>
                        @foreach ($customers as $customer)
                        <li class='cust-list-item'>
                            <div>{{ $customer->name }}</div>
                            <div>{{ $customer->email }}</div>
                            <div>{{ $customer->phone }}</div>
                            <div>{{ $customer->message }}</div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
