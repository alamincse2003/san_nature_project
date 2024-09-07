<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Overview;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class OverviewController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( Request $request, string $id = null ) {
        $overviews = Overview::get()->all();

        if ( $id ) {
            $overview = Overview::findorFail( $id );
        } else {
            $overview = new Overview;
        }
        if ( $request->isMethod( 'post' ) ) {
            if ( empty( $overview ) ) {
                $overview = new Overview();
            }

            $overview->title = $request->title;
            $overview->content = $request->content;
            $overview->type = $request->type;

            if ( $request->hasFile( 'image' ) ) {
                $exists = 'images/overviews/' . $overview->image;
                if ( File::exists( $exists ) ) {
                    File::delete( $exists );
                }

                $image_temp = $request->file( 'image' );
                if ( $image_temp->isValid() ) {
                    $extension = $image_temp->getClientOriginalExtension();
                    $imageName = time() . '.' . $extension;
                    $imagePath = 'images/overviews';
                    $image_temp->move( public_path( $imagePath ), $imageName );
                    $overview->image = $imageName;
                }
            }
            if ( $request->hasFile( 'pdf' ) ) {
                $exists = 'images/overviews/' . $overview->pdf;
                if ( File::exists( $exists ) ) {
                    File::delete( $exists );
                }

                $image_temp = $request->file( 'pdf' );
                if ( $image_temp->isValid() ) {
                    $extension = $image_temp->getClientOriginalExtension();
                    $imageName = time() . '.' . $extension;
                    $imagePath = 'images/overviews';
                    $image_temp->move( public_path( $imagePath ), $imageName );
                    $overview->pdf = $imageName;
                }
            }
            if ( !empty( $id ) ) {
                $overview->update();
                return redirect( route( 'overview.index' ) )->with( 'success', 'Update Success!!' );
            } else {
                $overview->save();
                return redirect( route( 'overview.index' ) )->with( 'success', 'Create Success!!' );
            }
        }

        return view( 'backend.overview.index', compact( 'overviews', 'overview' ) );
    }
}
