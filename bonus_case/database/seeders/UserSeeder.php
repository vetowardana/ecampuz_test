<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user->name = "Admin Veto";
        $user->email = "admin@admin.com";
        $user->password = bcrypt('admin123');
        $user->remember_token = Str::random(60);
        $user->save();
    }
}
