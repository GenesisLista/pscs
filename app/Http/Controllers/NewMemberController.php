<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Carbon
use Carbon\Carbon;

// Models
use App\Models\SocialMedia;
use App\Models\EducationalAttainment;
use App\Models\NewMembership;

class NewMemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Display the table list
        $newmembership = NewMembership::whereNull('status')->get();
        return view('new_member.index')->with([
            'newmembership'=>$newmembership
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Display the add form
        $educational_attainment = EducationalAttainment::all();
        $social_media = SocialMedia::all();
        return view('new_member.create')->with([
            'social_media'=>$social_media,
            'educational_attainment'=>$educational_attainment
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, NewMembership $newmembership)
    {
        // Validate
        $request->validate([
            'name' => 'required',
            //'personal_email_address' => 'required|email|unique:new_memberships,personal_email_address',
            'company_name' => 'required'
        ]);


        // Save the data in the DB
        $newmembership->name = $request->name;
        
        // Allow the Date of Birth to be empty
        if($request->date_of_birth != '')
        {
            $newmembership->date_of_birth = Carbon::createFromFormat('m/d/Y', $request->date_of_birth)->format('Y-m-d');
        }

        $newmembership->personal_email_address = $request->personal_email_address;
        $newmembership->personal_tel_number = $request->telephone_number;
        $newmembership->mobile_number = $request->mobile_number;
        $newmembership->personal_address = $request->address;

        $newmembership->company_name = $request->company_name;
        $newmembership->company_email_address = $request->company_email_address;
        $newmembership->position = $request->position;
        $newmembership->length_of_stay = $request->length_of_stay;
        $newmembership->company_tel_number = $request->company_telephone_number;
        $newmembership->company_address = $request->company_address;

        $newmembership->educational_id = $request->educational_attainment;
        $newmembership->school_university = $request->school_university;
        $newmembership->degree = $request->degree;
        $newmembership->prc_number = $request->prc_number;
        $newmembership->graduate_school = $request->graduate_school;
        $newmembership->social_media_id = $request->social_media;
        $newmembership->who_invite = $request->who_to_thank;

        $newmembership->allow_retention_id = $request->allow_retain;

        $newmembership->save();

        return redirect()->route('new.index')->with('success_add', 'Record added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $newmembership = NewMembership::findOrFail($id);
        return view('new_member.show')->with([
            'newmembership'=>$newmembership
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('new_member.edit');
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
        // Delete the values in the DB
        NewMembership::destroy($id);

        return redirect()->route('new.index')->with('success_delete', 'Record deleted successfully');
    }

    // This is to view SOA
    public function issue_soa($id)
    {
        $newmembership = NewMembership::findOrFail($id);
        return view('new_member.issue_soa')->with([
            'newmembership'=>$newmembership
        ]);
    }
}
