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
            'sname' => 'required|string|min:3',
            'lname' => 'required|string|min:3',
            'fname' => 'required|string|min:5',
            'mname' => 'required|string|min:5',
            'gender' => 'required',
            'category' => 'required',
            'dob' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
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
