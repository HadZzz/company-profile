<?php

namespace Database\Seeders;

use App\Models\BlogPost;
use Illuminate\Database\Seeder;

class BlogPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = [
            [
                'title' => 'The Future of Web Development: Trends to Watch in 2025',
                'slug' => 'future-web-development-trends-2025',
                'excerpt' => 'Explore the latest trends shaping the future of web development, from AI integration to advanced frontend frameworks.',
                'content' => "The web development landscape is constantly evolving, and 2025 brings exciting new trends that are reshaping how we build and interact with websites. In this post, we'll explore the most significant trends that are defining the future of web development.

## 1. AI-Powered Development Tools

Artificial Intelligence is revolutionizing how we write and debug code. From intelligent code completion to automated testing, AI tools are making developers more productive than ever.

## 2. WebAssembly Goes Mainstream

WebAssembly is enabling high-performance web applications that rival native apps in speed and functionality. We're seeing increased adoption across industries.

## 3. Edge Computing and JAMstack

The combination of edge computing and JAMstack architecture is creating faster, more secure websites with improved user experiences.

## 4. Advanced Frontend Frameworks

New frontend frameworks are emerging that offer improved performance and developer experience, building on the foundations laid by React, Vue, and Angular.

## 5. Progressive Web Apps 2.0

PWAs are evolving with new capabilities and better integration with native device features, blurring the line between web and native apps.",
                'image' => 'https://images.unsplash.com/photo-1461749280684-dccba630e2f6?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                'published_at' => '2025-01-15',
                'author_name' => 'Alex Thompson',
                'author_image' => 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80',
                'is_featured' => true,
            ],
            [
                'title' => 'Building Scalable Cloud Solutions: Best Practices',
                'slug' => 'building-scalable-cloud-solutions',
                'excerpt' => 'Learn the essential practices for building scalable, reliable cloud solutions that can handle growing demands.',
                'content' => "Creating scalable cloud solutions requires careful planning and implementation. Here are the best practices that we've learned from years of experience.

## 1. Microservices Architecture

Breaking down applications into microservices allows for better scalability and maintenance. We'll discuss how to properly implement this architecture.

## 2. Container Orchestration

Using tools like Kubernetes for container orchestration is essential for managing complex cloud deployments. Learn the key concepts and implementation strategies.

## 3. Auto-Scaling Strategies

Implementing effective auto-scaling policies ensures your application can handle varying loads while optimizing costs.

## 4. Database Optimization

Proper database design and optimization are crucial for scalability. We'll cover techniques for both SQL and NoSQL databases.

## 5. Monitoring and Observability

Setting up comprehensive monitoring and observability solutions is essential for maintaining healthy cloud systems.",
                'image' => 'https://images.unsplash.com/photo-1451187580459-43490279c0fa?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                'published_at' => '2025-01-10',
                'author_name' => 'Sarah Chen',
                'author_image' => 'https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80',
                'is_featured' => true,
            ],
            [
                'title' => 'The Impact of AI on Modern Software Development',
                'slug' => 'impact-ai-modern-software-development',
                'excerpt' => 'Discover how artificial intelligence is transforming software development processes and tools.',
                'content' => "Artificial Intelligence is revolutionizing how we develop software. Let's explore the various ways AI is impacting modern software development.

## 1. AI-Assisted Coding

Modern IDEs and coding tools now incorporate AI to help developers write better code faster. We'll look at the most effective tools and how to use them.

## 2. Automated Testing

AI is making automated testing more intelligent and efficient. Learn about the latest tools and methodologies.

## 3. Code Review and Quality

AI-powered code review tools are helping teams maintain higher code quality standards. We'll discuss the best practices and tools.

## 4. Requirements Analysis

Natural language processing is improving how we analyze and manage project requirements.

## 5. Predictive Analytics

AI is helping teams better predict project timelines and potential issues before they arise.",
                'image' => 'https://images.unsplash.com/photo-1485827404703-89b55fcc595e?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                'published_at' => '2025-01-05',
                'author_name' => 'Michael Rodriguez',
                'author_image' => 'https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80',
                'is_featured' => true,
            ],
        ];

        foreach ($posts as $post) {
            BlogPost::create($post);
        }
    }
}
