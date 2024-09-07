<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostCategory extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_name',
        'slug',
        'parent_id',
        'status',
    ];
    public function post(){
        return $this->has(Post::class);
    }

    public static function tree(){
        $allCategories = PostCategory::orderBy('id','ASC')->get();
        $rootCategories = $allCategories->whereNull('parent_id');
        self::formatTree($rootCategories, $allCategories);
        return $rootCategories;
    }


    private static function formatTree($categories, $allCategories){

        foreach ($categories as $category){
            $category->children = $allCategories->where('parent_id',$category->id)->values();

            if ($category->children->isNotEmpty()){
                self::formatTree($category->children, $allCategories);
            }
        }
    }
}
