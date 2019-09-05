
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
         

@endsection
