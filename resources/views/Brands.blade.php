@extends('master')
@section('pageNameTitile')
Brands
@endsection
@section('content')
<h1>hello form Brands</h1>
<ul class="list-group">
@forelse ($barnds as $item)

    {{-- <li class="list-group-item text-center {{($loop->odd)?'bg-danger':'bg-info'}}">{{$loop->iteration}} -{{$item}}</li> --}}
    <li class="list-group-item text-center @if ($loop->even)
        bg-danger
    @else
    bg-info
    @endif" >{{$loop->iteration}} -{{$item}}</li>
@empty
{{-- <li class="list-group-item text-center">No Brands yet..</li> --}}
<li class="list-group-item text-center">@component('Mycomponents/alart')
    No Brands yet..
    @slot('style')
    {{-- alert alert-info --}}
    @endslot
    @endcomponent</li>
@endforelse
</ul>
@endsection
