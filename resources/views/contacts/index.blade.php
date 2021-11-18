@extends('base')
@section('main')

    <div class="container">
<div class="row">
    <div class="col-sm pt-5">
        <h1 style="font-family: 'Georgia', sans-serif; color: #333333;" class="display-10 text-left pt-4">Thank you for creating an account</h1>
        <br/>
        <h6 style="font-family: 'Arial Regular', 'Arial', sans-serif; color: #333333;" class="display-10 text-left mt-3">Before we begin our journey, we need you to confirm your
    e-mail address.</h6>
    <br/>
    <h6 style="font-family: 'Arial Regular', 'Arial', sans-serif; color: #333333;" class="display-10 text-left mt-3">
Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias dolorum obcaecati sint, a dignissimos optio in, nulla, perferendis eaque totam quam provident facilis laborum? Quasi quibusdam quos aperiam, corrupti beatae voluptate itaque. Voluptates.</h6>
<br/>
<h6 style="font-family: 'Arial Regular', 'Arial', sans-serif; color: #333333;" class="display-10 text-left mt-3">
Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla vero blanditiis dicta dolore quam, provident tempora deserunt debitis! Laudantium reiciendis ut expedita quos illo sit!</h6>


        <div>
            @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
                </ul>
            </div><br/>
            @endif
                @csrf
               
              <br/>
                <div class="form-group pt-1">
                <button style="font-family: 'Arial Regular', 'Arial', sans-serif; color: #fbf8f8;" type="submit" class="btn btn-dark btn-lg btn-block">SEND ACTIVATION E-MAIL AGAIN</button>
                </div>
            
            
            </div>
        </div>
        <div class="col-sm">
        <div id="carouselExampleIndicators" class="carousel slide h-75" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
  </ol>
  <div class="carousel-inner h-100">
    <div class="carousel-item active">
    <div class="carousel-caption d-none d-md-block h-100 text-right">
    <img style="width: 70px; height:70px;" src="/images/Com@1x.svg" alt="wedsly icon" class="icon">
    </div>
      <img class="d-block w-100" src="/images/couple.jpg" alt="First slide">
      <div class="carousel-caption d-none d-md-block h-50">
    <h3 style="font-family: 'Georgia', sans-serif; color: #333333;" class="text-left">All roles in one account!<br/> Welcome to Wedsly 3.0</h3>
    <h6 style="font-family: 'Arial Regular', 'Arial', sans-serif; color: #333333;" class="text-left">Switch between roles
    easily from any Wedsly dashboard. One login, one password, all possibilities.</h6>
    <button style="font-family: 'Arial Regular', 'Arial', sans-serif; color: #fbf8f8;" type="submit" class="btn btn-dark btn-lg btn-block">LOG IN AND MERGE</button>
  </div>
    </div>
    <div class="carousel-item">
        <img class="d-block w-100" src="/images/sunset.jpg" alt="Second slide">
        <div class="carousel-caption d-none d-md-block h-50">
    <h1 style="font-family: 'Georgia', sans-serif; color: #fbf8f8;" class="text-left">A few clicks away from planning your dream wedding!</h1>
  </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

</div>
    </div>

</div>

    <div class="col-sm-12">
        @if(session()->get('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
        @endif
    </div>
</div>
@endsection