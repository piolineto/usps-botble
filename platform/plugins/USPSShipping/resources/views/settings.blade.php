@extends('core/base::layouts.master')
@section('content')
    <form method="POST" action="{{ route('usps.settings.save') }}">
        @csrf
        <div class="form-group">
            <label for="usps_api_user_id">USPS API User ID</label>
            <input type="text" class="form-control" id="usps_api_user_id" name="usps_api_user_id" value="{{ setting('usps_api_user_id') }}" required>
        </div>
        <div class="form-group">
            <label for="usps_api_password">USPS API Password</label>
            <input type="password" class="form-control" id="usps_api_password" name="usps_api_password" value="{{ setting('usps_api_password') }}" required>
        </div>
        <div class="form-group">
            <label for="default_weight">Default Package Weight (lbs)</label>
            <input type="number" step="0.01" class="form-control" id="default_weight" name="default_weight" value="{{ setting('default_weight') }}">
        </div>
        <div class="form-group">
            <label for="handling_fee">Additional Handling Fee ($)</label>
            <input type="number" step="0.01" class="form-control" id="handling_fee" name="handling_fee" value="{{ setting('handling_fee') }}">
        </div>
        <button type="submit" class="btn btn-primary">Save Settings</button>
    </form>
@endsection