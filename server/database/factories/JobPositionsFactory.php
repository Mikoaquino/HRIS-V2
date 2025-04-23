<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Departments;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\JobPositions>
 */
class JobPositionsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        fake()->unique(true);

        $name = fake()->unique()->randomElement([
            'Software Engineer',
            'Product Manager',
            'Marketing Specialist',
            'HR Coordinator',
            'Sales Representative',
            'Business Analyst',
            'UX/UI Designer',
            'Graphic Designer',
            'Financial Analyst',
            'Data Scientist',
            'Customer Service Representative',
            'Project Manager',
            'Legal Counsel',
        ]);

        $description = match ($name) {
            'Software Engineer' => 'Develops and maintains software applications, ensuring high performance and scalability.',
            'Product Manager' => 'Oversees product development and strategy, aligning with customer and business needs.',
            'Marketing Specialist' => 'Plans and executes marketing campaigns to promote brand awareness and engagement.',
            'HR Coordinator' => 'Supports HR functions including recruitment, employee relations, and benefits administration.',
            'Sales Representative' => 'Engages with clients to sell products or services and meet sales targets.',
            'Business Analyst' => 'Analyzes business processes and provides data-driven recommendations for improvement.',
            'UX/UI Designer' => 'Designs user-friendly interfaces with a focus on user experience and visual aesthetics.',
            'Graphic Designer' => 'Creates visual content for branding, advertisements, and promotional materials.',
            'Financial Analyst' => 'Evaluates financial data to support budgeting, forecasting, and investment decisions.',
            'Data Scientist' => 'Uses statistical methods and machine learning to analyze complex datasets for insights.',
            'Customer Service Representative' => 'Assists customers by resolving issues and providing product or service information.',
            'Project Manager' => 'Leads and coordinates projects to ensure timely delivery within scope and budget.',
            'Legal Counsel' => 'Provides legal advice and ensures company compliance with laws and regulations.',
            default => 'Responsible for assigned duties within the organization.',
        };

        
        return [
            'departments_id' => Departments::inRandomOrder()->first()->id,
            'name' => $name,
            'description' => $description,
        ];
    }
}
