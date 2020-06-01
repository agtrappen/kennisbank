<?php
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use App\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->delete();

        Category::create(
            [
                'id' => 1,
                'name' => 'vraag',
            ]
        );

        Category::create(
            [
                'id' => 2,
                'name' => 'sollicitatie',
            ]
        );
        
        Category::create(
            [
                'id' => 3,
                'name' => 'klacht',
            ]
        );
    }
}