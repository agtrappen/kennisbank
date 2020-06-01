<?php
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use App\Article;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->delete();

        Article::create(
            [
                'id' => 1,
                'category_id' => 1,
                'subject' => 'Algemene vraag',
                'author' => 'Bart',
                'created_at' => '2020-05-31',
                'body' => 'Hoe werkt trengo?',   
            ]
        );

        Article::create(
            [
                'id' => 2,
                'category_id' => 2,
                'subject' => 'Sollicitatie developer',
                'author' => 'Joep',
                'created_at' => '2020-06-01',
                'body' => 'Ik wil graag solliciteren voor de functie developer',   
            ]
        );
        
        Article::create(
            [
                'id' => 3,
                'category_id' => 3,
                'subject' => 'Klacht',
                'author' => 'Karen',
                'created_at' => '2020-05-30',
                'body' => 'Ik wil met je manager praten!',   
            ]
        );
    }
}
