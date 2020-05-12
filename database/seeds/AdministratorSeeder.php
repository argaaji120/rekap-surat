<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class AdministratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $administrator = new  User;
        $administrator->name        = "Arga Aji Prasetyo";
        $administrator->username    = "administrator";
        $administrator->password    = Hash::make("admin2019");
        $administrator->roles       = "administrator";

        $administrator->save();

        $this->command->info("User Admin berhasil ditambahkan");
    }
}
