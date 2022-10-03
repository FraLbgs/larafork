<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        </h2>
    </x-slot>

    <div class="forms">
        <h3 id="services" class="dash-ttl">SERVICES</h3>
        <div id="hidden-serv" class="hidden-serv">
            <div class="serv-info">
                <form  class="serv-form" action="{{$actionS}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <ul class="serv-list">
                        <li class="serv-item">
                            <label class="serv-label required" for="name">Service Name</label>
                            <input class="serv-text" type="text" id="name" name="name" value="{{$serviceName}}">
                        </li>
                        <li class="serv-item">
                            <label class="serv-label required" for="description">Service Description</label>
                            <input class="serv-text" type="text" id="description" name="description" value="{{$serviceDesc}}">
                        </li>
                        <li class="serv-item">
                            <label class="serv-label" for="image">Service Image</label>
                            <input id="file-s" class="file {{$actionMs === 'update' ? 'hidden' : ''}}" type="file" id="image" name="image" value="{{$serviceImg}}">
                            @if ($actionMs === "update")
                            <div id="img-s" class=""><button class="btn-s" type="button">Changer d'image</button> <img class="img-s" src="{{asset($serviceImg)}}"></div>
                            @endif
                        </li>
                        <li class="serv-item serv-submit">
                            <input class="button serv-btn" type="submit" id="submit" name="submit" value="{{$submitS}}">
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
                            <div>{{ $service->name }}</div>
                            <div><a href="{{ @route('editserv', ['id' => $service->id]) }}">Modifier</a></div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <h3 id="projects" class="dash-ttl">PROJECTS</h3>
        <div id="hidden-proj" class="hidden-proj">
            <div class="proj-info">
                <form class="proj-form" action="{{ $actionP }}" method="post">
                    @csrf
                    <ul class="proj-list">
                        <li class="proj-item">
                            <label class="proj-label required" for="name">Project Name</label>
                            <input class="proj-text" type="text" id="name" name="name" value="{{ $projectName }}">
                        </li>
                        <li class="proj-item">
                            <label class="proj-label" for="image">Project Image</label>
                            <input class="file" type="file" id="image" name="image" value="{{ $projectImg }}">
                        </li>
                        <li class="proj-item proj-submit">
                            <input class="button proj-btn" type="submit" id="submit" name="submit" value="{{$submitP}}">
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
                            <div>{{ $project->name }}</div>
                            <div><a href="{{ @route('editproj', ['id' => $project->id]) }}">Modifier</a></div>
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
