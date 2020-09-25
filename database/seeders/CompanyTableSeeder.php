<?php

namespace Database\Seeders;

use App\Models\Company;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CompanyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $company = new Company();
        $company->country_id = 1;
        $company->name = 'Company 1';
        $company->created_at = Carbon::now();
        $company->updated_at = Carbon::now();
        $company->save();

        $company = new Company();
        $company->country_id = 2;
        $company->name = 'Company 2';
        $company->created_at = Carbon::now();
        $company->updated_at = Carbon::now();
        $company->save();

        $company = new Company();
        $company->country_id = 1;
        $company->name = 'Company 3';
        $company->created_at = Carbon::now();
        $company->updated_at = Carbon::now();
        $company->save();

        $company = new Company();
        $company->country_id = 2;
        $company->name = 'Company 4';
        $company->created_at = Carbon::now();
        $company->updated_at = Carbon::now();
        $company->save();

        $company = new Company();
        $company->country_id = 1;
        $company->name = 'Company 5';
        $company->created_at = Carbon::now();
        $company->updated_at = Carbon::now();
        $company->save();

        $company = new Company();
        $company->country_id = 1;
        $company->name = 'Company 6';
        $company->created_at = Carbon::now();
        $company->updated_at = Carbon::now();
        $company->save();

        $company = new Company();
        $company->country_id = 2;
        $company->name = 'Company 7';
        $company->created_at = Carbon::now();
        $company->updated_at = Carbon::now();
        $company->save();


        $company = new Company();
        $company->country_id = 1;
        $company->name = 'Company 8';
        $company->created_at = Carbon::now();
        $company->updated_at = Carbon::now();
        $company->save();

        $company = new Company();
        $company->country_id = 1;
        $company->name = 'Company 9';
        $company->created_at = Carbon::now();
        $company->updated_at = Carbon::now();
        $company->save();

        $company = new Company();
        $company->country_id = 1;
        $company->name = 'Company 10';
        $company->created_at = Carbon::now();
        $company->updated_at = Carbon::now();
        $company->save();

    }
}
