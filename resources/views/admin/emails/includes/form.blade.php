@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li> {{ $error }} </li>
            @endforeach
        </ul>
    </div>

@endif
@if ($email->exists)
    <form class="my-3" action="{{ route('admin.emails.update', $email->id) }}" enctype="multipart/form-data"
        method="POST" novalidate>
        @method('PUT')
    @else
        <form class="my-3" action="{{ route('admin.emails.store') }}" enctype="multipart/form-data"
            method="POST" novalidate>
@endif
@csrf
<div class="row gy-2">
    <div class="col-6 py-2 text-left">
        <label for="recipient" class="form-label"><strong>Recipient</strong></label>
        <input type="text" class="form-control @error('recipient') is-invalid @enderror" id="recipient" name="recipient"
            value="{{ old('recipient', $email->recipient) }}">
        @error('recipient')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="col-6 py-2 text-left">
        <label for="title" class="form-label"><strong>Title</strong></label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
            value="{{ old('title', $email->title) }}">
        @error('title')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="col-12 py-2">
        <div class="mb-3">
            <label for="text" class="form-label"><strong>Text</strong></label>
            <textarea class="form-control" id="text" rows="5" name="text">{{ old('text', $email->text) }}</textarea>
        </div>
    </div>


</div>

<div class="d-flex justify-content-end align-items-center">
    <a class="btn btn-secondary mr-2" href="{{ route('admin.emails.index') }}" type="button" class="btn btn-success">
        Back
    </a>
    <button type="submit" class="btn btn-success">
        Confirm
    </button>
</div>

</form>
