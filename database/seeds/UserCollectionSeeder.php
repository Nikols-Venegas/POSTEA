<?php
use Illuminate\Database\Seeder;
class UserCollectionSeeder extends Seeder
{
public function run()
   {
      //Creación de usuarios que conocemos
            /*DB::table('users')->insert([
            'name' => 'Nikols Venegas',
            'email' => 'nikols.venegas@tecsup.edu.pe',
            'password' => bcrypt('nik123'),
            ]);*/
            DB::table('users')->insert([
                  'name' => 'Kathy Eyme',
                  'email' => 'kath@gmail.com',
                  'password' => bcrypt('kath1'),
            ]);

      //Faker
        $users = factory(App\User::class, 10)
        ->create()
        ->each( function ($user){
            $user->posts()->createMany(
                factory(App\Post::class, 5)->make()->toArray()
            );
        });
    }
}

?>