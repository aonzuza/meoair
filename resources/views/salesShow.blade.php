@extends('layouts.app')


@section('style')
<link rel="stylesheet" href="{{ asset('admin/styles/style.css') }}" >
<link rel="stylesheet" href="{{ asset('admin/styles/responsivestyle.css') }}" >
@endsection

@section('content')

{!! $sale->body !!}

@endsection
