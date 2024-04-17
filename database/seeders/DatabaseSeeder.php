<?php

namespace Database\Seeders;

use App\Models\Job;
use App\Models\Plan;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {


        // User::factory()->create([
        //     'name' => 'Bokele wakiza franck',
        //     'email' => 'bokele@example.com',
        // ]);


        $plans = [
            [
                'name' => 'Basic',
                'slug' => 'basic-plan',
                'stripe_plan' => 'price_1P5Vo0EeQ3YObL4sgDdXB882',
                'price' => 10,
                'description' => 'Basic Plan'
            ],
            [
                'name' => 'Professional',
                'slug' => 'professional',
                'stripe_plan' => 'price_1P5VmQEeQ3YObL4scFhKQEUZ',
                'price' => 30,
                'description' => 'Professional'
            ],
            [
                'name' => 'Premium',
                'slug' => 'premium',
                'stripe_plan' => 'price_1P5Vp7EeQ3YObL4sqPSEQbu0',
                'price' => 50,
                'description' => 'Premium'
            ]
        ];

        // foreach ($plans as $plan) {
        //     Plan::create($plan);
        // }

        // Job::factory(200)->create();
    }
}