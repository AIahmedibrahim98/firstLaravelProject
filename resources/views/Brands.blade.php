@extends('master')
@section('pageNameTitile')
Brands
@endsection
@section('content')
<h1>hello form Brands</h1>
<ul class="list-group">
@forelse ($barnds as $item)

    <li class="list-group-item text-center">{{$item}}</li>

@empty
<li class="list-group-item text-center">No Brands yet..</li>
@endforelse
</ul>
@endsection
