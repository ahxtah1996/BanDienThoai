<header>
    <div class="top">
        <div class="container">
            <div class="row row-ibl mid">
                <div class="col-lg-3 col-md-2 col-sm-3 col-xs-8 logo-header">
                    <a class="logo" href="/" title="">
                        <img class="main-logo" src="{{ asset('/img/logo/logo.png') }}" alt="" title=""/>
                    </a>
                </div>
                <div class="col-lg-6 col-md-9 col-sm-7 col-xs-12 search-form">
                    <span class="action search hidden-md hidden-lg"><i class="fa fa-search"></i></span>
                    <div class=" action-control-search">
                        <form class="search-fr" action="{{ asset('product-search') }}" method="get">
                            <input type="text" name="q" placeholder="Tìm sản phẩm...">
                            <div class="select" name="category">
                                <select class="non-select2" name="searchType">
                                    <option value="">Tất cả</option>
                                    @foreach ($categoriesBar as $row)
                                        <option value="{{ $row['id'] }}">{{ $row['name'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3 col-md-5 col-xs-12 text-right static account-cart">
                    <div class="h-ctrl">
                        
                        <div class="h-cart">
                            <a href="{{ route('cart.index') }}" title="">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                <span>Giỏ hàng</span>
                                <em class="count_cart">{{ \Cart::count() }}</em>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
