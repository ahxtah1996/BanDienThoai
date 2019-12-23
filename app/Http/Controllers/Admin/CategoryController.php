<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\CategoryDetail;
use Yajra\Datatables\Datatables;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Category::where('parent_category_id', null)->get();
 
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

        return view('admin.category', compact('categories'));
    }

    public function categoryChild(Request $request)
    {
        if ($request->ajax()) {
            $data = Category::whereNotNull('parent_category_id')->get();
            foreach ($data as $key => $value) {
                $data[$key]['nameParent'] = Category::findOrFail($value->parent_category_id)->name;
            }
 
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

        return view('admin.category-child', compact('categories'));
    }

    public function categoryDetail(Request $request)
    {
        if ($request->ajax()) {
            $data = CategoryDetail::all();
            foreach ($data as $key => $value) {
                $data[$key]['nameParent'] = Category::findOrFail($value->category_id)->name;
            }
 
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

        return view('admin.category-detail', compact('categories'));
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
            'category_id' => 'min:1',
            'category_child_id' => 'min:1',
            'name' => 'required',
        ]);
        if ($request->mode === 'detail') {
            CategoryDetail::updateOrCreate(['id' => $request->room_id],
            [
                'name' => $request->name,
                'category_id' => $request->category_child_id,
                'status' => 1,
                'type' => $request->isOld ? 1 : 0,
            ]);
        } else {
            Category::updateOrCreate(['id' => $request->room_id],
            [
                'name' => $request->name,
                'parent_category_id' => $request->category_id ? $request->category_id : null,
                'status' => 1,
                'type' => 1,
            ]);
        }

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
        $data = CategoryDetail::findOrFail($id);
        $data->category;

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
        $data = Category::findOrFail($id);

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
    public function destroy(Request $request, $id)
    {
        if ($request->mode === 'detail') {
            CategoryDetail::findOrFail($id)->delete();
        } else {
            Category::findOrFail($id)->delete();            
        }

        return response()->json(['success' => 'Đã xóa thành công']);
    }

    // public function getCategoryChild(Request $request)
    // {
    //     if ($request->id) {
    //         $data = Category::where('parent_category_id', $request->id)->get();
    //     } else {
    //         $data = [];
    //     }

    //     return response()->json($data);
    // }

    // public function getCategoryType(Request $request)
    // {
    //     if ($request->id) {
    //         $data = CategoryDetail::where('category_id', $request->id)->get();
    //     } else {
    //         $data = [];
    //     }

    //     return response()->json($data);
    // }
}
