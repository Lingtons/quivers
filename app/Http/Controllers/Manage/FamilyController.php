<?php

namespace App\Http\Controllers\Manage;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Family;
use App\Models\User;
use Illuminate\View\View;

class FamilyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $families = Family::all();

        return view('manage.family.index', compact('families'));
        // return view('manage.family.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // $families = Family::all();

        return view('manage.family.create');
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
        // Family::create($request->all());
        $family = new Family;
        
        $family->user_id = $request->user_id;
        $family->family_name = $request->family_name;
        $family->phone = $request->phone;
        $family->phone_alt = $request->phone_alt;
        $family->email = $request->email;
        $family->father_name = $request->father_name;
        $family->mother_name = $request->mother_name;
        $family->maid_name = $request->maid_name;
        $family->image_url = $request->image_url;
        $family->image_url_alt = $request->image_url_alt;
        $family->preferred_check_code = $request->preferred_check_code;
        // $family = request()->validate([]);

        // auth()->user()->family()->associate($family);

        $family->save();

        return "saved";
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
        $family = Family::find($id);

        // dd($family);
         
        return view('manage.family.single', compact('family'));
        
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
        $family = Family::find($id);

        return view('manage.family.edit', compact('family'));
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
        $family = Family::find($id);
        $family->update($request->all());
        
        return redirect()->route('manage.family.index');
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
        // Family::delete($id);

        $family = Family::find($id);

        $family->delete();
        return redirect()->route('manage.family.index');
    }
}
