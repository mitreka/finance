@extends('layout')

@section('content')
<form method="POST" action="{{ route('transactions.store') }}">
    @csrf
    <div class="mb-3">
        <label class="form-label">Account</label>
        <select name="account_id" class="form-select">
            @foreach($accounts as $account)
                <option value="{{ $account->id }}">{{ $account->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label class="form-label">Description</label>
        <input name="description" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Type</label>
        <select name="type" class="form-select">
            <option value="credit">Credit</option>
            <option value="debit">Debit</option>
        </select>
    </div>
    <div class="mb-3">
        <label class="form-label">Amount</label>
        <input name="amount" type="number" step="0.01" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Date</label>
        <input name="date" type="date" class="form-control">
    </div>
    <button class="btn btn-primary">Save</button>
</form>
@endsection
