<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {   
    $categories = ['Science', 'Health', 'Finance', 'Politic', 'Sport', 'Music'];

    foreach ($categories as $category_name) {
      
      $category = new Category;
      $category->name = $category_name;
      $category->save();

    }      
  }
  
}
