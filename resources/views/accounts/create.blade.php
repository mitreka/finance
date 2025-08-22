@extends('layout')

@section('content')
<form method="POST" action="{{ route('accounts.store') }}">
    @csrf
    <div class="mb-3">
        <label class="form-label">Name</label>
        <input name="name" class="form-control" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Type</label>
        <input name="type" class="form-control">
    </div>
    <button class="btn btn-primary">Save</button>
</form>
@endsection
