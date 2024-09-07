<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\PostCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Check authentication
//        if (!Auth::user()->can('post.all')){
//            abort(403,'Unauthorized Action');
//        }
        $data['posts']= Post::where('status','active')->orderBy('created_at','DESC')->get();

        return view('backend.post.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Check authentication
//        if (!Auth::user()->can('post.create')){
//            abort(403,'Unauthorized Action');
//        }
//        $data['postCategories'] = PostCategory::tree();
        return view('backend.post.create');
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
//        if (!Auth::user()->can('post.create')){
//            abort(403,'Unauthorized Action');
//        }

        $request->validate([
            'title' => ['required','string','min:1','max:255'],
            'category_id' => ['required','string'],
            'description_part1' => ['nullable','string','min:3','max:20000'],
            'description_part2' => ['nullable','string','min:3','max:20000'],
            'photo' => ['nullable','mimes:jpeg,jpg,png','max:2048'],
            'featured_photo' => ['nullable','mimes:jpeg,jpg,png','max:2048'],
        ],[
            'title.required' => 'Please input blog title',
        ]);
        $data['user_id'] = Auth::user()->id;
        $data['title'] = $request->title;
        $data['category_id'] = $request->category_id;
        $data['description_part1'] = $request->description_part1;
        $data['description_part2'] = $request->description_part2;
        $data['status'] = $request->status;

        $data['slug'] = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-',$request->title))); // to get unique slug add... (later)

//        dd($data);
        //blog photo
        if($request->hasFile('photo')){
            $file = $request->file('photo');
            $path = 'backend/images/post';
            $file_name = 'photo_'.rand(000000000,999999999).'.'.$file->getClientOriginalExtension();
            $file->move(public_path($path),$file_name);
            $data['photo'] = $path.'/'.$file_name;
        }

        //post feature photo
        if($request->hasFile('featured_photo')){
            $file = $request->file('featured_photo');
            $path = 'backend/images/post';
            $file_name = 'featured_photo'.rand(000000000,999999999).'.'.$file->getClientOriginalExtension();
            $file->move(public_path($path),$file_name);
            $data['featured_photo'] = $path.'/'.$file_name;
        }
//        dd($data);

        $post = Post::create($data);

        return redirect()->back()->with('success','Successfully Create a new Blog Post');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Check authentication
//        if (!Auth::user()->can('post.update')){
//            abort(403,'Unauthorized Action');
//        }
        $data['post'] = Post::findOrFail($id);
        $data['postCategories'] = PostCategory::tree();
        return view('backend.post.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Check authentication
//        if (!Auth::user()->can('post.update')){
//            abort(403,'Unauthorized Action');
//        }
        $checkBlog = Post::findOrFail($id);
        $request->validate([
            'title' => ['required','string','min:1','max:255'],
            'slug' => ['required','string','min:1','max:255'],
            'category_id' => ['required','string'],
            'description_part1' => ['nullable','string','min:3','max:20000'],
            'description_part2' => ['nullable','string','min:3','max:20000'],
            'photo' => ['nullable','mimes:jpeg,jpg,png','max:2048'],
            'featured_photo' => ['nullable','mimes:jpeg,jpg,png','max:2048'],
        ],[
            'title.required' => 'Please input post title',
        ]);
        $data['user_id'] = Auth::user()->id;
        $data['title'] = $request->title;
        $data['slug'] = $request->slug;
        $data['category_id'] = $request->category_id;
        $data['description_part1'] = $request->description_part1;
        $data['description_part2'] = $request->description_part2;
        $data['status'] = $request->status;

        //$data['slug'] = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-',$request->title))); // to get unique slug add... (later)

        // post photo
        if($request->hasFile('photo')){
            $file = $request->file('photo');
            $path = 'backend/images/post';
            $file_name = 'photo_'.rand(000000000,999999999).'.'.$file->getClientOriginalExtension();
            $file->move(public_path($path),$file_name);
            $data['photo'] = $path.'/'.$file_name;

            if(file_exists($checkBlog->photo)){
                unlink($checkBlog->photo);
            }
        }
        // featured photo
        if($request->hasFile('featured_photo')){
            $file = $request->file('featured_photo');
            $path = 'backend/images/post';
            $file_name = 'featured_photo'.rand(000000000,999999999).'.'.$file->getClientOriginalExtension();
            $file->move(public_path($path),$file_name);
            $data['featured_photo'] = $path.'/'.$file_name;

            if(file_exists($checkBlog->featured_photo)){
                unlink($checkBlog->featured_photo);
            }
        }

        DB::table('posts')
            ->where('id',$id)
            ->update($data);
        return redirect()->back()->with('success','Successfully Blog Post Updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //Check authentication
//        if (!Auth::user()->can('post.delete')){
//            abort(403,'Unauthorized Action');
//        }
        $checkBlog = Post::findOrFail($post->id);

        if (!is_null($post)){
            $post->delete();
        }
    }
}
