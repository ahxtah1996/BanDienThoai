<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Cart;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.cart');
    }

    public function ajax(Request $request)
    {
        $action = $request->action;

        switch ($action) {
            case 'add_to_cart':
                $product = Product::findOrFail($request->id);
                Cart::add($request->id, $product->name, $request->quantity, $product->price);
                return response()->json(['status' => 200, 'message' => 'Thêm vào giỏ hàng thành công']);
                break;
            case 'count_number_of_cart':
                return response()->json(['count' => Cart::count()]);
                break;
            case 'remove_from_cart':
                Cart::remove($request->id);
                break;
            case 'update_to_cart':
                Cart::update($request->id, $request->quantity);
                return response()->json(['status' => 200, 'message' => 'Thêm vào giỏ hàng thành công']);
                break;
            default:
                # code...
                break;
        }

        // return response()->json($a);
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
        //
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
}
