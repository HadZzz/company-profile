<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialsController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::orderBy('order')
            ->get();

        return view('testimonials', [
            'testimonials' => $testimonials
        ]);
    }
}
