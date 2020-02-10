@extends('master')
@section('pageNameTitile')
category
@endsection
@section('content')
<h1>hello form category</h1>
<div class="row">
    <form class="col-5" action="/category/store" method="POST">
        @csrf
          <div class="form-group">
            <input type="text" name="name" class="form-control" placeholder="Name">
          </div>
          <button type="submit" class="btn btn-primary">Add Category</button>
      </form>
      <table class="table table-hover col-7">
        <thead>
          <tr>
            <th>#</th>
            <th>Name</th>
          </tr>
        </thead>
        <tbody>
    @forelse ($result as $item)
    <tr>
    <th scope="row">{{$item->id}}</th>
        <td>{{ $item->name }}</td>
      </tr>
    @empty
    <th scope="row">#</th>
        <td>No category yet</td>
      </tr>
    @endforelse
        </tbody>
      </table>
</div>


@endsection
