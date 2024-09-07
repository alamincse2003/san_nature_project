<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Settings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['settings'] = Settings::where('id',1)->first();
        return view('backend.settings.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Settings  $settings
     * @return \Illuminate\Http\Response
     */
    public function show(Settings $settings)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Settings  $settings
     * @return \Illuminate\Http\Response
     */
    public function edit(Settings $settings)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Settings  $settings
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Settings $settings)
    {
        $request->validate([
//            'app_name' => ['required','string', 'min:4','max:50'],
//            'email' => ['required','email', 'min:4','max:50'],
//            'phone' => ['required', 'numeric', 'min:16'],
//            'address' => ['required','string', 'min:12','max:100'],
//            'logo' => ['mimes:jpeg,jpg,png','max:256'],
//            'favicon' => ['mimes:jpeg,jpg,png','max:128'],
        ]);

        $data['id'] = 1;
        $data['app_name'] = $request->app_name;
        $data['email'] = $request->email;
        $data['phone'] = $request->phone;
        $data['address'] = $request->address;
        $data['social_facebook'] = $request->social_facebook;
        $data['social_linkedIn'] = $request->social_linkedIn;
        $data['social_twitter'] = $request->social_twitter;
        $data['social_instagram'] = $request->social_instagram;
        $data['social_youtube'] = $request->social_youtube;

        $data['c_project'] = $request->c_project;
        $data['client'] = $request->client;
        $data['engineer'] = $request->engineer;
        $data['experience'] = $request->experience;
        $data['google_map_code'] = $request->google_map_code;

        $data['footer'] = $request->footer;
// logo
        if($request->hasFile('logo')){
            $file = $request->file('logo');
            $path = 'backend/settings';
            $file_name = 'logo_'.rand(000000000,999999999).'.'.$file->getClientOriginalExtension();
            $file->move(public_path($path),$file_name);
            $data['logo'] = $path.'/'.$file_name;

            if(file_exists($settings->logo)){
                unlink($settings->logo);
            }
        }

// favicon
        if($request->hasFile('favicon')){
            $file = $request->file('favicon');
            $path = 'backend/settings';
            $file_name = 'favicon_'.rand(000000000,999999999).'.'.$file->getClientOriginalExtension();
            $file->move(public_path($path),$file_name);
            $data['favicon'] = $path.'/'.$file_name;

            if(file_exists($settings->favicon)){
                unlink($settings->favicon);
            }
        }

        // Task Banner
        if($request->hasFile('t_banner')){
            $file = $request->file('t_banner');
            $path = 'backend/settings';
            $file_name = 't_banner_'.rand(000000000,999999999).'.'.$file->getClientOriginalExtension();
            $file->move(public_path($path),$file_name);
            $data['t_banner'] = $path.'/'.$file_name;

            if(file_exists($settings->t_banner)){
                unlink($settings->t_banner);
            }
        }

        // dd($data);
        DB::table('settings')
            ->where('id',$data['id'])
            ->update($data);
        session()->flash('success','Settings Updated Successfully');
        return redirect()->route('settings.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Settings  $settings
     * @return \Illuminate\Http\Response
     */
    public function destroy(Settings $settings)
    {
        //
    }
}
