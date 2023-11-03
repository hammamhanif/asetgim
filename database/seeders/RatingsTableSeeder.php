<?php

namespace Database\Seeders;

use App\Models\Ratings as ModelsRatings;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RatingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ratingRecords = [
            ['id' =>1, 'users_id'=>1, 'assets_id'=>1, 'review'=>'very good assets', 'rating'=>4, 'status'=>0],
        ['id' =>2, 'users_id'=>2, 'assets_id'=>2, 'review'=>'very good assets', 'rating'=>4, 'status'=>0],
        ['id' =>3, 'users_id'=>3, 'assets_id'=>3, 'review'=>'very good assets', 'rating'=>4, 'status'=>0],
    ];
    
    ModelsRatings::insert($ratingRecords);
    }
}
