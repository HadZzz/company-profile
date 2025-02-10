<?php

namespace Database\Seeders;

use App\Models\TeamMember;
use Illuminate\Database\Seeder;

class TeamMemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $members = [
            [
                'name' => 'David Wilson',
                'position' => 'Chief Executive Officer',
                'bio' => 'David is a seasoned technology leader with over 15 years of experience in software development and business management. He has successfully led numerous digital transformation projects for Fortune 500 companies.',
                'image' => 'team/david-wilson.jpg',
                'social_links' => json_encode([
                    'linkedin' => 'https://linkedin.com/in/davidwilson',
                    'twitter' => 'https://twitter.com/davidwilson',
                    'github' => 'https://github.com/davidwilson'
                ]),
                'is_featured' => true,
                'order' => 1,
            ],
            [
                'name' => 'Jennifer Lee',
                'position' => 'Chief Technology Officer',
                'bio' => 'Jennifer brings 12 years of expertise in software architecture and emerging technologies. She leads our technical strategy and ensures the delivery of high-quality solutions.',
                'image' => 'team/jennifer-lee.jpg',
                'social_links' => json_encode([
                    'linkedin' => 'https://linkedin.com/in/jenniferlee',
                    'twitter' => 'https://twitter.com/jenniferlee',
                    'github' => 'https://github.com/jenniferlee'
                ]),
                'is_featured' => true,
                'order' => 2,
            ],
            [
                'name' => 'Michael Chen',
                'position' => 'Lead Software Architect',
                'bio' => 'Michael is a full-stack developer with deep expertise in cloud architecture and distributed systems. He ensures our technical solutions are scalable and future-proof.',
                'image' => 'team/michael-chen.jpg',
                'social_links' => json_encode([
                    'linkedin' => 'https://linkedin.com/in/michaelchen',
                    'twitter' => 'https://twitter.com/michaelchen',
                    'github' => 'https://github.com/michaelchen'
                ]),
                'is_featured' => true,
                'order' => 3,
            ],
            [
                'name' => 'Sarah Johnson',
                'position' => 'UX/UI Design Lead',
                'bio' => 'Sarah is passionate about creating beautiful and intuitive user experiences. She leads our design team in creating engaging and user-centered digital products.',
                'image' => 'team/sarah-johnson.jpg',
                'social_links' => json_encode([
                    'linkedin' => 'https://linkedin.com/in/sarahjohnson',
                    'twitter' => 'https://twitter.com/sarahjohnson',
                    'dribbble' => 'https://dribbble.com/sarahjohnson'
                ]),
                'is_featured' => true,
                'order' => 4,
            ],
        ];

        foreach ($members as $member) {
            TeamMember::create($member);
        }
    }
}
