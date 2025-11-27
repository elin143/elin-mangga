<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CreateFirstUser extends Seeder
{
    /**
     * Run the database seeds.
     */
       public function run(): void
    {
        for ($i = 0; $i < 20; $i++) {

            // Ambil gambar random dari internet
            $img = Http::get("https://i.pinimg.com/736x/fa/73/a6/fa73a68f30fcb4092997d7ba383b8848.jpg")->body();
            $filename = 'profile-' . uniqid() . '.jpg';

            Storage::put('public/profiles/' . $filename, $img);

            User::create([
                'name' => fake()->name(),
                'email' => fake()->unique()->safeEmail(),
                'password' => bcrypt('password'),
                'profile_picture' => $filename,
            ]);
        }
    }


}
