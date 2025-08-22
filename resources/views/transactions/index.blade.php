@extends('layout')

@section('content')
<a href="{{ route('transactions.create') }}" class="btn btn-primary mb-3">New Transaction</a>
<table class="table table-bordered">
    <thead>
        <tr><th>Date</th><th>Account</th><th>Description</th><th>Type</th><th>Amount</th></tr>
    </thead>
    <tbody>
    @foreach($transactions as $transaction)
        <tr>
            <td>{{ $transaction->date }}</td>
            <td>{{ $transaction->account->name }}</td>
            <td>{{ $transaction->description }}</td>
            <td>{{ $transaction->type }}</td>
            <td>{{ number_format($transaction->amount, 2) }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection
