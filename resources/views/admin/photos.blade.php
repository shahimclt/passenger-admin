@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2>Photos</h2>
    <a href="/admin/photos/create" class="btn btn-sm btn-success float-right">Add Photo</a>
    <table class="table mt-3">
        <thead>
            <tr>
            <th scope="col">Title</th>
            <th scope="col">Category</th>
            <th scope="col">date</th>
            <th scope="col">location</th>
            <th scope="col">desc</th>
            <th scope="col">Manage</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($photos as $photo)
            <tr>
                <td> 
                    <img style="width: 60px; height: 40px; object-fit: cover" src="{{ $photo->url }}"> 
                    <a href="/admin/photos/{{ $photo->id }}">{{ $photo->title }}</a>
                </td>
                <td>{{ $photo->category['name'] }}</td>
                <td>{{ $photo->date }}</td>
                <td>{{ $photo->location }}</td>
                <td>{{ $photo->description }}</td>
                <td><a href="/admin/photos/{{ $photo->id }}/edit" class="btn btn-sm btn-success">Edit</a></td>
            </tr>
            @endforeach          
        </tbody>
    </table>
    @if(!empty(Session::get('success')))
        <div class="alert alert-success"> {{ Session::get('success') }}</div>
    @endif
    @if(!empty(Session::get('error')))
        <div class="alert alert-danger"> {{ Session::get('error') }}</div>
    @endif
</div>
@endsection