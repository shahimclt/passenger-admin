@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card my-5">
        <div class="card-header">
            <h2>{{ $photo->title }}</h2>
        </div>
        <div class="card-body">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-6">
                        <img src="{{ $photo->url }}" class="img-fluid" alt="Photo">
                    </div>
                    <div class="col-sm-6">
                        <h5 class="card-title">{{ $photo->category['name'] }}</h5>
                        <h6 class="card-title">{{ $photo->location }} - <small>{{ $photo->date }}</small></h6>
                        <p class="card-text">{{ $photo->description }}</p>
                    </div>                  
                </div>
                <div class="text-center mt-3">
                    <a href="/admin/photos/{{ $photo->id }}/edit" class="btn btn-lg btn-success">Edit this Photo</a>
                    <a href="/admin/photos/{{ $photo->id }}/delete" class="btn btn-lg btn-danger">Delete</a>
                </div>
            </div>          
        </div>
    </div>
</div>
@endsection