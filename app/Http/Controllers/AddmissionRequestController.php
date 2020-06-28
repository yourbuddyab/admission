<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddmissionRequestController extends Controller
{
    public function index()
    {
        return view('admin.addmissionrequest.index');
    }

    public function create()
    {
        return view('welcome');
    }

    public function store(Request $request)
    {
        $this->validateRequest($request);
    }
    public function validateRequest($request)
    {
        $request->validate([
            'sname' => 'required',
            'lname' => 'required',
            'fname' => 'required',
            'mname' => 'required',
            'gender' => 'required',
            'dob' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'oneaddress' => 'required',
            'twoaddress' => 'required',
            'threeaddress' => 'required',
            'fouraddress' => 'required',
            'application' => 'required',
            'classes' => 'required',
            'lastyear' => 'required',
        ]);
    }
}
