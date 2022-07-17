@extends('layout.navbar')

@section('title','Login')


@section('content')

<section class="container-fluid">
    <section class="row justify-content-center">
        <section class="col-12 col-sm-6 col-md-3">
            <form class="form-container" action="{{route('auth.check')}}" method="post">
                @if(Session::get('fail'))
                    <div class="alert alert-danger">
                        {{Session::get('fail')}}
                    </div>
                @endif
                    
                @csrf
                <div class="mb-3">
                <label for="studentNumber" class="form-label">Student Number</label>
                <input type="text" class="form-control" id="studentNumber" aria-describedby="studentNumber" name="student_number" value="{{old('student_number')}}"> 
                <span class="text-danger"> @error('student_number') {{$message}} @enderror </span>
                </div>
                <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="st_num_pass">
                <span class="text-danger"> @error('st_num_pass') {{$message}} @enderror </span>
                </div>
                <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>    
            </form>
        </section>    
    </section>
</section>    
@endsection