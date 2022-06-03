@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li> {{ $error }} </li>
            @endforeach
        </ul>
    </div>

@endif
@if ($quote->exists)
    <form class="my-3" action="{{ route('admin.quotes.update', $quote->id) }}" enctype="multipart/form-data"
        method="POST" novalidate>
        @method('PUT')
    @else
        <form class="my-3" action="{{ route('admin.quotes.store') }}" enctype="multipart/form-data"
            method="POST" novalidate>
@endif
@csrf
<div class="row gy-2">
    <div class="col-6">
        <label for="amount" class="form-label">
            <h6 class="text-light">Amount</h6>
        </label>
        <input type="number" class="form-control @error('amount') is-invalid @enderror" id="amount" name="amount"
            value="{{ old('amount', $quote->amount) }}">
        @error('amount')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="col-6">
        <label for="discount" class="form-label">
            <h6 class="text-light">Discount</h6>
        </label>
        <input type="number" class="form-control @error('discount') is-invalid @enderror" id="discount" name="discount"
            value="{{ old('discount', $quote->discount) }}">
        @error('discount')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>






</div>

<div class="d-flex justify-content-end align-items-center my-2">
    <a class="btn btn-secondary mr-2" href="{{ route('admin.quotes.index') }}" type="button" class="btn btn-success">
        Back
    </a>
    <button type="submit" class="btn btn-success">
        Confirm
    </button>
</div>

</form>
