<?php 

namespace Modules\Shop\Repositories\Front;

use Modules\Shop\Repositories\Front\Interfaces\CategoryRepositoryInterface;
use Modules\Shop\App\Models\Category;

class CategoryRepository implements CategoryRepositoryInterface
{
    public function findAll($options = [])
    {
        return Category::orderBy('name' , 'asc')->get();
    }

    public function findBySlug($slug)
    {
        return Category::where('slug' , $slug)->firstOrFail();
    }
}