<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use illuminate\Support\Facades\DB;
use App\Models\User;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //load listings from file
        $joblistings = include database_path('seeders/data/job_listings.php');

        //get user ids
        $userIds = User::pluck('id')->toArray();

        foreach ($joblistings as &$listing) {
            //assign random user id
            $listing['user_id'] = $userIds[array_rand($userIds)];

            //add timestamps
            $listing['created_at'] = now();
            $listing['updated_at'] = now();

            //insert into database
            DB::table('job_listings')->insert($listing);
        }
    }
}
