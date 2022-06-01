@extends('layouts.app')
@section('content')
    <div class="container">
        @if (session('message'))
            <div class="alert alert-{{ session('type') }}">
                {{ session('message') }}
            </div>
        @endif
        <header class="d-flex justify-content-between align-items-center">
            <h2>Quotes</h2>
            <a href="{{ route('admin.quotes.create') }}" class="btn btn-primary"> <i class="fa fa-plus mr-2"></i>
                Add
                quote</a>
        </header>
        <div>
            <table class="table table-success">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Amount</th>
                        <th scope="col">Discount</th>

                        <th scope="col">Created</th>
                        <th scope="col">Last update</th>


                    </tr>
                </thead>
                <tbody>
                    @forelse($quotes as $quote)
                        <tr>
                            <th scope="row">{{ $quote->id }}</th>
                            <td>{{ $quote->amount }}</td>
                            <td>{{ $quote->discount }}</td>
                            <td>{{ $quote->created_at }}</td>
                            <td>{{ $quote->updated_at }}</td>
                            <th class="d-flex justify-content-end align-items-center">
                                <a class="btn btn-sm btn-primary mr-2"
                                    href="{{ route('admin.quotes.show', $quote->id) }}"><i class="fas fa-eye"></i></a>
                                <a class="btn btn-sm btn-warning mr-2"
                                    href="{{ route('admin.quotes.edit', $quote->id) }}"><i class="fas fa-pencil"></i></a>
                                <form action="{{ route('admin.quotes.destroy', $quote->id) }}" method="POST"
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
                                <h3>Didn't find any quotes</h3>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
