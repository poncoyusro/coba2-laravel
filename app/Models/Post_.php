<?php

namespace App\Models;



class Post 
{
    private static $blog_posts = [
        [
            "judul" => "Judul post Pertama",
            "slug" => 'judul-post-pertama',
            "author" => "shandika Galih",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis id, blanditiis porro dignissimos ad soluta iure nisi officiis est eius possimus labore laudantium. Nam rerum aliquid aperiam nobis magni, minima, temporibus iusto vitae cupiditate et consectetur quisquam, totam eveniet corporis. Eum aliquam sapiente harum reiciendis consectetur repellat, recusandae quae consequatur autem pariatur, consequuntur quia sint soluta excepturi. Perspiciatis sed quisquam neque. Corrupti tenetur omnis perferendis impedit nobis debitis. Assumenda consequatur rem cupiditate pariatur repellendus ab cumque dolorem, vitae voluptatum eius."
        ],
        [
            "judul" => "Judul post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "doddy ferdyansah",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis id, blanditiis porro dignissimos ad soluta iure nisi officiis est eius possimus labore laudantium. Nam rerum aliquid aperiam nobis magni, minima, temporibus iusto vitae cupiditate et consectetur quisquam, totam eveniet corporis. Eum aliquam sapiente harum reiciendis consectetur repellat, recusandae quae consequatur autem pariatur, consequuntur quia sint soluta excepturi. Perspiciatis sed quisquam neque. Corrupti tenetur omnis perferendis impedit nobis debitis. Assumenda consequatur rem cupiditate pariatur repellendus ab cumque dolorem, vitae voluptatum eius."
        ]
    
        ];
        
    public static function all(){
        return collect(self::$blog_posts);
    }

    public static function find($slug){
        $posts= static::all();
        // $post=[];
        // foreach ($posts as $p ) {
        //     if($p["slug"]===$slug){
        //         $post=$p;
        //     }
        // }
        return $posts->firstWhere('slug',$slug);

    }
}
