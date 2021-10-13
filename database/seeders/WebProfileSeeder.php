<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class WebProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $newProfile = new \App\Models\WebProfile;
        $newProfile->link_wa = '6285113223885';
        $newProfile->save();
    }
}
