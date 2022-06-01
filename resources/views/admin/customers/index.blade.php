@extends('layouts.app')

@section('content')
    <div class="container">
        @if (session('message'))
            <div class="alert alert-{{ session('type') }}">
                {{ session('message') }}
            </div>
        @endif
        <header class="d-flex justify-content-between align-items-center">
            <h2>Customer</h2>
            <a href="{{ route('admin.customers.create') }}" class="btn btn-primary"> <i class="fa fa-plus mr-2"></i>
                Add
                Customer</a>
        </header>
        <div>
            <table class="table table-success">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>


                    </tr>
                </thead>
                <tbody>
                    @forelse($customers as $customer)
                        <tr>
                            <th scope="row">{{ $customer->id }}</th>
                            <td>{{ $customer->name }}</td>
                            <td>{{ $customer->email }}</td>

                            <td>{{ $customer->created_at }}</td>
                            <td>{{ $customer->updated_at }}</td>
                            <th class="d-flex justify-content-end align-items-center">
                                <a class="btn btn-sm btn-primary mr-2"
                                    href="{{ route('admin.customers.show', $customer->id) }}"><i
                                        class="fas fa-eye"></i></a>
                                <a class="btn btn-sm btn-warning mr-2"
                                    href="{{ route('admin.customers.edit', $customer->id) }}"><i
                                        class="fas fa-pencil"></i></a>
                                <form action="{{ route('admin.customers.destroy', $customer->id) }}" method="POST"
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
                                <h3>Didn't find any customers</h3>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
