@extends('layouts.app')

@section('title', 'SPA - Home')

@section('content')
    <info-usuario :infousu="{{ $u }}"></info-usuario>
    <p>This is my body content.</p>
@endsection
