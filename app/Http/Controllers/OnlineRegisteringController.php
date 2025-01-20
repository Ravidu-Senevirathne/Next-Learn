<?php

namespace App\Http\Controllers;

use App\Models\Online_Registering;
use Illuminate\Http\Request;

class OnlineRegisteringController extends Controller
{
    public function index()
    {
        $registrations = Online_Registering::all();
        return view('online-registering.index', compact('registrations'));
    }

    public function create()
    {
        return view('online-registering.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'programme' => 'required',
            'title' => 'required',
            'name' => 'required',
            'full_name' => 'required',
            'dob' => 'required|date',
            'country' => 'required',
            'nic' => 'required',
            'mobile' => 'required',
            'email' => 'required|email',
            'telephone' => 'required',
            'address' => 'required',
            'description' => 'required'
        ]);

        Online_Registering::create($validated);
        return redirect('/')->with('success', 'Registration successful!');
    }

    public function show(Online_Registering $onlineRegistering)
    {
        return view('online-registering.show', compact('onlineRegistering'));
    }
}
