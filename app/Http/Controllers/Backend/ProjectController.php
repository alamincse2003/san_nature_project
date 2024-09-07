<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Check authentication
//        if (!Auth::user()->can('project.all')){
//            abort(403,'Unauthorized Action');
//        }
        $data['projects']= Project::all();
        return view('backend.project.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Check authentication
//        if (!Auth::user()->can('project.create')){
//            abort(403,'Unauthorized Action');
//        }
        return view('backend.project.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Check authentication
//        if (!Auth::user()->can('project.create')){
//            abort(403,'Unauthorized Action');
//        }

        $request->validate([
            'title' => ['required','string','min:1','max:255'],
            'short_title' => ['nullable','string','min:1','max:255'],
            'description1' => ['nullable','string','min:1'],
            'description2' => ['nullable','string','min:1'],
            'project_type' => ['required','string','min:1'],
            'banner_photo' => ['nullable','mimes:jpeg,jpg,png','max:2048'],
            'photo' => ['nullable','mimes:jpeg,jpg,png','max:2048'],
        ],[
            'title.required' => 'Project Title required',
            'project_type.required' => 'Project Type required',
        ]);
        $data['title'] = $request->title;
        $data['slug'] = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-',$request->title)));
        $data['short_title'] = $request->short_title;
        $data['project_type'] = strtolower($request->project_type);
        $data['description1'] = $request->description1;
        $data['description2'] = $request->description2;
        $data['status'] = $request->status;

        //banner_photo
        if($request->hasFile('banner_photo')){
            $file = $request->file('banner_photo');
            $path = 'backend/images/project';
            $file_name = 'banner_photo_'.rand(000000000,999999999).'.'.$file->getClientOriginalExtension();
            $file->move(public_path($path),$file_name);
            $data['banner_photo'] = $path.'/'.$file_name;
        }
        //photo
        if($request->hasFile('photo')){
            $file = $request->file('photo');
            $path = 'backend/images/project';
            $file_name = 'photo_'.rand(000000000,999999999).'.'.$file->getClientOriginalExtension();
            $file->move(public_path($path),$file_name);
            $data['photo'] = $path.'/'.$file_name;
        }

        $project = Project::create($data);

        return redirect()->back()->with('success','Successfully Create a new Project');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Check authentication
//        if (!Auth::user()->can('project.show')){
//            abort(403,'Unauthorized Action');
//        }
        return redirect()->route('project.index');

        $data['project'] = Project::findOrFail($id);
        return view('backend.project.show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Check authentication
//        if (!Auth::user()->can('project.update')){
//            abort(403,'Unauthorized Action');
//        }

        $data['project'] = Project::findOrFail($id);
        return view('backend.project.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Check authentication
//        if (!Auth::user()->can('slider.update')){
//            abort(403,'Unauthorized Action');
//        }
//        dd($request->all());
        $request->validate([
            'title' => ['required','string','min:1','max:255'],
            'short_title' => ['nullable','string','min:1','max:255'],
            'description1' => ['nullable','string','min:1'],
            'description2' => ['nullable','string','min:1'],
            'project_type' => ['required','string','min:1'],
            'banner_photo' => ['nullable','mimes:jpeg,jpg,png','max:2048'],
            'photo' => ['nullable','mimes:jpeg,jpg,png','max:2048'],
        ],[
            'title.required' => 'Project Title required',
            'project_type.required' => 'Project Type required',
        ]);

//        dd($request->all());
        $data['title'] = $request->title;
        $data['slug'] = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-',$request->title)));
        $data['short_title'] = $request->short_title;
        $data['project_type'] = strtolower($request->project_type);
        $data['description1'] = $request->description1;
        $data['description2'] = $request->description2;
        $data['status'] = $request->status;

        //banner_photo
        if($request->hasFile('banner_photo')){
            $file = $request->file('banner_photo');
            $path = 'backend/images/project';
            $file_name = 'banner_photo_'.rand(000000000,999999999).'.'.$file->getClientOriginalExtension();
            $file->move(public_path($path),$file_name);
            $data['banner_photo'] = $path.'/'.$file_name;
        }
        //photo
        if($request->hasFile('photo')){
            $file = $request->file('photo');
            $path = 'backend/images/project';
            $file_name = 'photo_'.rand(000000000,999999999).'.'.$file->getClientOriginalExtension();
            $file->move(public_path($path),$file_name);
            $data['photo'] = $path.'/'.$file_name;
        }

        DB::table('projects')
            ->where('id',$id)
            ->update($data);

        return redirect()->back()->with('success','Project Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        //Check authentication
//        if (!Auth::user()->can('project.delete')){
//            abort(403,'Unauthorized Action');
//        }
        $checkProject= Project::findOrFail($project->id);

        if (!is_null($project)){
            $project->delete();
        }

        return redirect()->back()->with('success','Project delete Successfully');
    }
}
