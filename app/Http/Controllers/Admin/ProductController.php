<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\CategoryDetail;
use Yajra\Datatables\Datatables;
use Storage;

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
                        $btn = $btn . ' <a href="' . url('manager/mn-store/'.$row->id) . '" data-toggle="tooltip" data-original-title="Detail" class="btn btn-success btn-sm">Kho</a>';

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

        //upload images info
        $dom = new \DomDocument();
        $dom->loadHtml(mb_convert_encoding($request->info, 'HTML-ENTITIES', 'UTF-8'), LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $images = $dom->getElementsByTagName('img');

        foreach ($images as $count => $image) {
           $src = $image->getAttribute('src');
           if (preg_match('/data:image/', $src)) {
               preg_match('/data:image\/(?<mime>.*?)\;/', $src, $groups);
               $mimeType = $groups['mime'];
               $path = 'images/' . uniqid('', true) . '.' . $mimeType;
               Storage::disk('public')->put($path, file_get_contents($src));
               $image->removeAttribute('src');
               $image->setAttribute('src', Storage::url($path));
           }
        }
        $info = $dom->saveHTML();
        //end upload images info
        $query = [
            'name' => $request->name,
            'category_detail_id' => $request->category_type_id,
            'sku' => $request->sku,
            'des' => $request->des,
            'price' => $request->price,
            'info' => $info,
            'status' => 1,
        ];
        if ($request->hasFile('image'))
        {
            $file_name = time() . $request->image->getClientOriginalName();
            $request->image->move('img/products/', $file_name);
            $query = array_merge($query, ['img' => $file_name]);
        }

        Product::updateOrCreate(['id' => $request->room_id], $query);  
    
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
        Product::findOrFail($id)->delete();
        
        return response()->json(['success' => 'Đã xóa']);
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
