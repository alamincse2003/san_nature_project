<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Media;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Check authentication
//        if (!Auth::user()->can('media.all')){
//            abort(403,'Unauthorized Action');
//        }
        $data['medias'] = Media::orderBy('created_at','DESC')->get();
        return view('backend.media.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Check authentication
//        if (!Auth::user()->can('media.create')){
//            abort(403,'Unauthorized Action');
//        }
        return view('backend.media.create');
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
//        if (!Auth::user()->can('media.create')){
//            abort(403,'Unauthorized Action');
//        }

        $request->validate([
            'name' => ['required','string','min:3','max:255'],
        ],[
            'name.required' => 'Please input name',
        ]);
        $data['name'] = $request->name;
        $data['slug'] = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-',$request->name))); // to get unique slug add...

        $photos = $request->file('photo');

        //media photo
        if ($photos) {
            foreach ($photos as $photo) {
                $file = $photo;
                $path = 'backend/images/media';
                $file_name = 'media_'.$request->name.'_' . rand(000000000, 999999999) . '.' . $file->getClientOriginalExtension();
                $file->move(public_path($path), $file_name);
                $data['photo'] = $path . '/' . $file_name;
                Media::create($data);
            }
        }
        return redirect()->back()->with('success','Successfully Create new Media');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function show(Media $media)
    {
        //Check authentication
//        if (!Auth::user()->can('media.show')){
//            abort(403,'Unauthorized Action');
//        }
        $data['media'] = Media::findOrFail($media->id);
        return view('backend.media.show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function edit(Media $media)
    {
        //Check authentication
//        if (!Auth::user()->can('media.update')){
//            abort(403,'Unauthorized Action');
//        }
        $data['pageTitle'] = "Media";
        $data['media'] = Media::findOrFail($id);
        return view('backend.media.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Check authentication
        if (!Auth::user()->can('media.update')){
            abort(403,'Unauthorized Action');
        }
        $checkMedia = Media::findOrFail($id);

        $request->validate([
            'media' => ['required','string', 'min:3','max:255','unique:medias,id,'.$request->id],
            'name' => ['nullable','string','min:3','max:255'],
            'photo' => ['nullable','string','min:3','max:255'],
            'photo' => ['nullable','mimes:jpeg,jpg,png,gif','max:2048'],
        ],[
            'name.required' => 'Please input name',
            'photo.required' => 'Please input photo',
        ]);
        $data['name'] = $request->name;
        $data['photo'] = $request->photo;
        $data['slug'] = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-',$request->title))); // to get unique slug add...
        $data['status'] = $request->status;

        //Who Update this
        $data['update_by'] = Auth::user()->id;

        //media photo
        if($request->hasFile('photo')){
            $file = $request->file('photo');
            $path = 'backend/images/media';
            $file_name = 'photo_'.rand(000000000,999999999).'.'.$file->getClientOriginalExtension();
            $file->move(public_path($path),$file_name);
            $data['photo'] = $path.'/'.$file_name;

            if(file_exists($checkMedia->photo)){
                unlink($checkMedia->photo);
            }
        }

        DB::table('medias')
            ->where('id',$id)
            ->update($data);
        return redirect()->back()->with('success','Successfully Updated Media');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function destroy(Media $media)
    {
        //Check authentication
//        if (!Auth::user()->can('media.delete')){
//            abort(403,'Unauthorized Action');
//        }
        $checkMedia = Media::findOrFail($media->id);

        if (!is_null($media)){
            $media->delete();
        }

        return redirect()->back()->with('success','Media Deleted Successfully');
    }
    public function mediaDelete($id){
        //Check authentication
//        if (!Auth::user()->can('media.delete')) {
//            abort(403, 'Unauthorized Action');
//        }
        $checkMedia = Media::findOrFail($id);
        if (!is_null($checkMedia)) {
            $checkMedia->delete();
        }
        return redirect()->back()->with('success', 'Photo Deleted Successfully');

    }
}
