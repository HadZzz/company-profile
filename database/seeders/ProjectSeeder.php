<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = [
            [
                'title' => 'E-Commerce Platform',
                'slug' => 'e-commerce-platform',
                'description' => 'A full-featured e-commerce platform built with Laravel and Vue.js, featuring real-time inventory management, payment gateway integration, and advanced analytics.',
                'client' => 'TechMart Solutions',
                'category' => 'Web Development',
                'completed_at' => '2023-12-15',
                'image' => 'projects/e-commerce.jpg',
                'technologies' => json_encode(['Laravel', 'Vue.js', 'MySQL', 'Redis', 'AWS']),
                'features' => json_encode([
                    'Real-time Inventory Management',
                    'Multiple Payment Gateways',
                    'Advanced Analytics Dashboard',
                    'Customer Review System',
                    'Order Tracking'
                ]),
            ],
            [
                'title' => 'Healthcare Management System',
                'slug' => 'healthcare-management-system',
                'description' => 'A comprehensive healthcare management system that streamlines patient care, appointment scheduling, and medical record management.',
                'client' => 'MediCare Plus',
                'category' => 'Web Application',
                'completed_at' => '2024-01-20',
                'image' => 'projects/healthcare.jpg',
                'technologies' => json_encode(['Laravel', 'React', 'PostgreSQL', 'Docker']),
                'features' => json_encode([
                    'Electronic Health Records',
                    'Appointment Management',
                    'Prescription System',
                    'Lab Results Integration',
                    'Billing Management'
                ]),
            ],
            [
                'title' => 'Real Estate Mobile App',
                'slug' => 'real-estate-mobile-app',
                'description' => 'A feature-rich mobile application for real estate listings, virtual tours, and property management.',
                'client' => 'PropertyFinder Pro',
                'category' => 'Mobile Development',
                'completed_at' => '2024-02-01',
                'image' => 'projects/real-estate.jpg',
                'technologies' => json_encode(['React Native', 'Node.js', 'MongoDB', 'Firebase']),
                'features' => json_encode([
                    'Virtual Property Tours',
                    'Real-time Chat',
                    'Property Filtering',
                    'Saved Searches',
                    'Mortgage Calculator'
                ]),
            ],
        ];

        foreach ($projects as $project) {
            Project::create($project);
        }
    }
}
