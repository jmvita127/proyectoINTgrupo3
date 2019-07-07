<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      //$this->call(SeederDeProducts::class);

//       DB::table("Products")->insert( //insert manual, para agregar generos en peliculas por ejemplo
//         [
//           "name" => "Importado",
//           "stock" => 10
//         ]
//       );

      factory(App\Product::class, 5)->create(); //va a crear 30 peliculas
      factory(App\User::class, 1)->create();
    }
}
