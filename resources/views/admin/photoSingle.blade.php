@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card my-5">
        <div class="card-header">
            <h2>{{ $photo->title }}</h2>
        </div>
        <div class="card-body">
            <div class="card-body">
                <div class="d-flex">
                    <img src="{{ asset('storage/photo_files/'.$photo->url) }}" style="max-width: 400px; border-radius: 4px;" class="img-fluid flex-fixed mr-3" alt="Photo">
                    <div class="">
                        <h5 class="card-title">{{ $photo->category['name'] }}</h5>
                        <h6 class="card-title">{{ $photo->location }} - <small>{{ $photo->date }}</small></h6>
                        <p class="card-text">{{ $photo->description }}</p>
                        <form action="{{ route('photos.destroy', $photo->id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <a href="/admin/photos/{{ $photo->id }}/edit" class="btn btn-sm btn-success">Edit this Photo</a>
                            <button type="submit" class="btn btn-sm btn-danger">Delete Photo</button>
                        </form>
                    </div>                  
                </div>
            </div>          
        </div>
    </div>
</div>
@endsection