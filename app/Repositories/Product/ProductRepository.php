<?php

namespace App\Repositories\Product;

use App\Repositories\RepositoryAbstract;
use App\Repositories\Product\ProductRepositoryInterface;
use Illuminate\Support\Facades\Storage;
use App\Models\Comment;
use App\Models\Product;
use Validator;
use DB;

class ProductRepository extends RepositoryAbstract implements ProductRepositoryInterface
{
    /**
     * Construct
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();

        $this->modelName = 'product';
        $this->model = new Product;
        $this->table = 'products';
    }

    public function colection($id)
    {
        $categories = DB::table('categories')->where('parent_category_id', $id)->pluck('id');
        $categoryDetailId = DB::table('category_detail')->whereIn('category_id', $categories)->pluck('id');
        $products = $this->model->whereIn('category_detail_id', $categoryDetailId)->paginate(10);

        return $products;
    }

    public function getNameCategory($id)
    {
        return DB::table('categories')->find($id)->name;
    }

    public function getNameCategoryDetail($id)
    {
        return DB::table('category_detail')->find($id)->name;
    }

    public function colectionDetail($id)
    {
        return $this->model->where('category_detail_id', $id)->paginate(10);
    }
}
