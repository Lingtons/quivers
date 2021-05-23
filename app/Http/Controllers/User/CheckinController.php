<?php

namespace App\Http\Controllers\User;

use App\Models\Family;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CheckinController extends Controller
{
    public function check_in($family_id){

        $random_checkin_code = "0094";
        $family = Family::findOrFail($family_id);

      return view('user.check_in_home', ['checkin_code' => $random_checkin_code, 'family' => $family]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd(date('l', time()));

        return redirect()->back();
    }

}
