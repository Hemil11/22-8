<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Request;

class userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Request $request)
    { 
        for ($i=1; $i < 15 ; $i++) { 
            $user = new User;
            $user->name = 'testUser'.$i;
            $user->email = 'testUser'.$i.'@gmail.com';
            $user->password = Hash::make(1111);
            $user->mo_no =  11111111111;
            $user->gender =  'male';
            $user->dob =  '1111/11/11';
            $user->city_id = $i;
            $user->description = 'testUser';
            $user->save();
        }
    }
}
