<?php

namespace App\Http\Composers;


use App\Models\PostCategory;
use Illuminate\View\View;

class PostCategoryComposer
{
    public function compose(View $view)
    {
        $view->with('postCategories',PostCategory::tree());
    }


}
