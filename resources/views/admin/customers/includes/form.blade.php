@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li> {{ $error }} </li>
            @endforeach
        </ul>
    </div>

@endif
@if ($customer->exists)
    <form class="my-3" action="{{ route('admin.customers.update', $customer->id) }}"
        enctype="multipart/form-data" method="POST" novalidate>
        @method('PUT')
    @else
        <form class="my-3" action="{{ route('admin.customers.store') }}" enctype="multipart/form-data"
            method="POST" novalidate>
@endif
@csrf
<input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
<div class="row gy-2">
    <div class="col-6">
        <label for="name" class="form-label"><strong>Name</strong></label>
        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
            value="{{ old('name', $customer->name) }}">
        @error('name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="col-6">
        <label for="email" class="form-label"><strong>Email</strong></label>
        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email"
            value="{{ old('email', $customer->email) }}">
        @error('email')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="col-6">
        <div class="my-3">
            <label for="phone_number" class="form-label"><strong>Phone Number</strong></label>
            <input type="tel" class="form-control @error('phone_number') is-invalid @enderror" id="phone_number"
                name="phone_number" value="{{ old('phone_number', $customer->phone_number) }}">
            @error('phone_number')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>

    <div class="col-6">
        <div class="my-3 ">
            <label for="photos" class="form-label"><strong>Insert the url of the image</strong></label>
            <input class="form-control @error('photos') is-invalid @enderror" type="url" id="photos" name="photos"
                value="{{ old('photos', $customer->photos) }}">
            @error('photos')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>

    <div class="col-12">
        <div class="my-3 ">
            <label for="annotations" class="form-label"><strong>Annotations</strong></label>
            <textarea class="form-control @error('annotations') is-invalid @enderror" id="annotations" rows="5"
                name="annotations">{{ old('annotations', $customer->annotations) }}</textarea>
            @error('annotations')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>

</div>

<div class="d-flex justify-content-end align-items-center">
    <a class="btn btn-secondary mr-2" href="{{ route('admin.customers.index') }}" type="button"
        class="btn btn-success">
        Back
    </a>
    <button type="submit" class="btn btn-success">
        Confirm
    </button>
</div>

</form>
