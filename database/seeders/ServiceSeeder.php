<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            [
                'name' => 'Web Development',
                'slug' => 'web-development',
                'description' => 'Custom web development solutions tailored to your business needs. We create responsive, user-friendly websites that drive results.',
                'icon' => 'code',
                'image' => 'services/web-development.jpg',
                'features' => json_encode([
                    'Custom Web Applications',
                    'E-commerce Solutions',
                    'Content Management Systems',
                    'API Development',
                    'Web Maintenance'
                ]),
            ],
            [
                'name' => 'Mobile App Development',
                'slug' => 'mobile-app-development',
                'description' => 'Native and cross-platform mobile applications that deliver exceptional user experiences across all devices.',
                'icon' => 'mobile',
                'image' => 'services/mobile-development.jpg',
                'features' => json_encode([
                    'iOS Development',
                    'Android Development',
                    'Cross-platform Solutions',
                    'App Maintenance',
                    'App Store Optimization'
                ]),
            ],
            [
                'name' => 'UI/UX Design',
                'slug' => 'ui-ux-design',
                'description' => 'User-centered design solutions that enhance user experience and drive engagement with your digital products.',
                'icon' => 'palette',
                'image' => 'services/ui-ux-design.jpg',
                'features' => json_encode([
                    'User Research',
                    'Wireframing',
                    'Prototyping',
                    'Visual Design',
                    'Usability Testing'
                ]),
            ],
            [
                'name' => 'Digital Marketing',
                'slug' => 'digital-marketing',
                'description' => 'Comprehensive digital marketing strategies to increase your online presence and drive business growth.',
                'icon' => 'trending-up',
                'image' => 'services/digital-marketing.jpg',
                'features' => json_encode([
                    'SEO Optimization',
                    'Social Media Marketing',
                    'Content Marketing',
                    'Email Marketing',
                    'Analytics & Reporting'
                ]),
            ],
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
}
