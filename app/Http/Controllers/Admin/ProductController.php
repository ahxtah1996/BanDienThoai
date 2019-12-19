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
            // $data = Product::with('cinema')->with('roomType')->latest()->get();
            $data = Product::all();

            return Datatables::of($data)
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
        Room::updateOrCreate(['id' => $request->room_id],
        ['name' => $request->name,
        'cinema_id' => $request->cinema_id,
        'room_type_id' => $request->room_type_id,
        'note' => $request->note]);  
    
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
        $cinema = Room::findOrFail($id);

        return response()->json($cinema);
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
