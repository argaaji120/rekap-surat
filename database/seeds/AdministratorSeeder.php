<?php

use Illuminate\Database\Seeder;

class AdministratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $administrator = new  \App\User;
        $administrator->name = "Arga Aji Prasetyo";
        $administrator->username = "administrator";
        $administrator->password = \Hash::make("admin2019");
        $administrator->roles = "Administrator";
        $administrator->avatar = "saat-ini-tidak-ada-file.png";

        $administrator->save();

        $this->command->info("User Admin berhasil ditambahkan");
    }
}
