<?php

// TermsController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserProfile;
use App\Models\User;
use Auth;
use Illuminate\Support\Facades\Storage;

class OurTeamController extends Controller
{
    public function index()
    {
        return view('terms.OurTeam');
        // return response()->view('terms.OurTeam');
    }
}
