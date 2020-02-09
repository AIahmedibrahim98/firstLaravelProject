@extends('master')
@section('pageNameTitile')
Products
@endsection
@section('content')
<h1>hello form Products</h1>
<div class="row">
<form class="col-5" action="/Product/store" method="POST">
    @csrf
      <div class="form-group">
        <input type="text" name="name" class="form-control" placeholder="Name">
      </div>
      <div class="form-group">
        <input type="number"  name="price" class="form-control" placeholder="price">
      </div>
      <button type="submit" class="btn btn-primary">Add product</button>
  </form>

<table class="table table-hover col-7">
    <thead>
      <tr>
        <th>#</th>
        <th>Name</th>
        <th>Price</th>
      </tr>
    </thead>
    <tbody>
        @forelse ($result as $item)
        <tr>
        <th scope="row">{{$item->id}}</th>
        <td>{{$item->name}}</td>
        <td>{{$item->price}}</td>
          </tr>
        @empty
        <tr>
            <th scope="row">#</th>
            <td class="text-center">No Products yet</td>
              </tr>
        @endforelse

    </tbody>
  </table>
</div>

@endsection
