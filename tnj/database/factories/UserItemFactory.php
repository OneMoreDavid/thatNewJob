<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class UserItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
                /* 'user_id' => fake()->numberBetween(1,6000), */
                'job_title' => 'JOB-TITLE',
                'company_name' => 'COMPANY', 
                'status' => fake()->randomElement(['Aware', 'Applied', 'Interview', 'Offer', 'Unsuccessful', 'Accepted', 'Rejected', ]),
                'awareness_date' => fake()->date(), 
                'link_to_advert' => fake()->sentence(), 
                'how_did_you_find_it' => fake()->sentence(), 
                'job_description_notes' => fake()->paragraph(2),
                'job_description_upload'=> fake()->sentence(), 
                'why_do_you_want_it' => fake()->sentence(), 
                'job_type' => fake()->randomElement(['IT Manager', 'IT Project Manager', 'Data Analytics', 'Software Developer', 'DevOps', 'Junior Role', 'Senior Role', 'Other', ]),
                'strong_areas' => fake()->sentence(), 
                'weak_areas' => fake()->sentence(), 
                'closing_date' => fake()->date(), 
                'applied_date' => fake()->date(), 
                'how_did_you_apply' => fake()->sentence(), 
                'telephone_interview_date' => fake()->date(), 
                'second_telephone_interview_date' => fake()->date(), 
                'first_onsite_interview_date' => fake()->date(), 
                'second_onsite_interview_date' => fake()->date(), 
                'interview_notes' => fake()->paragraph(2),
                'offer_received_date' => fake()->date(), 
                'benefits' => fake()->paragraph(2),
                'salary' => fake()->sentence(), 
                'offer_accepted_date' => fake()->date(),
            
        ];
    }
}
