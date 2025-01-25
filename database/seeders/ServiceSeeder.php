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
                'description' => 'Custom web development solutions tailored to your business needs.',
                'icon' => '<svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" /></svg>',
                'features' => json_encode([
                    'Custom Web Applications',
                    'E-commerce Solutions',
                    'Content Management Systems',
                    'API Development',
                    'Website Maintenance'
                ]),
                'is_featured' => true,
                'order' => 1
            ],
            [
                'name' => 'Mobile Development',
                'description' => 'Native and cross-platform mobile app development for iOS and Android.',
                'icon' => '<svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" /></svg>',
                'features' => json_encode([
                    'iOS App Development',
                    'Android App Development',
                    'Cross-platform Development',
                    'App Maintenance & Support',
                    'App Store Optimization'
                ]),
                'is_featured' => true,
                'order' => 2
            ],
            [
                'name' => 'UI/UX Design',
                'description' => 'User-centered design solutions that enhance user experience and engagement.',
                'icon' => '<svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" /></svg>',
                'features' => json_encode([
                    'User Interface Design',
                    'User Experience Design',
                    'Wireframing & Prototyping',
                    'Design Systems',
                    'Usability Testing'
                ]),
                'is_featured' => true,
                'order' => 3
            ],
            [
                'name' => 'Digital Marketing',
                'description' => 'Comprehensive digital marketing strategies to grow your online presence.',
                'icon' => '<svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z" /></svg>',
                'features' => json_encode([
                    'SEO Optimization',
                    'Social Media Marketing',
                    'Content Marketing',
                    'Email Marketing',
                    'Analytics & Reporting'
                ]),
                'is_featured' => true,
                'order' => 4
            ],
            [
                'name' => 'Cloud Solutions',
                'description' => 'Scalable cloud infrastructure and deployment solutions.',
                'icon' => '<svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" /></svg>',
                'features' => json_encode([
                    'Cloud Migration',
                    'Cloud Infrastructure',
                    'DevOps Services',
                    'Cloud Security',
                    'Monitoring & Support'
                ]),
                'is_featured' => true,
                'order' => 5
            ],
            [
                'name' => 'IT Consulting',
                'description' => 'Expert IT consulting services to help you make informed technology decisions.',
                'icon' => '<svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>',
                'features' => json_encode([
                    'Technology Assessment',
                    'Digital Transformation',
                    'IT Strategy',
                    'Project Management',
                    'Security Consulting'
                ]),
                'is_featured' => true,
                'order' => 6
            ],
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
}
