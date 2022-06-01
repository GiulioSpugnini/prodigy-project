@extends('layouts.app')
@section('content')
    <div class="d-flex justify-content-center algin-items-center">
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">

                <div class="col-md-8">
                    <div class="card-body">
                        <div class="d-flex align-items-baseline">
                            <h5 class="card-title">{{ $customer->name }}</h5>
                        </div>
                        <div>
                            <h5 class="card-title">Created date: {{ $customer->created_at }}</h5>
                        </div>


                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-end align-items-center my-2">
                <a class="btn btn-secondary mr-2" href="{{ route('admin.customers.index') }}" type="button"
                    class="btn btn-success">
                    Indietro
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
            const accept = confirm('Sei sicuro di voler cancellare questo post?');
            if (accept) e.target.submit();
        });
    </script>
@endsection
