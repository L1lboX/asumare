<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user=new User();
        $user->name="Administrador";
        $user->email="admin@prueba.com";
        $user->password=bcrypt("admin");
        $user->save();
    }
}
