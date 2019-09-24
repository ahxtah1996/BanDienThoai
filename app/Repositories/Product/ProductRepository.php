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
}
