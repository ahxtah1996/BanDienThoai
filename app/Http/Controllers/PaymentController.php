<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $maps = [
            'HANOI' => 'Hà Nội',
            'HOCHIMINH' => 'Hồ Chí Minh',
            'HAIPHONG' => 'Hải Phòng',
            'DANANG' => 'Đà Nẵng',
            'HAGIANG' => 'Hà Giang',
            'CAOBANG' => 'Cao Bằng',
            'LAICHAU' => 'Lai Châu',
            'LAOCAI' => 'Lào Cai',
            'TUYENQUANG' => 'Tuyên Quang',
            'LANGSON' => 'Lạng Sơn',
            'BACKAN' => 'Bắc Kạn',
            'THAINGUYEN' => 'Thái Nguyên',
            'YENBAI' => 'Yên Bái',
            'SONLA' => 'Sơn La',
            'PHUTHO' => 'Phú Thọ',
            'VINHPHUC' => 'Vĩnh Phúc',
            'QUANGNINH' => 'Quảng Ninh',
            'BACGIANG' => 'Bắc Giang',
            'BACNINH' => 'Bắc Ninh',
            'HAIDUONG' => 'Hải Dương',
            'HUNGYEN' => 'Hưng Yên',
            'HOABINH' => 'Hòa Bình',
            'HANAM' => 'Hà Nam',
            'NAMDINH' => 'Nam Định',
            'THAIBINH' => 'Thái Bình',
            'NINHBINH' => 'Ninh Bình',
            'THANHHOA' => 'Thanh Hóa',
            'NGHEAN' => 'Nghệ An',
            'HATINH' => 'Hà Tĩnh',
            'QUANGBINH' => 'Quảng Bình',
            'QUANGTRI' => 'Quảng Trị',
            'THUATHIENHUE' => 'Thừa Thiên Huế',
            'QUANGNAM' => 'Quảng Nam',
            'QUANGNGAI' => 'Quảng Ngãi',
            'KONTUM' => 'Kon Tum',
            'BINHDINH' => 'Bình Định',
            'GIALAI' => 'Gia Lai',
            'PHUYEN' => 'Phú Yên',
            'DAKLAK' => 'Đăk Lăk',
            'KHANHHOA' => 'Khánh Hòa',
            'LAMDONG' => 'Lâm Đồng',
            'BINHPHUOC' => 'Bình Phước',
            'BINHDUONG' => 'Bình Dương',
            'NINHTHUAN' => 'Ninh Thuận',
            'TAYNINH' => 'Tây Ninh',
            'BINHTHUAN' => 'Bình Thuận',
            'DONGNAI' => 'Đồng Nai',
            'LONGAN' => 'Long An',
            'DONGTHAP' => 'Đồng Tháp',
            'ANGIANG' => 'An Giang',
            'BARIAVUNGTAU' => 'Bà Rịa Vũng Tàu',
            'TIENGIANG' => 'Tiền Giang',
            'KIENGIANG' => 'Kiên Giang',
            'TRAVINH' => 'Trà Vinh',
            'BENTRE' => 'Bến Tre',
            'VINHLONG' => 'Vĩnh Long',
            'SOCTRANG' => 'Sóc Trăng',
            'BACLIEU' => 'Bạc Liêu',
            'CAMAU' => 'Cà Mau',
            'DIENBIEN' => 'Điện Biên',
            'DAKNONG' => 'Đắk Nông',
            'HAUGIANG' => 'Hậu Giang',
        ];
        return view('user.payment', compact('maps'));
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
