@extends('navbar')

@section('title','Login')


@section('content')

<section class="container-fluid">
    <section class="row justify-content-center">
        <section class="col-12 col-sm-6 col-md-3">
            <form class="form-container">
                <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Student Number</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"> 
                </div>
                <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
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