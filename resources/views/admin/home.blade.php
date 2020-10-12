@extends('layouts.app')

@section('content')
<div class="container text-center my-5">
    <div class="row">
        <div class="col-sm-6">
            <div class="card">
            <div class="card-body">
                <h4 class="card-title">Photos</h4>
                <p class="card-text">View and manage photos.</p>
                <a href="/admin/photos" class="btn btn-primary">Photos</a>
            </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
            <div class="card-body">
                <h4 class="card-title">Manage Categories</h4>
                <p class="card-text">Coming Soon...</p>
                <!-- <a href="/hotels" class="btn btn-primary">Categories</a> -->
            </div>
            </div>
        </div>
    </div>
</div>
@endsection