<?php

// TermsController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TermsController extends Controller
{
    public function OurTeamIndex()
    {
        return view('terms.OurTeam');
        // return response()->view('terms.OurTeam');
    }
}
