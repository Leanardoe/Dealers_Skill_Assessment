<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function store(Request $request)
    {
        //Placeholder
    }
    public function create()
    {
        return view('customers.create');
    }

}
