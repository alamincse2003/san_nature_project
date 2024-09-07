<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\ListCompany;
use Illuminate\Http\Request;

class ListCompanyController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( Request $request, string $id = null ) {
        $list_companies = ListCompany::get()->all();

        if ( $id ) {
            $list_company = ListCompany::findorFail( $id );
        } else {
            $list_company = new ListCompany;
        }
        if ( $request->isMethod( 'post' ) ) {
            if ( empty( $list_company ) ) {
                $list_company = new ListCompany();
            }

            $list_company->name = $request->name;
            $list_company->url = $request->url;

            if ( !empty( $id ) ) {
                $list_company->status = $request->status;
                $list_company->update();
                return redirect( route( 'list-company.index' ) )->with( 'success', 'Update Success!!' );
            } else {
                $list_company->status = 'active';
                $list_company->save();
                return redirect( route( 'list-company.index' ) )->with( 'success', 'Create Success!!' );
            }
        }

        return view( 'backend.list_company.index', compact( 'list_companies', 'list_company' ) );
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
