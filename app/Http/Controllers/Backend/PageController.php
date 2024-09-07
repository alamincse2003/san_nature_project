<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Check authentication
//        if (!Auth::user()->can('page.all')){
//            abort(403,'Unauthorized Action');
//        }

        $data['pages']= Page::where('status','active')->orderBy('position_view','ASC')->get();
        return view('backend.page.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Check authentication
//        if (!Auth::user()->can('page.create')){
//            abort(403,'Unauthorized Action');
//        }
        return view('backend.page.create');
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
//        if (!Auth::user()->can('page.create')){
//            abort(403,'Unauthorized Action');
//        }
//        dd($request->all());

        $request->validate([
            'page_name' => ['required','string','min:3','max:40'],
            'title' => ['nullable','string','min:3','max:200'],
            'slug' => ['required','string','min:3','max:40'],
            'page_category' => ['required','string','min:3','max:40'],
            'position_view' => ['required','string','max:40'],
            'description_part1' => ['nullable','string','min:3','max:1500'],
            'description_part2' => ['nullable','string','min:3','max:1500'],
            'featured_photo' => ['nullable','mimes:jpeg,jpg,png','max:2048'],
            'photo' => ['nullable','mimes:jpeg,jpg,png','max:2048'],
        ],[
            'page_name.required' => 'Page Name Is Required',
        ]);
        //Who Create this
        $data['user_id'] = Auth::user()->id;
        $data['page_name'] = $request->page_name;
        $data['title'] = $request->title;
        $data['slug'] = $request->slug;
        $data['page_category'] = $request->page_category;
        $data['position_view'] = $request->position_view;
        $data['description_part1'] = $request->description_part1;
        $data['description_part2'] = $request->description_part2;
//        $data['video'] = $request->video;
        $data['status'] = $request->status;

        //page feature_photo
        if($request->hasFile('featured_photo')){
            $file = $request->file('featured_photo');
            $path = 'backend/images/page';
            $file_name = 'featured_photo_'.rand(000000000,999999999).'.'.$file->getClientOriginalExtension();
            $file->move(public_path($path),$file_name);
            $data['featured_photo'] = $path.'/'.$file_name;
        }
        //page photo
        if($request->hasFile('photo')){
            $file = $request->file('photo');
            $path = 'backend/images/page';
            $file_name = 'photo_'.rand(000000000,999999999).'.'.$file->getClientOriginalExtension();
            $file->move(public_path($path),$file_name);
            $data['photo'] = $path.'/'.$file_name;
        }
        //page pdf
        if($request->hasFile('pdf')){
            $file = $request->file('pdf');
            $path = 'backend/images/page';
            $file_name = 'pdf_'.rand(000000000,999999999).'.'.$file->getClientOriginalExtension();
            $file->move(public_path($path),$file_name);
            $data['pdf'] = $path.'/'.$file_name;
        }

        $page = Page::create($data);

        return redirect()->back()->with('success','Successfully Create a New Page');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Check authentication
//        if (!Auth::user()->can('slider.show')){
//            abort(403,'Unauthorized Action');
//        }

        return redirect()->route('page.index');
        $data['page'] = Page::findOrFail($id);
        return view('backend.page.show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Check authentication
//        if (!Auth::user()->can('slider.update')){
//            abort(403,'Unauthorized Action');
//        }
        $data['page'] = Page::findOrFail($id);
        return view('backend.page.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Check authentication
//        if (!Auth::user()->can('page.update')){
//            abort(403,'Unauthorized Action');
//        }
        $checkSlider = Page::findOrFail($id);
        $request->validate([
            'page_name' => ['required','string','min:3','max:40'],
            'title' => ['nullable','string','min:3','max:200'],
            'slug' => ['required','string','min:3','max:40'],
            'page_category' => ['required','string','min:3','max:40'],
            'position_view' => ['required','string','max:40'],
            'description_part1' => ['nullable','string','min:3','max:1500'],
            'description_part2' => ['nullable','string','min:3','max:1500'],
            'featured_photo' => ['nullable','mimes:jpeg,jpg,png','max:2048'],
            'photo' => ['nullable','mimes:jpeg,jpg,png','max:2048'],
        ],[
            'page_name.required' => 'Page Name Is Required',
        ]);

        //Who Create/update this
        $data['user_id'] = Auth::user()->id;
        $data['page_name'] = $request->page_name;
        $data['title'] = $request->title;
        $data['slug'] = $request->slug;
        $data['page_category'] = $request->page_category;
        $data['position_view'] = $request->position_view;
        $data['description_part1'] = $request->description_part1;
        $data['description_part2'] = $request->description_part2;
//        $data['video'] = $request->video;
        $data['status'] = $request->status;

        //page feature_photo
        if($request->hasFile('featured_photo')){
            $file = $request->file('featured_photo');
            $path = 'backend/images/page';
            $file_name = 'featured_photo_'.rand(000000000,999999999).'.'.$file->getClientOriginalExtension();
            $file->move(public_path($path),$file_name);
            $data['featured_photo'] = $path.'/'.$file_name;
        }
        //page photo
        if($request->hasFile('photo')){
            $file = $request->file('photo');
            $path = 'backend/images/page';
            $file_name = 'photo_'.rand(000000000,999999999).'.'.$file->getClientOriginalExtension();
            $file->move(public_path($path),$file_name);
            $data['photo'] = $path.'/'.$file_name;
        }
        //page pdf
        if($request->hasFile('pdf')){
            $file = $request->file('pdf');
            $path = 'backend/images/page';
            $file_name = 'pdf_'.rand(000000000,999999999).'.'.$file->getClientOriginalExtension();
            $file->move(public_path($path),$file_name);
            $data['pdf'] = $path.'/'.$file_name;
        }

        DB::table('pages')
            ->where('id',$id)
            ->update($data);
        return redirect()->back()->with('success','Page Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function destroy(Page $page)
    {
        //Check authentication
//        if (!Auth::user()->can('page.delete')){
//            abort(403,'Unauthorized Action');
//        }
        $checkSlider = Page::findOrFail($page->id);

        if (!is_null($page)){
            $page->delete();
        }

        return redirect()->back()->with('success','Page delete Successfully');
    }
}
