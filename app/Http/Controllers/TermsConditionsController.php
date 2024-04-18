<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserProfile;
use App\Models\User;
use Auth;
use Illuminate\Support\Facades\Storage;

class TermsConditionsController extends Controller
{
    public function index()
    {
        return view('terms.TermsConditions');
        // return response()->view('terms.OurTeam');
    }
}
