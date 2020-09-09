@extends('layouts.home')
@section('title','ShopA-Z')
@section('main')
    <div id="wrap-inner">
        <div class="products">
            <h3>sản phẩm nổi bật</h3>
            <div class="product-list row">
                @foreach($products as $product)
                <div class="product-item col-md-3 col-sm-6 col-xs-12">
                    <a href="#"><img src="{{asset('upload/'. $product->anh)}}" style="height: 100px;" class="img-thumbnail"></a>
                    <p><a href="#">{{ $product->ten}}</a></p>
                    <p class="price">{{number_format( $product->gia_sp,0,',','.')}}₫</p>
                    <div class="marsk">
                        <a href="{{asset('detail/'.$product->id.'.html')}}">Xem chi tiết</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="products">
            <h3>sản phẩm mới</h3>
            <div class="product-list row">
                @foreach($news as $product)
                <div class="product-item col-md-3 col-sm-6 col-xs-12">
                    <a href="#"><img src="{{asset('upload/'. $product->anh)}}" style="height: 100px;" class="img-thumbnail"></a>
                    <p><a href="#">{{ $product->ten}}</a></p>
                    <p class="price">{{number_format( $product->gia_sp,0,',','.')}}₫</p>
                    <div class="marsk">
                        <a href="{{asset('detail/'.$product->id.'.html')}}">Xem chi tiết</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div> <!-- end main -->
        <div class="boxfooter">
                    <span>Tìm kiếm nhiều:</span>
                    <a href="{{asset('search?result=samsung')}}">• Samsung</a> 
                    <a href="{{asset('search?result=may+giat')}}">• Máy giặt</a> 
                    <a href="{{asset('search?result=may+bom+nuoc')}}">• Máy bơm nước</a> 
                    <a href="{{asset('search?result=Loa+Karaoke')}}">• Loa Karaoke</a> 
                    <a href="{{asset('search?result=ti+vi+sony')}}">• Tivi Sony</a> 
                    <a href="{{asset('search?result=ti+vi+samsung')}}">• Tivi Samsung</a> 
                    <a href="{{asset('search?result=quat+dieu+hoa')}}">• Quạt điều hòa</a> 
                    <a href="{{asset('search?result=tulanh')}}">• Tủ lạnh</a> 
                    <a href="{{asset('search?result=maygiat')}}">• Máy giặt mới 2020</a> 
                    <a href="{{asset('search?result=maygiat+Midea')}}">• Máy giặt Midea</a> 
                    <a href="{{asset('search?result=maygiat+lg')}}">• Máy giặt LG</a> 
                </div>
@endsection