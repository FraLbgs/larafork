<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Service;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('list');
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
            'name' => 'required|min:5|max:50',
            'image' => 'max:30|required',
        ]);

        $project = new Project;
        $project->name = $request->input('name');
        $project->image = Storage::putFile('projects', $request->file('image'));
        $project->save();
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
        $project = Project::find($id);
        return view('dashboard', [
            'services' => $services,
            'projects' => $projects,
            'customers' => $customers,
            'serviceName' => '',
            'serviceDesc' => '',
            'serviceImg' => '',
            'submitS' => 'Add Project',
            'actionS' => route('addserv'),
            'projectName' => $project->name,
            'projectImg' => $project->image,
            'submitP' => 'Update Project',
            'actionP' => route('updateproj', ['id' => $project->id])
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
        Project::where('id', $id)->update([
            'name' => $request->input('name'),
            'image' => Storage::putFile('projects', $request->file('image'))
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
