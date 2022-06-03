@extends('layouts.app')
@section('content')
    <div class="container">
        @if (session('message'))
            <div class="alert alert-{{ session('type') }}">
                {{ session('message') }}
            </div>
        @endif
        <header class="d-flex justify-content-between align-items-center">
            <h2>Emails</h2>
            <a href="{{ route('admin.emails.create') }}" class="btn btn-primary"> <i class="fa fa-plus mr-2"></i>
                Write new
                email</a>
        </header>
        <div>
            <table class="table table-success">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Customer id</th>
                        <th scope="col">Title</th>
                        <th scope="col">Text</th>
                        <th scope="col">Date Time</th>


                    </tr>
                </thead>
                <tbody>
                    @forelse($emails as $email)
                        <tr>
                            <th scope="row">{{ $email->id }}</th>
                            <td>{{ $email->customer_id }}</td>
                            <td>{{ $email->title }}</td>
                            <td>{{ $email->text }}</td>
                            <td>{{ $email->updated_at }}</td>
                            <th class="d-flex justify-content-end align-items-center">
                                <a class="btn btn-sm btn-primary mr-2"
                                    href="{{ route('admin.emails.show', $email->id) }}"><i class="fas fa-eye"></i></a>
                                <a class="btn btn-sm btn-warning mr-2"
                                    href="{{ route('admin.emails.edit', $email->id) }}"><i class="fas fa-pencil"></i></a>
                                <form action="{{ route('admin.emails.destroy', $email->id) }}" method="POST"
                                    class="delete-form">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger" type="submit"><i
                                            class="fas fa-trash-alt"></i></button>

                                </form>
                            </th>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="">
                                <h3>Didn't find any emails</h3>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
