@extends('master')
@section('pageNameTitile')
Products
@endsection
@section('content')
<h1>hello form Products</h1>
<ul class="list-group">

@forelse ($result as $job)
<li class="list-group-item active">{{ $job->name }}-{{ $job->max_salary }}-{{ $job->min_salary }} </li>

@empty

@endforelse
</ul>
@endsection
