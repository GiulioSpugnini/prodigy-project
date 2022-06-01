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
<div class="row gy-2">
    <div class="col-6">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
            value="{{ old('name', $customer->name) }}">
        @error('name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="col-6">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" email="email"
            value="{{ old('email', $customer->email) }}">
        @error('email')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="col-6">
        <div class="mb-3">
            <label for="upload_image" class="form-label">Scegli un immagine</label>
            <input class="form-control" type="file" id="upload_image" name="image">
        </div>
    </div>

    <div class="col-12 text-center">
        <div class="mb-3">
            <label for="content" class="form-label">Contenuto</label>
            <textarea class="form-control" id="content" rows="5"
                name="content">{{ old('content', $customer->content) }}</textarea>
        </div>
    </div>

</div>

<div class="d-flex justify-content-end align-items-center">
    <a class="btn btn-secondary mr-2" href="{{ route('admin.customers.index') }}" type="button"
        class="btn btn-success">
        Indietro
    </a>
    <button type="submit" class="btn btn-success">
        Conferma
    </button>
</div>

</form>
