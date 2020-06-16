@extends('layouts')

@section('content')

    <div class="bg-secondary text-white">一覧画面ページ</div>
    <br>

    @foreach($products as $product)
        <div class="media">
            <p>id: {{$product->id}}</p>
            <img class="d-flex mr-3" data-src="holder.js/64x64?theme=sky" alt="商品画像">
            <div class="media-body">
                <h5 class="mt-0">商品名: {{$product->name}}</h5>
                <p>商品説明: {{$product->description}}</p>
            </div>
            <button type="button" class="btn btn-primary">編集</button>
            <button type="button" class="btn btn-danger">削除</button>
        </div>
    @endforeach
    {{$products->links()}}
@endsection
