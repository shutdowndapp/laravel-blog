<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoryTabSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new Category();
        $admin->name = "Tech";
        $admin->save();

         $admin = new Category();
        $admin->name = "Sports";
        $admin->save();

         $admin = new Category();
        $admin->name = "Food";
        $admin->save();
    }
}
