<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Color;
use App\Models\Storage;
use App\Models\CategoryDetail;
use App\Repositories\Product\ProductRepositoryInterface;
use DB;

class ProductController extends Controller
{
    /**
     * @var App\Repositories\Category\CategoryRepository
     */
    private $productRepository;

    /**
     * Construct
     *
     * @return void
     */
    public function __construct(
        ProductRepositoryInterface $productRepository
    )
    {
        $this->productRepository = $productRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $id = $request->id;
        $category = $this->productRepository->getNameCategory($id);
        $products = $this->productRepository->colection($id);

        return view('user.product.collection', compact('category', 'products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);
        $idColor = Color::where('product_id', $product->id)->pluck('id');
        $count = count(Storage::whereIn('color_id', $idColor)->get());
        $idLike = CategoryDetail::where('category_id', $product->categoryDetail->category_id)->pluck('id');
        $productLike = Product::whereIn('category_detail_id', $idLike)->limit(10)->get();

        return view('user.product.detail', compact('product', 'count', 'productLike'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function collections($id)
    {
        $category = $this->productRepository->getNameCategoryDetail($id);
        if (CategoryDetail::findOrFail($id)->type) {
            $detail = Product::where('category_detail_id', $id)->first();
            $products = Product::where('category_detail_id', $id)
                ->where('status', '!=', 0)
                ->orderBy('name', 'desc')
                ->get();

            return view('user.product.may-cu', compact('detail', 'category', 'products'));
        }
        $products = $this->productRepository->colectionDetail($id);

        return view('user.product.collection', compact('category', 'products'));
    }

    public function search(Request $request)
    {
        if ($request->q != '') {
            $searchValues = preg_split('/\s+/', $request->q, -1, PREG_SPLIT_NO_EMPTY); 
            $products = Product::where(function ($q) use ($searchValues) {
                foreach ($searchValues as $value) {
                    $q->orWhere('name', 'like', "%{$value}%");
                }
            });
        } else {
            $products = Product::where('name', 'like', '%'.$request->q.'%');
        }
        if ($request->searchType !== null)
        {
            $id = Category::where('parent_category_id', $request->searchType)->pluck('id');
            $category_detail_id = CategoryDetail::whereIn('category_id', $id)->pluck('id');
            $products = $products->whereIn('category_detail_id', $category_detail_id);
        }
        $products = $products->get();
        
        return view('user.search', compact('products'));
    }

    public function ajax(Request $request)
    {
        $action = $request->action;
        $id = $request->id;

        switch ($action) {
            case 'count_qty_of_storage':
                $data = Storage::where('color_id', $id)->get('storage');
                $data2 = Storage::where('color_id', $id)
                    ->select('storage', DB::raw('count(*) as total'))
                    ->groupBy('storage')
                    ->get();
                return response()->json([
                    'count' => count($data),
                    'storages' => $data2,
                ]);
                break;
            default:
                # code...
                break;
        }
    }
}
