<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    function run() {
        // todo : this is not working but I don't know why
        // Add a default user with information (choice by me)
        // DB::run('INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES (1, "admin", "contact@pepina.com", "ThePepina67", "2021-09-01 00:00:00", "2021-09-01 00:00:00")');
        if (!app()->environment('production')) {
            $this->call(FakeSeeder::class);
        }
    }
}
