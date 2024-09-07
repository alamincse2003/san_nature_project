<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\CRM;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CRMController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Check authentication
//        if (!Auth::user()->can('slider.all')){
//            abort(403,'Unauthorized Action');
//        }

        $data['crms']= CRM::where('status','active')->orderBy('id','ASC')->get();
        return view('backend.crm.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Check authentication
//        if (!Auth::user()->can('crm.create')){
//            abort(403,'Unauthorized Action');
//        }
        return view('backend.crm.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        if (!Auth::user()->can('crm.create')){
//            abort(403,'Unauthorized Action');
//        }
//        dd($request->all());
        $request->validate([
            'title' => ['required','string','min:5','max:100'],
            'phone' => ['required','string','min:10','max:20'],
            'email' => ['required','string','min:10','max:50'],
            'details' => ['required','string','min:10','max:10000'],
            'date' => ['required','string'],
        ],[
            'title.required' => 'Please input title',
            'phone.required' => 'Please input phone',
            'details.required' => 'Please input details',
        ]);
        $data['title'] = $request->title;
        $data['phone'] = $request->phone;
        $data['email'] = $request->email;
        $data['details'] = $request->details;
        $data['date'] = $request->date;
        $data['status'] = $request->status;


        //crm photo
        if($request->hasFile('photo')){
            $file = $request->file('photo');
            $path = 'backend/images/crm';
            $file_name = 'crm_'.rand(000000000,999999999).'.'.$file->getClientOriginalExtension();
            $file->move(public_path($path),$file_name);
            $data['photo'] = $path.'/'.$file_name;
        }

        $crm = CRM::create($data);
        return redirect()->back()->with('success','Successfully Create a new CRM');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CRM  $cRM
     * @return \Illuminate\Http\Response
     */
    public function show(CRM $cRM)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CRM  $cRM
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Check authentication
//        if (!Auth::user()->can('crm.update')){
//            abort(403,'Unauthorized Action');
//        }

        $data['crm'] = CRM::findOrFail($id);
        return view('backend.crm.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CRM  $cRM
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Check authentication
//        if (!Auth::user()->can('crm.update')){
//            abort(403,'Unauthorized Action');
//        }

        $checkCrm = CRM::findOrFail($id);

        $request->validate([
            'title' => ['required','string','min:5','max:100'],
            'phone' => ['required','string','min:10','max:20'],
            'email' => ['required','string','min:10','max:20'],
            'details' => ['required','string','min:10','max:10000'],
            'date' => ['required','string'],
        ],[
            'title.required' => 'Please input title',
            'phone.required' => 'Please input phone',
            'details.required' => 'Please input details',
        ]);
        $data['title'] = $request->title;
        $data['phone'] = $request->phone;
        $data['email'] = $request->email;
        $data['details'] = $request->details;
        $data['date'] = $request->date;
        $data['status'] = $request->status;

        //crm photo
        if($request->hasFile('photo')){
            $file = $request->file('photo');
            $path = 'backend/images/crm';
            $file_name = 'crm_'.rand(000000000,999999999).'.'.$file->getClientOriginalExtension();
            $file->move(public_path($path),$file_name);
            $data['photo'] = $path.'/'.$file_name;

            if(file_exists($checkCrm->photo)){
                unlink($checkCrm->photo);
            }
        }


        DB::table('c_r_m_s')
            ->where('id',$id)
            ->update($data);
        return redirect()->back()->with('success','Successfully CRM Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CRM  $cRM
     * @return \Illuminate\Http\Response
     */
    public function destroy(CRM $crm)
    {
        //Check authentication
//        if (!Auth::user()->can('crm.delete')){
//            abort(403,'Unauthorized Action');
//        }
        $checkCrm = Crm::findOrFail($crm->id);
        if (!is_null($crm)){
            $crm->delete();
        }
        return redirect()->back()->with('success','CRM Deleted Successfully');
    }
}
