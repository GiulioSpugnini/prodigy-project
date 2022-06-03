@extends('layouts.app')
@section('content')
    <div class="container">
        <h2 class="text-light">Create a new email</h2>
        @include('admin.emails.includes.form')
    </div>
@endsection
