
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
        @foreach ($student as $item)
            <form action="{{ route('update',$item->id ) }}" method="POST">
            {{ csrf_field() }}
            
                Name :<input value="{{ $item->name }}" name="name"/><br>
                Roll :<input value="{{ $item->roll }}" name="roll"/><br>
                Class:<input value="{{ $item->class }}" name="class"><br>
                Email:<input value="{{ $item->email }}"name="email"><br>
            @endforeach    
                <input type="submit" value="submit"/><br>
                @foreach ($errors->all() as $error )
                    {{ $error }}<br>
                @endforeach
            </form>
         </div>
    </div>
</div>        


@endsection
