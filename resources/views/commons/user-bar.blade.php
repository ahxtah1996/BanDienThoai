<div class="main-bar">
    <div class="container">
        <div class="row mid">
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-10 menu-title">
                <div class="nav-left">
                    <a class="menu-title hidden-mb">Danh mục sản phẩm</a>
                    <a class="menu-title hidden-dk" data-toggle="collapse" href="#ct">Danh mục sản phẩm</a>
                    <div class="main-nav collapse" id="ct">
                        <ul>
                            @foreach ($categories as $category)
                                <li>
                                <a class="smooth" href="/collections?id={{ $category['id'] }}" title="">
                                    <div class="t-icon">
                                        <img src="/img/icon/{{ $category['icon'] }}" alt="">
                                        <img src="/img/icon/{{ $category['icon'] }}" alt="">
                                    </div>
                                    <span>{{ $category['name'] }}</span>
                                </a>
                                <div class="submenu">
                                    <div class="row item">
                                        @if (!empty($category['chil']))
                                            @if (!empty($category['chil']))
                                                @foreach ($category['chil'] as $data)
                                                    <div class="col-lg-3">
                                                        <p class="groupdrop-title">{{ $data['name'] }}</p>
                                                        @if (!empty($data['value']))
                                                            <ul>
                                                                @foreach ($data['value'] as $categoryDetail)
                                                                    <li><a href="/collections?id={{ $categoryDetail->id }}" class="smooth" title="">{{ $categoryDetail->name }}</a></li>
                                                                @endforeach
                                                            </ul>
                                                        @endif
                                                    </div>
                                                @endforeach
                                            @endif
                                        @endif
                                        <img class="groupdrop-banner-pos" src="/img/banner/{{ $category['background'] }}" alt="">
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-8 col-sm-6 col-xs-2 static menu-right">
                <nav class="main-nav">
                    <a class="menu-btn" data-toggle="collapse" href="#myNavbar"><i></i></a>
                    <div id="myNavbar" class="collapse row">
                        <div class="col-lg-8">
                            <nav class="nav-sections">
                                <ul>
                                    <li class="sub active">
                                        <a href="/" class="smooth" title="">Trang chủ</a>
                                    </li>
                                    <li class="sub ">
                                        <a href="/pages?id=1" class="smooth" title="">Giới thiệu</a>
                                    </li>
                                    <li class="sub ">
                                        <a href="/pages?id=2" class="smooth" title="">Bảo hành</a>
                                    </li>
                                    <li class="sub ">
                                        <a href="/blogs?id=2" class="smooth" title="">Dịch vụ</a>
                                    </li>
                                    <li class="sub ">
                                        <a href="/contact" class="smooth" title="">Liên hệ</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="col-lg-4">
                            <div class="hotline">
                                <i class="fa fa-phone" aria-hidden="true"></i> Hotline: <a class="smooth" href="tel:0833.234567" title="">0833.234567</a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>
