
@extends('layout')
@section('title')
    View Post
    
@endsection


@section('content')

<div class="container">
     @if (session('successMsg'))
        <div class="alert alert-dismissible alert-success">
           <button type="button" class="close" data-dismissi="alert">x</button>
           <strong>Well Done!</strong>{{ session('successMsg') }}
        </div>
     @endif   
</div>
 <table class="table table-striped table-hover ">
  <thead>
  <tr>
    <th>#</th>
    <th>Name</th>
    <th>Roll</th>
    <th>Class</th>
    <th>Email</th>
    <th>Action</th>
  </tr>
  </thead>
  <tbody>
  @foreach ($student as $item)
  <tr>
    
       <td>{{ $item->id}}</td>
       <td>{{ $item->name }}</td>
       <td>{{ $item->roll }}</td>
       <td>{{ $item->class }}</td>
       <td>{{ $item->email }}</td>
       <td><a  class="btn btn-raised btn-primary btn-sm" href="{{ route('edit',$item->id) }}">Edit</a> ||<a class="btn btn-raised btn-danger btn-sm"  href="{{ route('delete',$item->id) }}">Delete</a></td>
  </tr>
 @endforeach  
  </tbody>
</table>        

@endsection
