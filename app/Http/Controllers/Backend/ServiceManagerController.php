<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\ServiceManager;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ServiceManagerController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( Request $request, string $id = null ) {
        $service_managers = ServiceManager::get()->all();

        if ( $id ) {
            $service_manager = ServiceManager::findorFail( $id );
        } else {
            $service_manager = new ServiceManager;
        }
        if ( $request->isMethod( 'post' ) ) {
            if ( empty( $service_manager ) ) {
                $service_manager = new ServiceManager();
            }

            $service_manager->title = $request->title;
            $service_manager->content = $request->content;

            if ( $request->hasFile( 'image' ) ) {
                $exists = 'images/service_manager/' . $service_manager->image;
                if ( File::exists( $exists ) ) {
                    File::delete( $exists );
                }

                $image_temp = $request->file( 'image' );
                if ( $image_temp->isValid() ) {
                    $extension = $image_temp->getClientOriginalExtension();
                    $imageName = time() . '.' . $extension;
                    $imagePath = 'images/service_manager';
                    $image_temp->move( public_path( $imagePath ), $imageName );
                    $service_manager->image = $imageName;
                }
            }
            if ( !empty( $id ) ) {
                $service_manager->update();
                return redirect( route( 'service-manager.index' ) )->with( 'success', 'Update Success!!' );
            } else {
                $service_manager->save();
                return redirect( route( 'service-manager.index' ) )->with( 'success', 'Create Success!!' );
            }
        }

        return view( 'backend.service_managers.index', compact( 'service_managers', 'service_manager' ) );
    }
    public function serviceManagerUpload(Request $request)
    {
        // dd($request->all());
        if($request->hasFile('upload'))
        {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName . '_' .time() . '.' . $extension;
            $request->file('upload')->move(public_path('images/service_manager'), $fileName);
            // dd('d');
            $url = asset('images/service_manager/'.$fileName);
            return response()->json(['fileName' => $fileName , 'uploaded'=>1,'url' => $url]);
        }
    }
}
