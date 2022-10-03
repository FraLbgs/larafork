<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Project;
use App\Models\Customer;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // $services = Service::all();
        // return view('list', ['services' => $services]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:4|max:50',
            'description' => 'min:10|max:255|required',
            'image' => 'max:30|required',
        ]);

        $service = new Service;
        $service->name = $request->input('name');
        $service->description = $request->input('description');
        $service->image = Storage::putFile('services', $request->file('image'));
        $service->save();
        return Redirect::route('dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $services = Service::all();
        $projects = Project::all();
        $customers = Customer::all();
        $service = Service::find($id);
        return view('dashboard', [
            'services' => $services,
            'projects' => $projects,
            'customers' => $customers,
            'serviceName' => $service->name,
            'serviceDesc' => $service->description,
            'serviceImg' => $service->image,
            'submitS' => 'Update Service',
            'actionS' => route('updateserv', ['id' => $service->id]),
            'hiddenS' => 'hidden',
            'imgS' => '',
            'projectName' => '',
            'projectImg' => '',
            'submitP' => 'Add Project',
            'actionP' => route('addproj'),
            'actionMs' => 'update'
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Service::where('id', $id)->update([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'image' => Storage::putFile('services', $request->file('image'))//->storeAs('services', 'test.png'))
        ]);

        return Redirect::route('dashboard');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
