@extends('layouts.home')
@section('title','Chi tiết sản phẩm')
@section('main')
<link rel="stylesheet" href="{{asset('css/category.css')}}">
<div id="wrap-inner" class="col-md-12">
    <div class="products">
        <h3>{{$categoryName->name}}</h3>        
        <div class="product-list row">
            @foreach($items as $item)
            <div class="product-item col-md-3 col-sm-6 col-xs-12">
                <a href="#"><img src="{{asset('upload/'. $item->anh)}}" style="height: 100px;" class="img-thumbnail"></a>
                <p><a href="#">{{ $item->ten}}</a></p>
                <p class="price">{{number_format( $item->gia_sp,0,',','.')}}₫</p>
                <div class="marsk">
                    <a href="{{asset('detail/'.$item->id.'.html')}}">Xem chi tiết</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div id="pagination">
        {{$items->links()}}
    </div>
</div>
@endsection()