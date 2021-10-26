<?php
/**
 * @Author: Md Nazmus Shakib
 * @Date:   2021-10-20 14:38:11
 * @Last Modified by:   Md Nazmus Shakib
 * @Last Modified time: 2021-10-20 14:52:55
 */

namespace Database\Seeders;

use App\Models\VaccinCenter;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CenterName extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        VaccinCenter::create([
            'id'=>Str::random(10),
            'center_id'=>Str::random(15),
            'center_name'=>('Shahid Suhrawardy Hospital'),

        ]);
    }
}
