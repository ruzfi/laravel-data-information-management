@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card mt-5">
                <div class="card-header">User Detail</div>
                <div class="card-body">
                    <p>Name: {{ $user->firstName }} {{ $user->lastName }}</p>
                    <p>Email: {{ $user->email }}</p>
                    <p>Role ID: {{ $user->role }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
