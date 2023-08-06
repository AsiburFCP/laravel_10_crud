@extends('layouts')
@section('content')
<div class="mycontent">
    <div class="myapp">

        <h3 class="text-center">Insert Your Information <a href="{{route('display.info')}}" class="btn btn-primary ms-2">View All</a></h3>

        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        
        <form action="{{route('store.info')}}" method="POST">
            @csrf
            <div class="form-group mb-3">
                <label for="" class="form-label fw-bold">Student Name</label>
                <input type="text" name="name" class="form-control">
            </div>

            <div class="form-group mb-3">
                <label for="" class="form-label fw-bold">Student Reg No</label>
                <input type="number" name="reg" class="form-control">
            </div>

            <div class="form-group mb-3">
                <label for="" class="form-label fw-bold">Student Email</label>
                <input type="email" name="email" class="form-control">
            </div>

            <input type="submit" value="Submit Information" class="btn btn-primary fw-bold w-100">
        </form>
    </div>
</div>
@endsection