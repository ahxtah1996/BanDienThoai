<?php

namespace App\Repositories\Category;

use App\Repositories\RepositoryAbstract;
use App\Repositories\Category\CategoryRepositoryInterface;
use Illuminate\Support\Facades\Storage;
use App\Models\Category;
use Validator;
use DB;

class CategoryRepository extends RepositoryAbstract implements CategoryRepositoryInterface
{
    /**
     * Construct
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();

        $this->modelName = 'category';
        $this->model = new Category;
        $this->table = 'categories';
    }

    /**
     * [sortToBar description]
     * @param  array $category [description]
     * @return array           [description]
     */
    public function sortToBar($category)
    {
        $array = [];
        foreach ($category as $key => $value) {
            if ($value->parent_category_id === null) {
                $array[$value->id]['name'] = $value->name;
                $array[$value->id]['status'] = $value->status;
                $array[$value->id]['id'] = $value->id;
                $array[$value->id]['icon'] = $value->icon;
                $array[$value->id]['banner'] = $value->banner;
            } else {
                $array[$value->parent_category_id]['chil'][$value->id]['name'] = $value->name;
            }
            if ($value->categoryDetail->count() > 0) {
                $array[$value->parent_category_id]['chil'][$value->id]['value'] = $value->categoryDetail;
            }
        } 

        return $array;
    }

    /**
     * 
     */
    public function parent_category()
    {
        return $this->model->whereNull('parent_category_id');
    }

    /**
     * 
     */
    public function home($categories)
    {
        $arrFilter = [];
        foreach ($categories as $key => $category) {
            $arrFilter[$key]['id'] = $category->id;
            $arrFilter[$key]['name'] = $category->name;
            $arrFilter[$key]['img_home'] = $category->img_home;
            $arrCategory = Category::where('parent_category_id', $category->id)->get();
            if (count($arrCategory) == 0) {
                $arrCategory = null;
            } 
            $arrFilter[$key]['category'] = $arrCategory;
        }

        return $arrFilter;
    }
}
