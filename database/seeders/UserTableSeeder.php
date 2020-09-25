<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $first = Company::where('id', 1)->first();
        $second = Company::where('id', 2)->first();
        $third = Company::where('id', 3)->first();
        $forth = Company::where('id', 4)->first();

        $user = new User();
        $user->name = 'User 1';
        $user->email = 'user1@gmail.com';
        $user->email_verified_at = Carbon::now();
        $user->password = bcrypt('123456');
        $user->created_at = Carbon::now();
        $user->updated_at = Carbon::now();
        $user->save();
        $user->companies()->attach($first, ['associated_date' => Carbon::now()]);
        $user->companies()->attach($second, ['associated_date' => Carbon::now()]);

        $user = new User();
        $user->name = 'User 2';
        $user->email = 'user2@gmail.com';
        $user->email_verified_at = Carbon::now();
        $user->password = bcrypt('123456');
        $user->created_at = Carbon::now();
        $user->updated_at = Carbon::now();
        $user->save();
        $user->companies()->attach($third, ['associated_date' => Carbon::now()]);
        $user->companies()->attach($second, ['associated_date' => Carbon::now()]);

        $user = new User();
        $user->name = 'User 3';
        $user->email = 'user3@gmail.com';
        $user->email_verified_at = Carbon::now();
        $user->password = bcrypt('123456');
        $user->created_at = Carbon::now();
        $user->updated_at = Carbon::now();
        $user->save();
        $user->companies()->attach($first, ['associated_date' => Carbon::now()]);
        $user->companies()->attach($second, ['associated_date' => Carbon::now()]);
        $user->companies()->attach($third, ['associated_date' => Carbon::now()]);
        $user->companies()->attach($forth, ['associated_date' => Carbon::now()]);

        $user = new User();
        $user->name = 'User 4';
        $user->email = 'user4@gmail.com';
        $user->email_verified_at = Carbon::now();
        $user->password = bcrypt('123456');
        $user->created_at = Carbon::now();
        $user->updated_at = Carbon::now();
        $user->save();
        $user->companies()->attach($first, ['associated_date' => Carbon::now()]);

        $user = new User();
        $user->name = 'User 5';
        $user->email = 'user5@gmail.com';
        $user->email_verified_at = Carbon::now();
        $user->password = bcrypt('123456');
        $user->created_at = Carbon::now();
        $user->updated_at = Carbon::now();
        $user->save();
        $user->companies()->attach($second, ['associated_date' => Carbon::now()]);
        $user->companies()->attach($third, ['associated_date' => Carbon::now()]);

        $user = new User();
        $user->name = 'User 6';
        $user->email = 'user6@gmail.com';
        $user->email_verified_at = Carbon::now();
        $user->password = bcrypt('123456');
        $user->created_at = Carbon::now();
        $user->updated_at = Carbon::now();
        $user->save();
        $user->companies()->attach($first, ['associated_date' => Carbon::now()]);

        $user = new User();
        $user->name = 'User 7';
        $user->email = 'user7@gmail.com';
        $user->email_verified_at = Carbon::now();
        $user->password = bcrypt('123456');
        $user->created_at = Carbon::now();
        $user->updated_at = Carbon::now();
        $user->save();
        $user->companies()->attach($forth, ['associated_date' => Carbon::now()]);
    }
}
