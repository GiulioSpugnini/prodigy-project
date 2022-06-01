@extends('layouts.app')
@section('content')
    <div class="container">
        <h2>Create a new quote</h2>
        @include('admin.quotes.includes.form')
    </div>
@endsection
