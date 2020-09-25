<?php

namespace Database\Seeders;

use App\Models\Country;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CountryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $country = new Country();
        $country->name = 'Canada';
        $country->created_at = Carbon::now();
        $country->updated_at = Carbon::now();
        $country->save();

        $country = new Country();
        $country->name = 'USA';
        $country->created_at = Carbon::now();
        $country->updated_at = Carbon::now();
        $country->save();
    }
}
