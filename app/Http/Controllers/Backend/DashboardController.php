<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //Dashboard default data
    public function __invoke() {

        return view('backend.dashboard.basic_page');
    }


}
