@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-6 py-16 text-center">
        {{ $page->title }}
        {{ $page->content }}
    </div>
@endsection
