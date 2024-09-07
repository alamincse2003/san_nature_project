<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\coe;
use Illuminate\Http\Request;

class CoeController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( Request $request, string $id = null ) {
        $coes = coe::get()->all();

        if ( $id ) {
            $coe = coe::findorFail( $id );
        } else {
            $coe = new coe;
        }
        if ( $request->isMethod( 'post' ) ) {
            if ( empty( $coe ) ) {
                $coe = new coe();
            }

            $coe->title = $request->title;
            $coe->content = $request->content;

            if ( !empty( $id ) ) {
                $coe->update();
                return redirect( route( 'coe.index' ) )->with( 'success', 'Update Success!!' );
            } else {
                $coe->save();
                return redirect( route( 'coe.index' ) )->with( 'success', 'Create Success!!' );
            }
        }

        return view( 'backend.coe.index', compact( 'coes', 'coe' ) );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store( Request $request ) {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show( $id ) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit( $id ) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update( Request $request, $id ) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id ) {
        //
    }
}
