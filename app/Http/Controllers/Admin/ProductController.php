<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\CategoryDetail;
use Yajra\Datatables\Datatables;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Product::all();
            $dataNew = $data->filter(function ($value, $key) {
                return $value->categoryDetail->type !== 1;
            });

            return Datatables::of($dataNew)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                            $btn = '<a href="javascript:void(0)" data-toggle="tooltip" data-id="' . $row->id . '" data-original-title="Edit" class="edit btn btn-primary btn-sm editRoom" data-target="#ajaxModel">Sửa</a>';
                            $btn = $btn . ' <a href="javascript:void(0)" data-toggle="tooltip" data-id="' . $row->id . '" data-original-title="Delete" class="btn btn-danger btn-sm deleteRoom">Xóa</a>';

                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        $categories = Category::where('parent_category_id', null)->get();

        return view('admin.product', compact('categories'));
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
        $request->validate([
            'category_type_id' => 'min:1',
            'name' => 'required',
            'price' => 'required|numeric',
            'sku' => 'required',
        ]);
        Product::updateOrCreate(['id' => $request->room_id],
            [
                'name' => $request->name,
                'category_detail_id' => $request->category_type_id,
                'sku' => $request->sku,
                'des' => $request->des,
                'price' => $request->price,
                'info' => $request->info,
                'img' => 'icon-phone.png',
                'status' => 1,
            ]);  
    
        return response()->json(['success' => __('label.cinemaSave')]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Product::findOrFail($id);
        $data->categoryDetail->category;

        return response()->json($data);
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
        Room::findOrFail($id)->delete();
        
        return response()->json(['success' => __('label.cinemaDel')]);
    }

    public function getCategoryChild(Request $request)
    {
        if ($request->id) {
            $data = Category::where('parent_category_id', $request->id)->get();
        } else {
            $data = [];
        }

        return response()->json($data);
    }

    public function getCategoryType(Request $request)
    {
        if ($request->id) {
            $data = CategoryDetail::where('category_id', $request->id)->get();
        } else {
            $data = [];
        }

        return response()->json($data);
    }
}
