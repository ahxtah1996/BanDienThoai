@extends('layouts.app')

@section('content')
<div class="banner">
    <img src="{{ asset('/img/banner/applebannergray.png') }}" alt="" title="">
    <div class="breadcrumbs">
        <div class="container">
            <ul>
                <li><a href="/">Trang chủ</a></li>
                <li><a href="#">Bảo hành</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="single">
                    <h1 class="s-title">Bảo hành</h1>
                    {{-- <time><i class="fa fa-calendar"></i>Thứ tư, 17/07/2019</time>
                    <div class="fv-content">
                        <h2 style="text-align: center;"><span style="color: #ff0000;"><strong></strong></span></h2>
                        <p><span style="color: #ff0000;"><strong><img src="storage/service/upload-1447770515-apple-care.png" width="Auto" height="Auto" caption="false" />CHÍNH SÁCH BẢO HÀNH VÀ ĐỔI TRẢ SẢN PHẨM</strong></span></p>
                        <h4 style="text-align: center;"><span><strong>(Thời gian nhận bảo hành từ 10h00 - 20h00)</strong></span></h4>
                        <p><span style="color: #ff0000;"><strong>Điều khoản và điều kiện bảo hành máy mới 100% :</strong></span></p>
                        <p>Chế độ  bảo hành tại Duc Anh Store một đổi một theo đúng quy định về chính sách của apple chính hãng việt nam.Tham khảo chi tiết về quy định bảo hành của apple  tại trang web : <a href="https://www.apple.com/legal/warranty/products/ios-warranty-rest-of-apac-vietnamese.html">https://www.apple.com/legal/warranty/products/ios-warranty-rest-of-apac-vietnamese.html</a></p>
                        <p>Đối với tất cả sản phẩm mới 100% nguyên hộp trừ Macbook nếu trong 3 ngày đầu tiên bị lỗi bất kỳ lỗi nào của nhà sản xuất sẽ được đổi mới ngay thiết bị khác cùng loại.</p>
                        <p>Giá bán tại cửa hàng đã kèm với chính sách bảo hành 12 tháng cho tất cả các thiết bị bao gồm chính sách đổi mới thiết bị trong thời hạn bảo hành 12 tháng của Apple sẽ không thu bất khì thêm một loại chi phí nào khác nữa.Ngoại trừ một số trường hợp máy rơi vỡ hoặc vào nước cần đổi máy mới Apple có chính sách hỗ trợ giá..</p>
                        <p><span><strong> </strong></span></p>
                        <h3 style="text-align: left;"><span style="color: #ff0000;"><strong></strong></span></h3>
                        <h3 style="text-align: left;"><span style="color: #ff0000;"><strong>DucAnhStore TỪ CHỐI BẢO HÀNH TRONG CÁC TRƯỜNG HỢP SAU :</strong></span></h3>
                        <p style="text-align: left;">- Sản phẩm có dấu hiệu của sự va chạm như vỏ và thân máy có vết cấn, vết nứt, vỡ gãy, biến dạng.</p>
                        <p style="text-align: left;">- Máy có dấu hiệu bị ướt mưa, rơi vào nước, bị ẩm.</p>
                        <p style="text-align: left;">- Máy trong tình trạng khoá mật khẩu, khoá tài khoản do người dùng cài đặt.</p>
                        <p style="text-align: left;">- Khách hàng tự ý can thiệp vào bên trong máy như tự ý cài đặt ROM, Firmware, unlock, root, jailbreak, nạp tiếng việt, tự ý bung tem mở máy hoặc nhờ nơi khác mở máy.</p>
                        <p style="text-align: left;">- Không có tem cửa hàng hoặc tem bị bung, bị rách.</p>
                        <p style="text-align: left;">- Không có phiếu bảo hành, phiếu bảo hành tấy xoá, sữa chữa, phai màu chữ hoặc không trùng serial, imei sản phẩm.</p>
                        <h3 style="text-align: left;"><span style="color: #ff0000;"><strong>QUY ĐỊNH KHÁC</strong></span></h3>
                        <p style="text-align: left;">- Chúng tôi không chịu trách nhiệm về việc mất mát dữ liệu cá nhân của quý khách như danh bạ, tin nhắn, phim ảnh, ứng dụng, ghi chép,… sau khi bảo hành.</p>
                        <h3 style="text-align: left;"><span style="color: #ff0000;"><strong>GIẢI QUYẾT KHIẾU NẠI VÀ TRANH CHẤP</strong></span></h3>
                        <p style="text-align: left;">- Khi Quý khách ký vào điều khoản này, điều đó có thể hiểu là Quý khách đã chấp nhập Điều khoản bảo hành do hệ thống bán lẻ DucAnhStore đề ra.</p>
                        <p style="text-align: left;">- Trường hợp sản phẩm rơi vào điều khoản không được bảo hành nhưng Quý khách không chấp nhận và cố tình gây rối công cộng. Chúng tôi buộc lòng phải nhờ đến sự can thiệp của pháp luật.</p>
                        <p style="text-align: left;"><strong>Để tránh những chuyện ngoài ý muốn, xin Quý khách kiểm tra máy, phụ kiện , phiếu bảo hành và tem trước khi rời khỏi cửa hàng. Cửa hàng hoàn toàn không chịu trách nhiệm đối với việc máy trầy, thất lạc hoặc thiếu phụ kiện.</strong></p>
                        <p style="text-align: left;"><a href="http://www.apple.com/legal/warranty/products/iphone-vietnamese.html" target="_blank" rel="nofollow noopener noreferrer">Trích dẫn quy định bảo hành của Apple</a></p>
                        <p style="text-align: left;">-------------------------------------------------------------------------------------------------------------------------------------</p>
                        <h2 style="text-align: left;"><span style="color: #ff0000;"><strong>QUY ĐỊNH BẢO HÀNH MÁY QUA SỬ DỤNG</strong></span></h2>
                        <h3 style="text-align: left;"><span style="color: #ff0000;"><strong>CHÍNH SÁCH ĐỔI SẢN PHẨM </strong></span></h3>
                        <p style="text-align: left;"><strong>- Sản phẩm qua sử dụng : </strong>đổi mới trong vòng <strong>07 ngày</strong> kể từ khi mua máy nếu có lỗi phần cứng do Nhà Phân Phối.</p>
                        <p style="text-align: left;"><strong>- Sau thời gian trên nếu sản phẩm bị lỗi sẽ áp dụng theo chế độ bảo hành, không giải quyết đổi, trả hàng.</strong></p>
                        <p style="text-align: left;">- Bảo hành 06 tháng sữa chữa đối với sản phẩm Macbook, iPad, iPod, Apple tv, Samsung,</p>
                        <p style="text-align: left;">- Bảo hành 06 tháng 1 đổi 1 đối với sản phẩm iPhone nếu bị lỗi bo mạch. Các lỗi nhỏ có thể thay thế linh kiện ngay như pin, camera, loa, dây nguồn… thì không áp dụng đổi máy.</p>
                        <p style="text-align: left;">- Sản phẩm chỉ được tiếp nhận bảo hành khi được kỹ thuật của DucAnhStore xác định lỗi do nhà sản xuất.</p>
                        <p style="text-align: left;">- Trong trường hợp DucAnhStore tạm hết dòng máy để đổi cho quý khách, Quý khách vui lòng đợi 1-7 ngày để DucAnhStore nhập máy.</p>
                        <h3 style="text-align: left;"><span style="color: #ff0000;"><strong>ĐIỀU KHOẢN BẢO HÀNH</strong></span></h3>
                        <p style="text-align: left;">- <strong>Không bảo hành : Màn hình, cảm ứng, nút home cảm biến vân tay, 3D Touch, máy mất nguồn không kiểm tra được imei , máy treo cáp, treo logo không restore được. Vì nguyên nhân hư hỏng thường bị tác động của các yếu tố bên ngoài như nhiệt độ, độ ẩm, nguồn điện và cách sử dụng.</strong></p>
                        <p style="text-align: left;">+ Phụ kiện kèm theo như cáp, sạc, tai nghe. pin … thời gian bảo hành là 01 tháng.</p>
                        <p style="text-align: left;">+ Sản phẩm mang đi bảo hành phải có phiếu bảo hành,tem bảo hành phải còn nguyên vẹn.</p>
                        <p style="text-align: left;">+ Cửa hàng giữ máy từ 3-30 ngày để kiểm tra, sữa chữa bảo hành.</p>
                        <p style="text-align: left;">- Trường hợp sản phẩm bị lỗi bo mạch không thể sửa chữa thì cửa hàng thay thế bo mạch khác với thông số tương tự nhưng khác seri, imei, mã nước, mã màu….</p>
                        <h3 style="text-align: left;"><span style="color: #ff0000;"><strong>DucAnhStore TỪ CHỐI BẢO HÀNH TRONG CÁC TRƯỜNG HỢP SAU :</strong></span></h3>
                        <p style="text-align: left;">- Sản phẩm có dấu hiệu của sự va chạm như vỏ và thân máy có vết cấn, vết nứt, vỡ gãy, biến dạng.</p>
                        <p style="text-align: left;">- Máy có dấu hiệu bị ướt mưa, rơi vào nước, bị ẩm.</p>
                        <p style="text-align: left;">- Máy trong tình trạng khoá mật khẩu, khoá tài khoản do người dùng cài đặt.</p>
                        <p style="text-align: left;">- Khách hàng tự ý can thiệp vào bên trong máy như tự ý cài đặt ROM, Firmware, unlock, root, jailbreak, nạp tiếng việt, tự ý bung tem mở máy hoặc nhờ nơi khác mở máy.</p>
                        <p style="text-align: left;">- Không có tem cửa hàng hoặc tem bị bung, bị rách.</p>
                        <p style="text-align: left;">- Không có phiếu bảo hành, phiếu bảo hành tấy xoá, sữa chữa, phai màu chữ hoặc không trùng serial, imei sản phẩm.</p>
                        <h3 style="text-align: left;"><span style="color: #ff0000;"><strong>QUY ĐỊNH KHÁC</strong></span></h3>
                        <p style="text-align: left;">- Chúng tôi không chịu trách nhiệm về việc mất mát dữ liệu cá nhân của quý khách như danh bạ, tin nhắn, phim ảnh, ứng dụng, ghi chép,… sau khi bảo hành.</p>
                        <h3 style="text-align: left;"><span style="color: #ff0000;"><strong>GIẢI QUYẾT KHIẾU NẠI VÀ TRANH CHẤP</strong></span></h3>
                        <p style="text-align: left;"><strong>- </strong>Khi Quý khách ký vào điều khoản này, điều đó có thể hiểu là Quý khách đã chấp nhập Điều khoản bảo hành do hệ thống bán lẻ DucAnhStore đề ra.</p>
                        <p style="text-align: left;">- Trường hợp sản phẩm rơi vào điều khoản không được bảo hành nhưng Quý khách không chấp nhận và cố tình gây rối công cộng. Chúng tôi buộc lòng phải nhờ đến sự can thiệp của pháp luật.</p>
                        <p style="text-align: left;"><strong>Để tránh những chuyện ngoài ý muốn, xin Quý khách kiểm tra máy, phụ kiện , phiếu bảo hành và tem trước khi rời khỏi cửa hàng. Cửa hàng hoàn toàn không chịu trách nhiệm đối với việc máy trầy, thất lạc hoặc thiếu phụ kiện.</strong></p>
                        <p style="text-align: left;"><strong>1. TRUNG TÂM BẢO HÀNH Apple ủy quyền:</strong></p>
                        <p style="text-align: left;"><img src="http://www.h2shop.vn/images/companies/1/h%C3%ACnh%20sp/linhtinh/apple_logo_by_sa_08.jpg?1440564130003" alt="" width="200" /></p>
                        <p style="text-align: left;">(Nhận bảo hành Mac, iPod, iPad)</p>
                        <p style="text-align: left;"><strong>1. iService</strong></p>
                        <p style="text-align: left;">Địa chỉ: <em>39 Nguyễn Thị Diệu</em>, P.6, Q.3, TPHCM.</p>
                        <p style="text-align: left;">ĐT: (08) 6683 2592 - (08<wbr />) 3930 5837</p>
                        <p style="text-align: left;"><strong>2. Khải Thiên</strong></p>
                        <p style="text-align: left;">Địa chỉ:384 Nguyễn Thị Minh Khai, Q.3, TpHCM</p>
                        <p style="text-align: left;">ĐT: (08) 341323 - 38.341324</p>
                        <p style="text-align: left;">Chú ý: các trung tâm bảo hành làm việc giờ hành chánh, khi mang máy Mac, iPod, iPad đi bảo hành, quý khách không cần mang theo bất cứ giấy tờ gì, các sản phẩm của Apple bảo hành điện tử bằng số Serial.</p>
                        <p style="text-align: left;"><strong>2. TRUNG TÂM BẢO HÀNH SAMSUNG</strong></p>
                        <p style="text-align: left;"><img src="http://t2.gstatic.com/images?q=tbn:ANd9GcS_V_3Nk3dLaZof9iPNnmOfzwlFGZGS-8FDw-XeSrBCu1iL3Blf" alt="" width="200" /></p>
                        <p style="text-align: left;">- 99 Nguyễn Huệ, P. Bến Nghé, Q. 1(08) 3827 5252</p>
                        <p style="text-align: left;">- 35-37 Nguyễn Thị Thập, P. Tân Hưng, Q. 7(08) 6251 5627</p>
                        <p style="text-align: left;">- 395-397A Cộng Hòa, P.13, Q. Tân Bình1900 6039</p>
                        <p style="text-align: left;">- 226-228 Dương Tử Giang, P.4, Q.11(08) 3956 1696</p>
                        <p style="text-align: left;">- 308-310-312 Hồng Bàng, P.15, Q.51900 6047</p>
                        <p style="text-align: left;">- 760 Điện Biên Phủ, P.10, Q.10(08) 3830 4309</p>
                        <p style="text-align: left;">- 136 Hoàng Diệu II, P.Linh Chiểu, Q. Thủ Đức(08) 3722 8858</p>
                        <p style="text-align: left;">- 115 Tỉnh Lộ 8, KP7, TT. Củ Chi, H.Củ Chi (08) 3792 4925</p>
                    </div>
                    <div class="s-social">
                        <span class="text">Chia sẻ</span>
                        <div class="ctrl">
                            <ul class="cnv-social-icons list-inline">
                                <li><a href="https://www.facebook.com/sharer/sharer.php?u=https://ducanhstore.com/pages/bao-hanh" onclick="window.open(this.href, 'facebook-share','width=580,height=296');return false;" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://twitter.com/intent/tweet?text=https%3A%2F%2Fducanhstore.com%2Fpages%2Fbao-hanh&amp;url=https://ducanhstore.com/pages/bao-hanh" onclick="window.open(this.href, 'twitter-share', 'width=550,height=235');return false;" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://plus.google.com/share?url=https://ducanhstore.com/pages/bao-hanh" onclick="window.open(this.href, 'google-plus-share', 'width=490,height=530');return false;" class="instagram"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div> --}}
                </div>
            </div>

        </div>
    </div>

@endsection('content')
