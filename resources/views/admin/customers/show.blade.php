@extends('layouts.app')
@section('content')
    <div class="d-flex justify-content-center algin-items-center">
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">

                <div class="col-md-12">
                    <div class="card-body row">
                        <div class="col-6">
                            <div class="row">
                                <h6 class="col-12"><strong>Name:</strong><br>{{ $customer->name }}</h6>
                                <h6 class="col-12"><strong>Phone Number:</strong><br> {{ $customer->phone_number }}
                                </h6>
                                <h6 class="col-12"><strong>Email:</strong> <br>{{ $customer->email }}</h6>
                            </div>
                        </div>
                        <div class="col-6">
                            <img class="img-fluid" src="{{ $customer->photos }}" alt="">
                        </div>
                    </div>
                    <div class="col-12 flex-grow-1">
                        <h6><strong>Annotations:</strong> <br>{{ $customer->annotations }}</h6>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-end align-items-center my-2">
                <a class="btn btn-secondary mr-2" href="{{ route('admin.customers.index') }}" type="button"
                    class="btn btn-success">
                    Back
                </a>
                <a class="btn btn btn-warning mr-2" href="{{ route('admin.customers.edit', $customer->id) }}">Change</a>
                <form action="{{ route('admin.customers.destroy', $customer->id) }}" method="POST" class="delete-form">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger mr-2" type="submit">Delete</button>

                </form>
            </div>
        </div>
    </div>
@endsection

@section('additional-script')
    <script>
        const deleteForms = document.querySelector('.delete-form');
        deleteForms.addEventListener('submit', (e) => {
            e.preventDefault();
            const accept = confirm('Are you sure you want to delete it?');
            if (accept) e.target.submit();
        });
    </script>
@endsection
