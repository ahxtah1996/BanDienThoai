<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\CategoryDetail;
use App\Repositories\Product\ProductRepositoryInterface;

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

        return view('user.product.detail', compact('product'));
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
            })->get();
        } else {
            $products = Product::where('name', 'like', '%'.$request->q.'%')->get();
        }
        
        return view('user.search', compact('products'));
    }
}
