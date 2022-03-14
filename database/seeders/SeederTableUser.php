<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SeederTableUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'name'=>    'Administrador',
            'email'=>   'admin@admin.com',
            'password'=> Hash::make('Guthiere@2983'),
    ]);

    }
}
