<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Models
use App\Models\SocialMedia;
use App\Models\Retention;
use App\Models\EducationalAttainment;
use App\Models\NewMembership;

class NewMembershipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Display the page
        $media = SocialMedia::all();
        $retention = Retention::all();
        $education = EducationalAttainment::all();
        return view('membership_form')->with([
            'media'=>$media,
            'retention'=>$retention,
            'education'=>$education
        ]);
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
    public function store(Request $request, NewMembership $newmember)
    {
        // Validation
        $request->validate([
            'name'=>'required',
            'telephone_number'=>'required',
            'date_of_birth'=>'required',
            'mobile_number'=>'required|numeric',
            'personal_email_address'=>'required|email|unique:new_memberships,personal_email_address',
            'address'=>'required',
            'company_name'=>'required',
            'length_of_stay'=>'required',
            'company_email_address'=>'required|email|unique:new_memberships,company_email_address',
            'company_telephone_number'=>'required|numeric',
            'position'=>'required',
            'company_address'=>'required',
            'degree'=>'required'
        ]);

        // Save the values in the DB
        $newmember->name = $request->name;
        $newmember->date_of_birth = $request->date_of_birth;
        $newmember->personal_email_address = $request->personal_email_address;
        $newmember->personal_tel_number = $request->telephone_number;
        $newmember->mobile_number = $request->mobile_number;
        $newmember->personal_address = $request->address;

        $newmember->company_name = $request->company_name;
        $newmember->company_email_address = $request->company_email_address;
        $newmember->position = $request->position;
        $newmember->length_of_stay = $request->length_of_stay;
        $newmember->company_tel_number = $request->company_telephone_number;
        $newmember->company_address = $request->company_address;
        $newmember->educational_id = $request->educational_attainment;
        $newmember->school_university = $request->school_university;
        $newmember->degree = $request->degree;
        $newmember->prc_number = $request->prc_number;
        $newmember->graduate_school = $request->graduate_school;

        $newmember->social_media_id = $request->social_media;
        $newmember->who_invite = $request->learn_about_pscs;

        $newmember->allow_retention_id = $request->allow_retain;

        $newmember->save();

        return redirect()->route('membership.index')->with('success_add', 'Your request is submitted, please check your email.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
