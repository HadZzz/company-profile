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
                'name' => 'E-commerce Platform',
                'description' => 'A modern e-commerce platform built with Laravel and Vue.js, featuring real-time inventory management and advanced analytics.',
                'category' => 'Web Development',
                'image' => 'https://images.unsplash.com/photo-1557821552-17105176677c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80',
                'client' => 'RetailCo Inc.',
                'completion_date' => '2024-12-15',
                'technologies' => 'Laravel, Vue.js, MySQL, Redis',
                'link' => null,
                'is_featured' => true
            ],
            [
                'name' => 'Healthcare Management System',
                'description' => 'A comprehensive healthcare management system that streamlines patient care and administrative processes.',
                'category' => 'Enterprise Software',
                'image' => 'https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80',
                'client' => 'HealthCare Plus',
                'completion_date' => '2024-11-30',
                'technologies' => 'Laravel, React, PostgreSQL, Docker',
                'link' => null,
                'is_featured' => true
            ],
            [
                'name' => 'Mobile Banking App',
                'description' => 'A secure and user-friendly mobile banking application with advanced security features and real-time transactions.',
                'category' => 'Mobile Development',
                'image' => 'https://images.unsplash.com/photo-1563986768609-322da13575f3?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80',
                'client' => 'FinBank',
                'completion_date' => '2024-10-20',
                'technologies' => 'React Native, Node.js, MongoDB',
                'link' => null,
                'is_featured' => true
            ],
            [
                'name' => 'Real Estate Platform',
                'description' => 'A feature-rich real estate platform with virtual tours and advanced property search capabilities.',
                'category' => 'Web Development',
                'image' => 'https://images.unsplash.com/photo-1560448204-e02f11c3d0e2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80',
                'client' => 'PropTech Solutions',
                'completion_date' => '2024-09-15',
                'technologies' => 'Laravel, Alpine.js, MySQL',
                'link' => null,
                'is_featured' => false
            ],
        ];

        foreach ($projects as $project) {
            Project::create($project);
        }
    }
}
