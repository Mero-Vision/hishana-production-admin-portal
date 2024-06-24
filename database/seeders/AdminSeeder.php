<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Puja Simbu',
                'email' => 'hishanaproductions@gmail.com',
                'mobile_no' => '9824567565',
                'dob' => '2003-01-20',
                'gender' => 'Female',
                'address' => 'Anamnagar',
                'password' => Hash::make('Password'),
                'email_verified_at'=>Carbon::now(),
                'role'=> "superadmin"
            ],
        ];

        foreach ($users as $userData) {
            $user = User::firstOrCreate(
                ['email' => $userData['email']],
                $userData
            );

            $user->assignRole(User::SUPERADMIN);
        }
    }
}