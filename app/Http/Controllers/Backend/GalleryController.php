<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GalleryController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        //Check authentication
//        if (!Auth::user()->can('gallery.all')){
//            abort(403,'Unauthorized Action');
//        }

        $data['gallerys'] = Gallery::where( 'status', 'active' )->orderBy( 'id', 'ASC' )->get();
        return view( 'backend.gallery.index', $data );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //Check authentication
//        if (!Auth::user()->can('gallery.create')){
//            abort(403,'Unauthorized Action');
//        }
        return view( 'backend.gallery.create' );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store( Request $request ) {
        //Check authentication
//        if (!Auth::user()->can('gallery.create')){
//            abort(403,'Unauthorized Action');
//        }
//        dd($request->all());

        $request->validate( [
            'title' => ['required', 'string', 'min:3', 'max:40'],
            'photo' => ['required', 'mimes:jpeg,jpg,png', 'max:2048'],
        ], [
            'name.required' => 'Slider name required',
        ] );

        $data['title'] = $request->title;
        $data['status'] = $request->status;

        //Gallery_photo
        if ( $request->hasFile( 'photo' ) ) {
            $file = $request->file( 'photo' );
            $path = 'backend/images/gallery';
            $file_name = 'photo_' . rand( 000000000, 999999999 ) . '.' . $file->getClientOriginalExtension();
            $file->move( public_path( $path ), $file_name );
            $data['photo'] = $path . '/' . $file_name;
        }

        $gallery = Gallery::create( $data );

        return redirect()->back()->with( 'success', 'Successfully Create a new Gallery' );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show( Gallery $gallery ) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit( $id ) {
        //Check authentication
//        if (!Auth::user()->can('gallery.update')){
//            abort(403,'Unauthorized Action');
//        }

        $data['gallery'] = Gallery::findOrFail( $id );
        return view( 'backend.gallery.edit', $data );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update( Request $request, $id ) {
        //Check authentication
//        if (!Auth::user()->can('gallery.update')){
//            abort(403,'Unauthorized Action');
//        }
        $checkSlider = Gallery::findOrFail( $id );
        $request->validate( [
            'title' => ['required', 'string', 'min:3', 'max:40'],
            'photo' => ['nullable', 'mimes:jpeg,jpg,png', 'max:2048'],
        ], [
            'name.required' => 'Slider name required',
        ] );

        $data['title'] = $request->title;
        $data['status'] = $request->status;

        // slider_photo
        if ( $request->hasFile( 'photo' ) ) {
            $file = $request->file( 'photo' );
            $path = 'backend/images/slider';
            $file_name = 'photo_' . rand( 000000000, 999999999 ) . '.' . $file->getClientOriginalExtension();
            $file->move( public_path( $path ), $file_name );
            $data['photo'] = $path . '/' . $file_name;

            if ( file_exists( $checkSlider->photo ) ) {
                unlink( $checkSlider->photo );
            }
        }

        DB::table( 'galleries' )
            ->where( 'id', $id )
            ->update( $data );
        return redirect()->back()->with( 'success', 'Gallery Update Successfully' );

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy( Gallery $gallery ) {
        //
    }
}
