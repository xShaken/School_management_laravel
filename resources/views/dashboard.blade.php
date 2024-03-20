@extends('layout')

@section('content')
<div class="container">

   <!-- Section: Design Block -->
<section class="">
    <!-- Jumbotron -->
    <div class="px-4 py-5 px-md-5 text-center text-lg-start" style="background-color: hsl(0, 0%, 96%)">
      <div class="container">
        <div class="row gx-lg-5 align-items-center">
          <div class="col-lg-6 mb-5 mb-lg-0">
            <h1 class="my-5 display-3 fw-bold ls-tight">
              Kinder Garden  <br />
              <span class="text-primary">Best for Study and Life</span>
            </h1>
            <p style="color: hsl(217, 10%, 50.8%)">
              Kindergarten provides experiences for children to grow and develop through play and interaction. It also allows children to become confident learners in a safe and supported environment, providing a framework of belonging, being and becoming.
            </p>
          </div>
  
          <div class="col-lg-6 mb-5 mb-lg-0">
            <div class="card">
              <div class="card-body py-5 px-md-5">
                <form>


                  <a type="submit" class="btn btn-primary btn-block mb-4"href="{{route('students.index')}}" role="button">Student CRUD</a>
                   
                
                </form>
                <form>
                  <a type="submit" class="btn btn-primary btn-block mb-4"href="{{route('teachers.index')}}" role="button">Teacher CRUD</a>
                   
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Jumbotron -->
  </section>
  <!-- Section: Design Block -->


    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
  
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
  
                    You are Logged In
                </div>
            </div>
        </div>
    </div> 
</div>
@endsection