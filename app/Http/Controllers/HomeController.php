<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use Illuminate\Http\Request;

class HomeController extends Controller
{


    public function __invoke()
    {

        // dd('https://api.dicebear.com/8.x/bokele/jpg');
        $companies = Employer::get();
        return view('home', compact('companies'));
    }
}
