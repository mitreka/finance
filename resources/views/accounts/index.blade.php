@extends('layout')

@section('content')
<a href="{{ route('accounts.create') }}" class="btn btn-primary mb-3">New Account</a>
<table class="table table-bordered">
    <thead>
        <tr><th>Name</th><th>Type</th></tr>
    </thead>
    <tbody>
    @foreach($accounts as $account)
        <tr>
            <td>{{ $account->name }}</td>
            <td>{{ $account->type }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection
