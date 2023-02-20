<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        

        User::create([
            'name'=>'sandhika Galih',
            'username'=>'sandhikagalih',
            'email'=>'sandhika@gmail.com',
            'password'=>bcrypt('12345')
        ]);
        // User::create([
        //     'name'=>'Doddy Ferdyansyah',
        //     'email'=>'ferdyansyah@gmail.com',
        //     'password'=>bcrypt('12345')
        // ]);
        
        User::factory(3)->create();

        Category::create([
            'name'=>'Programming',
            'slug'=>'programming'
        ]);

        Category::create([
            'name'=>'Web Design',
            'slug'=>'web-design'
        ]);

        Category::create([
            'name'=>'Personal',
            'slug'=>'personal'
        ]);

       Post::factory(20)->create();
        // Post::create([
        //     'title'=>'Judul Pertama',
        //     'slug'=>'judul-pertama',
        //     'excerpt'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit.',
        //     'body'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorum recusandae iste in nihil voluptas dolore, illum ut modi culpa nesciunt ea facere distinctio, rerum quidem nulla sit fugiat fugit consectetur non neque nam nisi reprehenderit tempore exercitationem? Delectus dicta dolorum facilis optio perspiciatis ipsam nisi pariatur expedita iure, distinctio impedit!Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sequi dolore repellat eligendi provident assumenda inventore magnam a maxime distinctio impedit sed eveniet iusto, facilis in vel doloribus? Nisi consectetur maxime non laboriosam sequi ipsam dolorum repellat laudantium odit nobis molestiae maiores, blanditiis sint sit! Libero eius magni mollitia eos Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facere nesciunt perspiciatis omnis accusantium vero commodi eaque. Distinctio animi non velit.',
        //     'category_id'=>1,
        //     'user_id'=>1
        // ]);
        // Post::create([
        //     'title'=>'Judul Kedua',
        //     'slug'=>'judul-kedua',
        //     'excerpt'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit.',
        //     'body'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorum recusandae iste in nihil voluptas dolore, illum ut modi culpa nesciunt ea facere distinctio, rerum quidem nulla sit fugiat fugit consectetur non neque nam nisi reprehenderit tempore exercitationem? Delectus dicta dolorum facilis optio perspiciatis ipsam nisi pariatur expedita iure, distinctio impedit!Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sequi dolore repellat eligendi provident assumenda inventore magnam a maxime distinctio impedit sed eveniet iusto, facilis in vel doloribus? Nisi consectetur maxime non laboriosam sequi ipsam dolorum repellat laudantium odit nobis molestiae maiores, blanditiis sint sit! Libero eius magni mollitia eos Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facere nesciunt perspiciatis omnis accusantium vero commodi eaque. Distinctio animi non velit.',
        //     'category_id'=>1,
        //     'user_id'=>1
        // ]);
        // Post::create([
        //     'title'=>'Judul Ketiga',
        //     'slug'=>'judul-ketiga',
        //     'excerpt'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit.',
        //     'body'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorum recusandae iste in nihil voluptas dolore, illum ut modi culpa nesciunt ea facere distinctio, rerum quidem nulla sit fugiat fugit consectetur non neque nam nisi reprehenderit tempore exercitationem? Delectus dicta dolorum facilis optio perspiciatis ipsam nisi pariatur expedita iure, distinctio impedit!Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sequi dolore repellat eligendi provident assumenda inventore magnam a maxime distinctio impedit sed eveniet iusto, facilis in vel doloribus? Nisi consectetur maxime non laboriosam sequi ipsam dolorum repellat laudantium odit nobis molestiae maiores, blanditiis sint sit! Libero eius magni mollitia eos Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facere nesciunt perspiciatis omnis accusantium vero commodi eaque. Distinctio animi non velit.',
        //     'category_id'=>1,
        //     'user_id'=>1
        // ]);
        // Post::create([
        //     'title'=>'Judul Keempat',
        //     'slug'=>'judul-keemapat',
        //     'excerpt'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit.',
        //     'body'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorum recusandae iste in nihil voluptas dolore, illum ut modi culpa nesciunt ea facere distinctio, rerum quidem nulla sit fugiat fugit consectetur non neque nam nisi reprehenderit tempore exercitationem? Delectus dicta dolorum facilis optio perspiciatis ipsam nisi pariatur expedita iure, distinctio impedit!Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sequi dolore repellat eligendi provident assumenda inventore magnam a maxime distinctio impedit sed eveniet iusto, facilis in vel doloribus? Nisi consectetur maxime non laboriosam sequi ipsam dolorum repellat laudantium odit nobis molestiae maiores, blanditiis sint sit! Libero eius magni mollitia eos Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facere nesciunt perspiciatis omnis accusantium vero commodi eaque. Distinctio animi non velit.',
        //     'category_id'=>1,
        //     'user_id'=>2
        // ]);
        
    }
}
