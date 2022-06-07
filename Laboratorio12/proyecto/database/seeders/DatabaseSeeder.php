<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Estudiante;
use App\Models\User;
use DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0 = 0');
        DB::table('estudiante')->delete();
        DB::table('users')->delete();

        $this->call([
            UserSeeder::class,
        ]);
        $this->call([
            EstudianteSeeder::class,
        ]);
    }
}
