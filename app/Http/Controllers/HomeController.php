<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Project;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $services = Service::where('is_featured', true)
            ->orderBy('order')
            ->limit(6)
            ->get();

        $projects = Project::where('is_featured', true)
            ->orderBy('created_at', 'desc')
            ->limit(3)
            ->get();

        $testimonials = Testimonial::where('is_featured', true)
            ->orderBy('order')
            ->limit(3)
            ->get();

        return view('home', compact('services', 'projects', 'testimonials'));
    }

    public function about()
    {
        return view('about');
    }
}
