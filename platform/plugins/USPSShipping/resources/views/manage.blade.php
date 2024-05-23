@extends('core/base::layouts.master')
@section('content')
    <h4>USPS Shipping Transactions</h4>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Order ID</th>
                <th>Tracking Number</th>
                <th>Shipping Rate</th>
                <th>Label URL</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($transactions as $transaction)
                <tr>
                    <td>{{ $transaction->order_id }}</td>
                    <td>{{ $transaction->tracking_number }}</td>
                    <td>{{ $transaction->shipping_rate }}</td>
                    <td><a href="{{ $transaction->label_url }}" target="_blank">View Label</a></td>
                    <td><a href="{{ route('usps.transaction.reprint', ['id' => $transaction->id]) }}" class="btn btn-secondary btn-sm">Reprint Label</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection