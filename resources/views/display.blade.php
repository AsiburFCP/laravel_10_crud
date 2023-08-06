@extends('layouts')
@section('content')
<div class="mycontent">
    <div class="myapp">

        <h3 class="text-center">All Students Information <a href="{{route('home')}}" class="btn btn-primary ms-2">Insert Yours</a></h3>
        @if (session()->has('message'))
              <div class="alert alert-success">
                {{session()->get('message')}}
              </div>
              
            @endif
        <ul>
            @foreach ($students as $student)
            <li>
                Name - {{$student->name}}
                <br>
                Reg - {{$student->reg}}
                <br>
                Email - {{$student->email}}
                <br>
                <a href="{{route('edit.info',$student->id)}}" class="btn btn-sm btn-primary">Edit</a>
                <form action="{{route('delete.info')}}" method="POST" class='d-inline'>
                    @csrf
                    <input type="hidden" name="id" value="{{$student->id}}">
                    <input type="submit" value="Delete" class="btn btn-sm btn-warning">
                </form>
            </li>
            @endforeach
            
        </ul>
    </div>
</div>
@endsection