@extends('layouts.app')
@section('content')
    <div class="d-flex justify-content-center algin-items-center">
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">

                <div class="col-md-12">
                    <div class="card-body row">
                        <h6 class="col-6"><strong>Amount:</strong><br>{{ $offer->amount }}€</h6>
                        <h6 class="col-6"><strong>Offer duration:</strong> <br>{{ $offer->offer_duration }}</h6>
                    </div>
                </div>
                <div class="col-12">
                    <div class="d-flex justify-content-end align-items-center my-2">
                        <a class="btn btn-secondary mr-2" href="{{ route('admin.offers.index') }}" type="button"
                            class="btn btn-success">
                            Back
                        </a>
                        <a class="btn btn btn-warning mr-2" href="{{ route('admin.offers.edit', $offer->id) }}">Change</a>
                        <form action="{{ route('admin.offers.destroy', $offer->id) }}" method="POST"
                            class="delete-form">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger mr-2" type="submit">Delete</button>
                        </form>
                    </div>
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
