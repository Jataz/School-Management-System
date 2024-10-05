<?php

namespace Database\Seeders;

use App\Models\BloodGroup;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BloodGroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Use truncate to clear the table and reset the auto-increment ID
        DB::table('blood_groups')->truncate();

        $bgs = ['O-', 'O+', 'A+', 'A-', 'B+', 'B-', 'AB+', 'AB-'];
        
        foreach ($bgs as $bg) {
            BloodGroup::create(['name' => $bg]);
        }
    }
}

