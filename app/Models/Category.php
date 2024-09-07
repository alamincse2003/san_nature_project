<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_name',
        'slug',
        'parent_id',
        'status',
    ];
    public function product(){
        return $this->has(Product::class);
    }

    public static function categoryFullName($catId)
    {
        $chkCat = Category::where('id',$catId)->first();
        return $chkCat->category_name;
    }

    public function parentCategory(){
        return $this->hasMany(Category::class,'parent_id')->with('parentCategory');
    }

    public static function tree(){
        $allCategories = Category::orderBy('id','ASC')->get();
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
