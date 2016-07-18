<?php

use Illuminate\Database\Seeder;

use App\Model\Comment;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        Comment::create([
            'author' => 'Pete Hunt',
            'text' => 'Hey there!'
        ]);

        Comment::create([
            'author' => 'Paul O’Shannessy',
            'text' => 'React is *great*!'
        ]);

    }
}
