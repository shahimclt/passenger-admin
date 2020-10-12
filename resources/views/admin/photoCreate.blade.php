@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card my-5">
        <div class="card-header">
            <h2>New Photo</h2>
        </div>
        <div class="card-body">
            <h5 class="card-title"></h5>
            <form action="{{ route('photos.store') }}" method="POST">
                @csrf
                <div class="row">
                <div class="col-12">
                        <div class="form-group">
                            <label for="url">URL</label>
                            <input class="form-control" name="url">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input class="form-control" name="title">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" name="description"></textarea>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="form-group">
                            <label for="room">Category</label>
                            <select class="form-control" name="category_id">
                                @foreach ($categories as $option)
                                    <option value="{{$option->id}}">{{ $option->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="form-group">
                            <label for="date">date</label>
                            <input type="date" class="form-control" name="date" placeholder="03/23/2020">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <div class="form-group">
                            <label for="location">Location</label>
                            <input class="form-control" name="location">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-lg btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection