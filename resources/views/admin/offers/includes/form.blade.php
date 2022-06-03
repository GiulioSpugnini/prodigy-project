@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li> {{ $error }} </li>
            @endforeach
        </ul>
    </div>

@endif
@if ($offer->exists)
    <form class="my-3" action="{{ route('admin.offers.update', $offer->id) }}" enctype="multipart/form-data"
        method="POST" novalidate>
        @method('PUT')
    @else
        <form class="my-3" action="{{ route('admin.offers.store') }}" enctype="multipart/form-data"
            method="POST" novalidate>
@endif
@csrf
<div class="row gy-2">
    <div class="col-6">
        <label for="amount" class="form-label"><strong class="text-light">Amount</strong></label>
        <input type="number" class="form-control @error('amount') is-invalid @enderror" id="amount" name="amount"
            value="{{ old('amount', $offer->amount) }}">
        @error('amount')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="col-6">
        <label for="offer_duration" class="form-label"><strong class="text-light">Offer
                duration</strong></label>
        <input type="datetime-local" class="form-control @error('offer_duration') is-invalid @enderror"
            id="offer_duration" name="offer_duration" value="{{ old('offer_duration', $offer->offer_duration) }}">
        @error('offer_duration')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>






</div>

<div class="d-flex justify-content-end align-items-center">
    <a class="btn btn-secondary mr-2 my-2" href="{{ route('admin.offers.index') }}" type="button"
        class="btn btn-success">
        Back
    </a>
    <button type="submit" class="btn btn-success my-2">
        Confirm
    </button>
</div>

</form>
