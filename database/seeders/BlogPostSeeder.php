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
                'title' => 'The Future of Web Development: Trends to Watch in 2024',
                'slug' => 'future-of-web-development-2024',
                'excerpt' => 'Explore the latest trends shaping the future of web development, from AI integration to WebAssembly and progressive web apps.',
                'content' => "The web development landscape is constantly evolving, and 2024 brings exciting new trends and technologies. In this post, we'll explore the most significant developments that are shaping the future of web development.

## 1. AI-Powered Development Tools
Artificial Intelligence is revolutionizing how we build websites and applications. From code completion to automated testing, AI tools are making developers more productive than ever.

## 2. WebAssembly (Wasm)
WebAssembly is enabling high-performance web applications by allowing developers to run code written in languages like C++ and Rust directly in the browser.

## 3. Progressive Web Apps (PWAs)
PWAs continue to gain popularity by offering native-like experiences through web applications, combining the best of both worlds.

## 4. Edge Computing
The rise of edge computing is changing how we think about web application architecture and performance optimization.

## 5. Sustainability in Web Development
Green coding practices and sustainable web development are becoming increasingly important as we consider the environmental impact of digital products.",
                'category' => 'Technology',
                'image' => 'blog/web-development-trends.jpg',
                'author_name' => 'David Wilson',
                'published_at' => '2024-02-01',
                'is_featured' => true,
                'meta_description' => 'Discover the latest web development trends for 2024, including AI tools, WebAssembly, PWAs, edge computing, and sustainable development practices.',
                'tags' => json_encode(['Web Development', 'Technology Trends', 'AI', 'PWA', 'WebAssembly']),
            ],
            [
                'title' => 'Building Scalable E-commerce Solutions: A Complete Guide',
                'slug' => 'building-scalable-ecommerce-solutions',
                'excerpt' => 'Learn the essential principles and best practices for building scalable e-commerce platforms that can grow with your business.',
                'content' => "Creating a scalable e-commerce platform requires careful planning and implementation. This guide covers everything you need to know to build a robust e-commerce solution.

## 1. Architecture Planning
Choose the right architecture that can handle growth and peak loads while maintaining performance.

## 2. Database Design
Implement efficient database design patterns that can handle large product catalogs and high transaction volumes.

## 3. Caching Strategies
Utilize effective caching strategies to improve performance and reduce database load.

## 4. Security Considerations
Implement robust security measures to protect customer data and prevent fraud.

## 5. Payment Integration
Choose and implement payment gateways that offer security, reliability, and a smooth checkout experience.",
                'category' => 'E-commerce',
                'image' => 'blog/ecommerce-solutions.jpg',
                'author_name' => 'Jennifer Lee',
                'published_at' => '2024-01-15',
                'is_featured' => true,
                'meta_description' => 'A comprehensive guide to building scalable e-commerce solutions, covering architecture, database design, caching, security, and payment integration.',
                'tags' => json_encode(['E-commerce', 'Scalability', 'Web Development', 'Security', 'Performance']),
            ],
            [
                'title' => 'Mobile App Development: Native vs Cross-Platform in 2024',
                'slug' => 'native-vs-cross-platform-2024',
                'excerpt' => 'Compare the pros and cons of native and cross-platform mobile app development approaches in 2024.',
                'content' => "Choosing between native and cross-platform development is a crucial decision for any mobile app project. Let's explore the current state of both approaches in 2024.

## 1. Performance Comparison
Analyze the performance differences between native and cross-platform solutions.

## 2. Development Costs
Compare the development and maintenance costs of both approaches.

## 3. User Experience
Understand how each approach impacts the user experience and interface design.

## 4. Platform-Specific Features
Learn how to handle platform-specific features in both native and cross-platform development.

## 5. Future Considerations
Explore the future outlook for both development approaches.",
                'category' => 'Mobile Development',
                'image' => 'blog/mobile-development.jpg',
                'author_name' => 'Alex Thompson',
                'published_at' => '2024-01-30',
                'is_featured' => true,
                'meta_description' => 'An in-depth comparison of native vs cross-platform mobile app development approaches in 2024, covering performance, costs, user experience, and future trends.',
                'tags' => json_encode(['Mobile Development', 'Native Apps', 'Cross-Platform', 'React Native', 'Flutter']),
            ],
        ];

        foreach ($posts as $post) {
            BlogPost::create($post);
        }
    }
}
