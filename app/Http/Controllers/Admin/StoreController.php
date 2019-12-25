<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Color;
use App\Models\Storage;
use Yajra\Datatables\Datatables;
use Session;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            if (Session::has('idProduct')) {
                $idColor = Color::all()->pluck('id');
            } else {
                $idColor = Color::where('product_id', Session::get('idProduct'))->pluck('id');
            }
            $data = Storage::whereIn('color_id', $idColor)->with('color')->get();

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
    }

    public function getStoreColor(Request $request)
    {
        if ($request->ajax()) {
            if (Session::has('idProduct')) {
                $data = Color::all();
            } else {
                $data = Color::where('product_id', Session::get('idProduct'))->get();
            }

            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                        $btn = '<a href="javascript:void(0)" data-toggle="tooltip" data-id="' . $row->id . '" data-original-title="Edit" class="edit btn btn-primary btn-sm editRoom2" data-target="#ajaxModel">Sửa</a>';
                        $btn = $btn . ' <a href="javascript:void(0)" data-toggle="tooltip" data-id="' . $row->id . '" data-original-title="Delete" class="btn btn-danger btn-sm deleteRoom2">Xóa</a>';

                        return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
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
            'color_id' => 'min:1',
            'imei' => 'required',
            'storage' => 'required|numeric',
            'price' => 'required',
        ]);
        Storage::updateOrCreate(['id' => $request->room_id],
        [
            'color_id' => $request->color_id,
            'imei' => $request->imei,
            'storage' => $request->storage,
            'price' => $request->price,
        ]);

        return response()->json(['success' => 'Đã lưu']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        Session::put('idProduct', $id);
        $product = Product::findOrFail($id);
        if (Session::has('idProduct')) {
            $colors = Color::all();
        } else {
            $colors = Color::where('product_id', Session::get('idProduct'))->get();
        }

        return view('admin.store', compact('product', 'colors'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Storage::findOrFail($id);

        return response()->json($data);
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
        Storage::findOrFail($id)->delete();
        
        return response()->json(['success' => 'Đã xóa']);
    }
}
