<?php

use Illuminate\Database\Seeder;
use App\Tag;
use illuminate\Support\Str;
class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = ["motori","design","classifiche","tracciati", 'alimentazioni', 'meccaniche' , 'sponsor'];

        foreach($data as $tag){
            $new_tag = new Tag();
            $new_tag->tag_name  = $tag;
            $new_tag->slug = Str::slug($tag , '-');
            $new_tag->save();
        }

    }
}
