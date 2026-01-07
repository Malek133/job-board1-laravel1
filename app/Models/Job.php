<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Model;

class Job 
{
    public  static function all(): array {
        return
        [
        [
            "id" => 1,
            "title" => "Senior Laravel Developer",
            "location" => "Remote",
            "salary" => "80,000 - 100,000 USD",
            "description" => "We are looking for a Senior Laravel Developer to join our team. You will be responsible for developing and maintaining web applications using the Laravel framework."
        ],
        [
            "id" => 2,
            "title" => "Frontend Developer",
            "location" => "New York, NY",
            "salary" => "70,000 - 90,000 USD",
            "description" => "We are seeking a skilled Frontend Developer with experience in React.js to create engaging user interfaces."
        ],
        [
            "id" => 3,
            "title" => "Full Stack Developer",
            "location" => "San Francisco, CA",
            "salary" => "100,000 - 130,000 USD",
            "description" => "Join our dynamic team as a Full Stack Developer. You will work on both frontend and backend technologies to deliver high-quality web applications."
        ]
    ];
    } 
}
