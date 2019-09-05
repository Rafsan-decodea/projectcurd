
@extends('layout')
@section('title')
    Create
    
@endsection


@section('content')

<div class="container">
   <div class="panal panel-default">
      <div class="panel-heading">
          <h3 class="panel-title">Add New Student</h3>
       </div>
       <div class="panel-body">
            <form action="{{ route('store') }}" method="POST">
            {{ csrf_field() }}
                Name :<input name="name"/><br>
                Roll :<input name="roll"/><br>
                Class:<input name="class"><br>
                Email:<input name="email"><br>
                <input type="submit" value="submit"/><br>
                @foreach ($errors->all() as $error )
                    {{ $error }}<br>
                @endforeach
            </form>
         </div>
    </div>
</div>        


@endsection
