@extends('layouts.app')
@section('content')
    <div class="d-flex justify-content-center algin-items-center">
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">

                <div class="col-md-12">
                    <div class="card-body row">
                        <div class="col-6">
                            <div class="row">
                                <h6 class="col-6">Amount:<br>{{ $quote->amount }}</h6>
                                <h6 class="col-6">Discount: {{ $quote->discount }}</h6>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-end align-items-center my-2">
                    <a class="btn btn-secondary mr-2" href="{{ route('admin.quotes.index') }}" type="button"
                        class="btn btn-success">
                        Back
                    </a>
                    <a class="btn btn btn-warning mr-2" href="{{ route('admin.quotes.edit', $quote->id) }}">Change</a>
                    <form action="{{ route('admin.quotes.destroy', $quote->id) }}" method="POST" class="delete-form">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger mr-2" type="submit">Delete</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('additional-script')
    <script>
        const deleteForms = document.querySelector('.delete-form');
        deleteForms.addEventListener('submit', (e) => {
            e.preventDefault();
            const accept = confirm('Are you sure to delete it?');
            if (accept) e.target.submit();
        });
    </script>
@endsection
