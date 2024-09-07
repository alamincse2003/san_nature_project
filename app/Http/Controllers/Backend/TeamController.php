<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Tab;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class TeamController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( Request $request, string $id = null ) {
        $teams = Team::with( 'tab' )->get()->all();
        $tabs = Tab::where( 'status', 'active' )->get()->all();
        if ( $id ) {
            $team = Team::findorFail( $id );
        } else {
            $team = new Team;
        }
        if ( $request->isMethod( 'post' ) ) {
            if ( empty( $team ) ) {
                $team = new Team();
            }

            $team->tab_id = $request->tab_id;
            $team->title = $request->title;
            $team->position = $request->position;
            $team->designation = $request->designation;
            $team->job_experience = $request->job_experience;
            $team->order = $request->order;

            if ( $request->hasFile( 'image' ) ) {
                $exists = 'images/teams/' . $team->image;
                if ( File::exists( $exists ) ) {
                    File::delete( $exists );
                }

                $image_temp = $request->file( 'image' );
                if ( $image_temp->isValid() ) {
                    $extension = $image_temp->getClientOriginalExtension();
                    $imageName = time() . '.' . $extension;
                    $imagePath = 'images/teams';
                    $image_temp->move( public_path( $imagePath ), $imageName );
                    $team->image = $imageName;
                }
            }
            if ( !empty( $id ) ) {
                $team->status = $request->status;
                $team->update();
                return redirect( route( 'team.index' ) )->with( 'success', 'Update Success!!' );
            } else {
                $team->status = 'active';
                $team->save();
                return redirect( route( 'team.index' ) )->with( 'success', 'Create Success!!' );
            }
        }

        return view( 'backend.team.index', compact( 'teams', 'team', 'tabs' ) );
    }
}
