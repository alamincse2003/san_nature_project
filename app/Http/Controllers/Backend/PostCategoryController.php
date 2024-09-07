<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\PostCategory;
use Illuminate\Http\Request;

class PostCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Check authentication
//        if (!Auth::user()->can('category.all')){
//            abort(403,'Unauthorized Action');
//        }
        $data['allCategories']= PostCategory::where('status','active')->orderBy('category_name','ASC')->get();
        return view('backend.post_category.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Check authentication
//        if (!Auth::user()->can('category.create')){
//            abort(403,'Unauthorized Action');
//        }
        return view('backend.post_category.create');
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
//        if (!Auth::user()->can('category.create')){
//            abort(403,'Unauthorized Action');
//        }

        $request->validate([
            'category_name' => ['required','string','min:3','max:255','unique:categories'],
            'parent_category_name' => ['nullable','min:1','max:255'],
            'status' => ['required','string'],
        ],[
            'category_name.required' => 'Please input Category name',
        ]);
        $data['category_name'] = $request->category_name;
        $data['parent_id'] = $request->parent_category_name;
        $data['status'] = $request->status;

        $data['slug'] = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-',$request->category_name))); // to get unique slug add... (later)

        $category = PostCategory::create($data);

        return redirect()->back()->with('success','Successfully Create a new Category');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PostCategory  $postCategory
     * @return \Illuminate\Http\Response
     */
    public function show(PostCategory $postCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PostCategory  $postCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(PostCategory $postCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PostCategory  $postCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PostCategory $postCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PostCategory  $postCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(PostCategory $postCategory)
    {
        //
    }
}
