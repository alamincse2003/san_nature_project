<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Tab;
use Illuminate\Http\Request;

class TabController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( Request $request, string $id = null ) {
        $tabs = Tab::get()->all();

        if ( $id ) {
            $tab = Tab::findorFail( $id );
        } else {
            $tab = new Tab;
        }
        if ( $request->isMethod( 'post' ) ) {
            if ( empty( $tab ) ) {
                $tab = new Tab();
            }

            $tab->title = $request->title;
            $tab->tab_order = $request->tab_order;
            if ( !empty( $id ) ) {
                $tab->status = $request->status;
                $tab->update();
                return redirect( route( 'tab.index' ) )->with( 'success', 'Update Success!!' );
            } else {
                $tab->status = 'active';
                $tab->save();
                return redirect( route( 'tab.index' ) )->with( 'success', 'Create Success!!' );
            }
        }

        return view( 'backend.tab.index', compact( 'tabs', 'tab' ) );
    }
}
