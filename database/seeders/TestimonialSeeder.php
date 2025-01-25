<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $testimonials = [
            [
                'name' => 'John Smith',
                'position' => 'CEO',
                'company' => 'Tech Innovations Inc.',
                'content' => 'Working with this team has been an absolute pleasure. Their expertise in web development and attention to detail resulted in a product that exceeded our expectations.',
                'image' => 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80',
                'rating' => 5,
                'is_featured' => true,
                'order' => 1
            ],
            [
                'name' => 'Sarah Johnson',
                'position' => 'Marketing Director',
                'company' => 'Global Solutions Ltd.',
                'content' => 'The mobile app they developed for us has significantly improved our customer engagement. Their innovative approach and technical expertise are truly impressive.',
                'image' => 'https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80',
                'rating' => 5,
                'is_featured' => true,
                'order' => 2
            ],
            [
                'name' => 'Michael Chen',
                'position' => 'CTO',
                'company' => 'Digital Dynamics',
                'content' => 'Their cloud solutions have transformed our infrastructure, resulting in improved performance and significant cost savings. Highly recommended for enterprise-level projects.',
                'image' => 'https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80',
                'rating' => 5,
                'is_featured' => true,
                'order' => 3
            ],
        ];

        foreach ($testimonials as $testimonial) {
            Testimonial::create($testimonial);
        }
    }
}
