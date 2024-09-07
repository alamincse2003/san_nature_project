<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Check authentication
//        if (!Auth::user()->can('testimonial.all')){
//            abort(403,'Unauthorized Action');
//        }
        $data['testimonials']= Testimonial::where('status','active')->orderBy('created_at','ASC')->get();
        return view('backend.testimonial.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Check authentication
//        if (!Auth::user()->can('testimonial.create')){
//            abort(403,'Unauthorized Action');
//        }
        return view('backend.testimonial.create');
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
//        if (!Auth::user()->can('testimonial.create')){
//            abort(403,'Unauthorized Action');
//        }

        $request->validate([
            'name' => ['required','string','min:3','max:50'],
            'designation' => ['nullable','string','min:3','max:50'],
            'description' => ['nullable','string','min:3','max:1500'],
            'rating' => ['nullable','string','min:1'],
            'photo' => ['nullable','mimes:jpeg,jpg,png','max:2048'],
        ],[
            'name.required' => 'Please input name',
        ]);

        $data['name'] = $request->name;
        $data['designation'] = $request->designation;
        $data['description'] = $request->description;
        $data['rating'] = $request->rating;
        $data['status'] = $request->status;

        //team photo
        if($request->hasFile('photo')){
            $file = $request->file('photo');
            $path = 'backend/images/testimonial';
            $file_name = 'photo_'.rand(000000000,999999999).'.'.$file->getClientOriginalExtension();
            $file->move(public_path($path),$file_name);
            $data['photo'] = $path.'/'.$file_name;
        }


        $testimonial = Testimonial::create($data);

        return redirect()->back()->with('success','Successfully Create a new Testimonial');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonial $testimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Check authentication
//        if (!Auth::user()->can('testimonial.update')){
//            abort(403,'Unauthorized Action');
//        }
        $data['testimonial'] = Testimonial::findOrFail($id);
        return view('backend.testimonial.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Check authentication
//        if (!Auth::user()->can('testimonial.update')){
//            abort(403,'Unauthorized Action');
//        }
        $checkTestimonial = Testimonial::findOrFail($id);
        $request->validate([
            'name' => ['required','string','min:3','max:50'],
            'designation' => ['nullable','string','min:3','max:50'],
            'description' => ['nullable','string','min:3','max:1500'],
            'rating' => ['nullable','string','min:1'],
            'photo' => ['nullable','mimes:jpeg,jpg,png','max:2048'],
        ],[
            'name.required' => 'Please input name',
        ]);
        $data['name'] = $request->name;
        $data['designation'] = $request->designation;
        $data['description'] = $request->description;
        $data['rating'] = $request->rating;
        $data['status'] = $request->status;

        // testimonial photo
        if($request->hasFile('photo')){
            $file = $request->file('photo');
            $path = 'frontend/images/testimonial';
            $file_name = 'photo_'.rand(000000000,999999999).'.'.$file->getClientOriginalExtension();
            $file->move(public_path($path),$file_name);
            $data['photo'] = $path.'/'.$file_name;

            if(file_exists($checkTestimonial->photo)){
                unlink($checkTestimonial->photo);
            }
        }

        DB::table('testimonials')
            ->where('id',$id)
            ->update($data);

        return redirect()->back()->with('success','Successfully Testimonial Updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimonial $testimonial)
    {
        //Check authentication
//        if (!Auth::user()->can('testimonial.delete')){
//            abort(403,'Unauthorized Action');
//        }
        $checkTestimonial = Testimonial::findOrFail($testimonial->id);

        if (!is_null($testimonial)){
            $testimonial->delete();
        }

        return redirect()->back()->with('success','Testimonial delete Successfully');

    }
}
