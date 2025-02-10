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
                'position' => 'CEO, TechMart Solutions',
                'company' => 'TechMart Solutions',
                'content' => 'Working with this team was an absolute pleasure. They delivered our e-commerce platform ahead of schedule and the quality of their work exceeded our expectations. Their attention to detail and commitment to excellence is remarkable.',
                'rating' => 5,
                'image' => 'testimonials/john-smith.jpg',
                'is_featured' => true,
            ],
            [
                'name' => 'Sarah Johnson',
                'position' => 'CTO, MediCare Plus',
                'company' => 'MediCare Plus',
                'content' => 'The healthcare management system they developed has transformed our operations. Their understanding of our requirements and ability to deliver innovative solutions made them the perfect technology partner.',
                'rating' => 5,
                'image' => 'testimonials/sarah-johnson.jpg',
                'is_featured' => true,
            ],
            [
                'name' => 'Michael Chen',
                'position' => 'Founder, PropertyFinder Pro',
                'company' => 'PropertyFinder Pro',
                'content' => 'The mobile app they developed for our real estate business has received outstanding feedback from our users. Their technical expertise and proactive approach to problem-solving made the development process smooth and efficient.',
                'rating' => 5,
                'image' => 'testimonials/michael-chen.jpg',
                'is_featured' => true,
            ],
            [
                'name' => 'Emily Brown',
                'position' => 'Marketing Director, Digital First',
                'company' => 'Digital First',
                'content' => 'Their digital marketing strategies have significantly improved our online presence and lead generation. The team is highly professional, responsive, and always delivers results.',
                'rating' => 5,
                'image' => 'testimonials/emily-brown.jpg',
                'is_featured' => true,
            ],
        ];

        foreach ($testimonials as $testimonial) {
            Testimonial::create($testimonial);
        }
    }
}
