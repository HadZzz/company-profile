<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TeamMember;

class AboutController extends Controller
{
    public function index()
    {
        $teamMembers = TeamMember::where('is_featured', true)
            ->orderBy('order')
            ->get();

        return view('about', [
            'teamMembers' => $teamMembers
        ]);
    }
}
