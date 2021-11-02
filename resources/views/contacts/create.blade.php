@extends('base')
@section('main')

<div class="container">
<div class="row">
    <div class="col-6">
        <h1 style="font-family: 'Georgia', sans-serif; color: #333333;" class="display-10 text-center">Welcome to Wedsly</h1>
        <!--<h3 class="display-10">Already a member?</h3>-->
        <h6 style="font-family: 'Arial Regular', 'Arial', sans-serif; color: #333333;" class="display-10 text-center">Already a member? <b>Log in</b> or <b>Merge accounts</b></h6>
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
            <form method="post" action="{{ route('contacts.store') }}">
                @csrf
                <div class="form-group">
                    <label style="font-family: 'Arial Regular', 'Arial', sans-serif; color: #333333; font-size: 10px;" for="email">E-MAIL*</label>
                    <input type="text" class="form-control" name="email"/>
                </div>
                <div class="row">
                <div class="col">
                <div class="form-group">
                    <label style="font-family: 'Arial Regular', 'Arial', sans-serif; color: #333333; font-size: 10px;" for="password">CHOOSE PASSWORD*</label>
                    <input type="password" class="form-control" name="password"/>
                </div>
                </div>
                <div class="col">
                <div class="form-group">
                    <label style="font-family: 'Arial Regular', 'Arial', sans-serif; color: #333333; font-size: 10px;" for="password_confirmation">REPEAT PASSWORD*</label>
                    <input type="password" class="form-control" name="password_confirmation"/>
                </div>
                </div>
                </div>
                <div class="form-group form-check-inline">
                <input type="checkbox" class="form-check-input" name="terms" value="yes" required/>
                <label style="font-family: 'Arial Regular', 'Arial', sans-serif; color: #333333; font-size: 12px;" for="terms" class="form-check-label">I accept that Wedsly will store and process my information</label>
                </div>
                <div class="form-group">
                <button style="font-family: 'Arial Regular', 'Arial', sans-serif; color: #fbf8f8;" type="submit" class="btn btn-secondary btn-lg btn-block">CREATE FREE ACCOUNT</button>
                </div>
            </form>
            <h6 style="font-family: 'Arial Regular', 'Arial', sans-serif; color: #333333;" class="display-10 text-center">OR SIGN IN WITH</h6>
            <div class="row">
                <div class="col">
                <div class="form-group">
             <button type="submit" class="btn btn-outline-secondary btn-lg btn-block">
             <img style="width: 16px; height:16px;" src="/images/normal_u46.svg" alt="google icon" class="icon">
             </button>   
             </div>
                </div>
                <div class="col">
                <div class="form-group">
             <button type="submit" class="btn btn-outline-secondary btn-lg btn-block">
             <img style="width: 16px; height:16px;" src="/images/normal_u30.svg" alt="facebobk icon" class="icon">
             </button>   
             </div>
                </div>
                </div>
            </div>
        </div>
       <!--Not responsive design on carousel-->
        <div class="col-6">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="/images/bridal-bouquet.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="/images/couple.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="/images/sunset.jpg" alt="Third slide">
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
@endsection