<?php

namespace Database\Seeders;

use App\Models\JobVacancy;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JobVacancySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $vacancies = [
            [
                'title' => 'Senior Full Stack Developer',
                'slug' => 'senior-full-stack-developer',
                'department' => 'Engineering',
                'location' => 'Jakarta, Indonesia',
                'type' => 'Full Time',
                'description' => "We're looking for a Senior Full Stack Developer to join our growing engineering team. The ideal candidate will have strong experience with both frontend and backend development, and a passion for building scalable web applications.

## Responsibilities:
- Design and implement new features and functionality
- Write clean, maintainable, and efficient code
- Collaborate with cross-functional teams
- Mentor junior developers
- Participate in code reviews and technical discussions

## Requirements:
- 5+ years of experience in full stack development
- Strong proficiency in PHP/Laravel and JavaScript/Vue.js
- Experience with RESTful APIs and microservices
- Solid understanding of database design and optimization
- Experience with version control systems (Git)
- Excellent problem-solving skills
- Strong communication skills

## Benefits:
- Competitive salary
- Health insurance
- Professional development opportunities
- Flexible working hours
- Remote work options",
                'requirements' => json_encode([
                    '5+ years of full stack development experience',
                    'Strong PHP/Laravel and JavaScript/Vue.js skills',
                    'Experience with RESTful APIs',
                    'Database design expertise',
                    'Git version control',
                ]),
                'salary_range' => 'IDR 20,000,000 - 35,000,000',
                'is_active' => true,
                'expires_at' => '2024-03-31',
            ],
            [
                'title' => 'UI/UX Designer',
                'slug' => 'ui-ux-designer',
                'department' => 'Design',
                'location' => 'Jakarta, Indonesia',
                'type' => 'Full Time',
                'description' => "We are seeking a talented UI/UX Designer to create amazing user experiences for our clients. The ideal candidate should have a strong portfolio demonstrating their ability to create beautiful and functional designs.

## Responsibilities:
- Create user-centered designs by understanding business requirements
- Create user flows, wireframes, prototypes and mockups
- Translate requirements into style guides, design systems, design patterns and attractive user interfaces
- Design UI elements such as input controls, navigational components and informational components
- Create original graphic designs (e.g. images, sketches and tables)

## Requirements:
- 3+ years of UI/UX design experience
- Strong portfolio of design projects
- Proficiency in design tools (Figma, Adobe XD)
- Understanding of user experience principles
- Excellent visual design skills

## Benefits:
- Competitive salary
- Health insurance
- Creative work environment
- Professional development
- Flexible working hours",
                'requirements' => json_encode([
                    '3+ years of UI/UX design experience',
                    'Strong design portfolio',
                    'Proficiency in Figma and Adobe XD',
                    'Understanding of UX principles',
                    'Visual design expertise',
                ]),
                'salary_range' => 'IDR 15,000,000 - 25,000,000',
                'is_active' => true,
                'expires_at' => '2024-03-31',
            ],
            [
                'title' => 'Digital Marketing Specialist',
                'slug' => 'digital-marketing-specialist',
                'department' => 'Marketing',
                'location' => 'Jakarta, Indonesia',
                'type' => 'Full Time',
                'description' => "We're looking for a Digital Marketing Specialist to develop and implement our marketing strategies. The ideal candidate will have experience in multiple marketing channels and analytics.

## Responsibilities:
- Develop and manage digital marketing campaigns
- Optimize content for SEO and lead generation
- Manage social media presence
- Analyze campaign performance metrics
- Create engaging content for various platforms

## Requirements:
- 3+ years of digital marketing experience
- Experience with SEO/SEM and Google Analytics
- Social media marketing expertise
- Content creation skills
- Data analysis capabilities

## Benefits:
- Competitive salary
- Health insurance
- Performance bonuses
- Professional development
- Flexible working hours",
                'requirements' => json_encode([
                    '3+ years of digital marketing experience',
                    'SEO/SEM expertise',
                    'Social media marketing skills',
                    'Content creation abilities',
                    'Analytics knowledge',
                ]),
                'salary_range' => 'IDR 12,000,000 - 20,000,000',
                'is_active' => true,
                'expires_at' => '2024-03-31',
            ],
        ];

        foreach ($vacancies as $vacancy) {
            JobVacancy::create($vacancy);
        }
    }
}
