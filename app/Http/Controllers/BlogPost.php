<?php

namespace App\Http\Controllers;


class BlogPost extends Controller
{
    public function print() {
        
        // $blogs = file_get_contents('/Users/vaishnavisen/Herd/blog/storage/blogs.json');
        $blogs = '{
            "blogPosts": [{
                    "id": 1,
                    "title": "The Future of Renewable Energy",
                    "summary": "Exploring the next generation of sustainable power sources.",
                    "imageUrl": "https://example.com/images/post1.jpg",
                    "author": "Alex Johnson",
                    "creationDate": "2024-01-01",
                    "updateDate": "2024-01-05",
                    "tags": ["Renewable Energy", "Sustainability", "Innovation"],
                    "commentsCount": 34
                },
                {
                    "id": 2,
                    "title": "Culinary Travels: A Journey Around the World",
                    "summary": "Discovering global cuisine through travel and taste.",
                    "imageUrl": "https://example.com/images/post2.jpg",
                    "author": "Maria Gonzalez",
                    "creationDate": "2024-01-10",
                    "updateDate": "2024-01-12",
                    "tags": ["Travel", "Food", "Culture"],
                    "commentsCount": 27
                },
                {
                    "id": 3,
                    "title": "Smart Homes: The Future of Living",
                    "summary": "How smart technology is transforming our home life.",
                    "imageUrl": "https://example.com/images/post3.jpg",
                    "author": "David Lee",
                    "creationDate": "2024-01-15",
                    "updateDate": "2024-01-17",
                    "tags": ["Technology", "Lifestyle", "Smart Home"],
                    "commentsCount": 45
                },
                {
                    "id": 4,
                    "title": "The Art of Mindfulness",
                    "summary": "Embracing a mindful lifestyle for better mental health.",
                    "imageUrl": "https://example.com/images/post4.jpg",
                    "author": "Samantha Reed",
                    "creationDate": "2024-01-20",
                    "updateDate": "2024-01-22",
                    "tags": ["Wellness", "Mindfulness", "Health"],
                    "commentsCount": 53
                },
                {
                    "id": 5,
                    "title": "Revolutionizing Education with Technology",
                    "summary": "How technology is shaping the future of education.",
                    "imageUrl": "https://example.com/images/post5.jpg",
                    "author": "James Kim",
                    "creationDate": "2024-01-25",
                    "updateDate": "2024-01-30",
                    "tags": ["Education", "Technology", "Innovation"],
                    "commentsCount": 39
                },
                {
                    "id": 6,
                    "title": "Exploring the Depths of the Ocean",
                    "summary": "A journey into the unknown: life beneath the waves.",
                    "imageUrl": "https://example.com/images/post6.jpg",
                    "author": "Lisa Chang",
                    "creationDate": "2024-02-01",
                    "updateDate": "2024-02-03",
                    "tags": ["Nature", "Oceans", "Exploration"],
                    "commentsCount": 48
                },
                {
                    "id": 7,
                    "title": "The Evolution of Electric Vehicles",
                    "summary": "Tracing the journey of electric vehicles from past to future.",
                    "imageUrl": "https://example.com/images/post7.jpg",
                    "author": "Mark Brown",
                    "creationDate": "2024-02-05",
                    "updateDate": "2024-02-07",
                    "tags": ["Automotive", "Sustainability", "Electric Vehicles"],
                    "commentsCount": 60
                },
                {
                    "id": 8,
                    "title": "The Power of Positive Thinking",
                    "summary": "Harnessing optimism to overcome life\'s challenges.",
                    "imageUrl": "https://example.com/images/post8.jpg",
                    "author": "Sophie Taylor",
                    "creationDate": "2024-02-10",
                    "updateDate": "2024-02-12",
                    "tags": ["Self-help", "Positivity", "Mental Health"],
                    "commentsCount": 41
                }]}';
        $blogsList = json_decode($blogs, true);

        return view('blog', ['posts' => $blogsList['blogPosts']]);
    }
}