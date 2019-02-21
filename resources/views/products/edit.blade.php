@extends('layouts.app')

@section('content')
<div class="container">
<div class="panel panel-default">
    <div class="panel-heading">Dashboard</div>
    <div class="panel-body">
    <form action="{{ route('products.update',['id'=>$product->id])}}" method="post">
        {{csrf_field()}}
        {{ method_field('PUT')}}
        <div class="form-group">
            <label for="name">Name</label>
        <input type="text" name="name" value="{{ $product->name }}" class="form-control">
        </div>
        <div class="form-group">
                <label for="price">Price</label>
            <input type="number" name="price" value="{{ $product->price }}" class="form-control">
            </div>

            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" name="image" class="form-control">
            </div>
            <div class="form-group">
                    <label for="description">Description</label>
            <textarea name="description" class="form-control" id="description" cols="30" rows="10">{{$product->description}}</textarea>
            </div>
            <div class="form-group">
                <button class="form-control btn btn-success">Save Product</button>
            </div>
    </form>
    </div>
</div>
</div>
@endsection