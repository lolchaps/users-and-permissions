<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class)->create()->each(function($u) {
            $u->permissions()->save(factory(App\Permission::class)->make());
        });
    }
}
