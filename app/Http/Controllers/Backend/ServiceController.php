<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Check authentication
//        if (!Auth::user()->can('service.all')){
//            abort(403,'Unauthorized Action');
//        }
        $data['services']= Service::where('status','active')->orderBy('id','ASC')->get();
        return view('backend.service.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Check authentication
//        if (!Auth::user()->can('service.create')){
//            abort(403,'Unauthorized Action');
//        }
        return view('backend.service.create');
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
//        if (!Auth::user()->can('service.create')){
//            abort(403,'Unauthorized Action');
//        }

        $request->validate([
            'service_name' => ['required','string','min:3','max:40'],
            'title' => ['required','string','min:3','max:40'],
            'heading' => ['nullable','string','min:1','max:100'],
            'short_text' => ['nullable','string','min:3','max:10000'],
            'long_text' => ['nullable','string','min:3','max:10000'],
            'description' => ['nullable','string','min:3','max:10000'],
            'video' => ['nullable','string','max:500'],
            'photo' => ['nullable','mimes:jpeg,jpg,png','max:2048'],
        ],[
            'service_name.required' => 'Please input service_name',
            'short_text.required' => 'Please input short_text',
            'long_text.required' => 'Please input long_text',
        ]);
        $data['service_name'] = $request->service_name;
        $data['title'] = $request->title;
        $data['heading'] = $request->heading;
        $data['short_text'] = $request->short_text;
        $data['long_text'] = $request->long_text;
        $data['description'] = $request->description;
        $data['video'] = $request->video;
        $data['status'] = $request->status;


        //service photo
        if($request->hasFile('photo')){
            $file = $request->file('photo');
            $path = 'backend/images/service';
            $file_name = 'photo_'.rand(000000000,999999999).'.'.$file->getClientOriginalExtension();
            $file->move(public_path($path),$file_name);
            $data['photo'] = $path.'/'.$file_name;
        }

        $service = Service::create($data);

        return redirect()->back()->with('success','Successfully Create a new Service');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Check authentication
//        if (!Auth::user()->can('service.update')){
//            abort(403,'Unauthorized Action');
//        }

        $data['service'] = Service::findOrFail($id);
        return view('backend.service.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Check authentication
//        if (!Auth::user()->can('service.update')){
//            abort(403,'Unauthorized Action');
//        }
        $checkService = Service::findOrFail($id);
        $request->validate([
            'service_name' => ['required','string','min:3','max:40'],
            'title' => ['required','string','min:3','max:40'],
            'heading' => ['nullable','string','min:1','max:100'],
            'short_text' => ['nullable','string','min:3','max:10000'],
            'long_text' => ['nullable','string','min:3','max:10000'],
            'description' => ['nullable','string','min:3','max:10000'],
            'video' => ['nullable','string','max:500'],
            'photo' => ['nullable','mimes:jpeg,jpg,png','max:2048'],
        ],[
            'service_name.required' => 'Please input service_name',
            'short_text.required' => 'Please input short_text',
            'long_text.required' => 'Please input long_text',
        ]);
        $data['service_name'] = $request->service_name;
        $data['title'] = $request->title;
        $data['heading'] = $request->heading;
        $data['short_text'] = $request->short_text;
        $data['long_text'] = $request->long_text;
        $data['description'] = $request->description;
        $data['video'] = $request->video;
        $data['status'] = $request->status;

        // service photo
        if($request->hasFile('photo')){
            $file = $request->file('photo');
            $path = 'frontend/images/service';
            $file_name = 'photo_'.rand(000000000,999999999).'.'.$file->getClientOriginalExtension();
            $file->move(public_path($path),$file_name);
            $data['photo'] = $path.'/'.$file_name;

            if(file_exists($checkService->photo)){
                unlink($checkService->photo);
            }
        }


        DB::table('services')
            ->where('id',$id)
            ->update($data);
        return redirect()->back()->with('success','Successfully Updated Service');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        //Check authentication
        if (!Auth::user()->can('service.delete')){
            abort(403,'Unauthorized Action');
        }
        $checkService = Service::findOrFail($service->id);

        if (!is_null($service)){
            $service->delete();
        }

        return redirect()->back()->with('success','Service delete Successfully');
    }
}
