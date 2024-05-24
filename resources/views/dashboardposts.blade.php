@extends('layouts.main')

@section('container')
@foreach ($posts as $post)
    {{ $post->title }}<br>
@endforeach
@endsection