@extends('layouts.app')
@section('content')
    <div class="container">
        <h2>Create a new customer</h2>
        @include('admin.customers.includes.form')
    </div>
@endsection
