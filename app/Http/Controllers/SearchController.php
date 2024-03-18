<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserProfile;
use App\Models\User;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $keyword = trim($request->keyword);
        if (empty($keyword)) {
            $UserProfiles = collect();
        } else {
            $UserProfiles = UserProfile::query()
                ->where('Nickname', 'like', "%{$keyword}%")
                ->orWhere('SNS', 'like', "%{$keyword}%")
                ->orWhere('Industry', 'like', "%{$keyword}%")
                ->orWhere('JobDescription', 'like', "%{$keyword}%")
                ->orWhere('Career', 'like', "%{$keyword}%")
                ->orWhere('Qualification', 'like', "%{$keyword}%")
                ->orWhere('Disk', 'like', "%{$keyword}%")
                ->orWhere('Whyme', 'like', "%{$keyword}%")
                ->orWhere('Product', 'like', "%{$keyword}%")
                ->orWhere('Hobby', 'like', "%{$keyword}%")
                ->orWhere('Birthplace', 'like', "%{$keyword}%")
                ->orWhere('HolidayTime', 'like', "%{$keyword}%")
                ->orWhere('OneWord', 'like', "%{$keyword}%")
                ->orWhere('Contact', 'like', "%{$keyword}%")
                ->get();
                // dd($UserProfiles);
        }
        return view('search.searchResult', ['UserProfiles' => $UserProfiles]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return response()->view('search.input');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
