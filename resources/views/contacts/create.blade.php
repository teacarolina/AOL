@extends('base')
@section('main')

<div class="container">
<div class="row">
    <div class="col-sm">
        <h1 style="font-family: 'Georgia', sans-serif; color: #333333;" class="display-10 text-center pt-4">Welcome to Wedsly</h1>
        <!--<h3 class="display-10">Already a member?</h3>-->
        <div style="height: 1px; background-color: black; width: 250px;" class="col-md-6 offset-md-3 mt-3"></div>
        <h6 style="font-family: 'Arial Regular', 'Arial', sans-serif; color: #333333;" class="display-10 text-center mt-3">Already a member? <b>Log in</b> or <b>Merge accounts</b></h6>
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
                <div class="form-group pt-4">
                    <label style="font-family: 'Arial Regular', 'Arial', sans-serif; color: #333333; font-size: 10px;" for="email" class="ml-4">E-MAIL*</label>
                    <input type="text" class="form-control" name="email"/>
                </div>
                <div class="row">
                <div class="col">
                <div class="form-group">
                    <label style="font-family: 'Arial Regular', 'Arial', sans-serif; color: #333333; font-size: 10px;" for="password" class="ml-4">CHOOSE PASSWORD*</label>
                    <input type="password" class="form-control" id="passwordCheck" name="password"/>
                    <span id="strengthBar" class="badge displayBadge">Strength Bar</span>
                    <!-- <div id="progress" class="progress"></div> -->
                  </div>
                </div>
                <div class="col">
                <div class="form-group">
                    <label style="font-family: 'Arial Regular', 'Arial', sans-serif; color: #333333; font-size: 10px;" for="password_confirmation" class="ml-4">REPEAT PASSWORD*</label>
                    <input type="password" class="form-control" name="password_confirmation"/>
                </div>
                </div>
                </div>
                <div class="form-group form-check-inline pt-4">
                <input type="checkbox" class="form-check-input" name="terms" value="yes" required/>
                <label style="font-family: 'Arial Regular', 'Arial', sans-serif; color: #333333; font-size: 12px;" for="terms" class="form-check-label">I accept that Wedsly will store and process my information</label>
                </div>
                <div class="form-group pt-4">
                <button style="font-family: 'Arial Regular', 'Arial', sans-serif; color: #fbf8f8;" type="submit" class="btn btn-secondary btn-lg btn-block">CREATE FREE ACCOUNT</button>
                </div>
            </form>
            <h6 style="font-family: 'Arial Regular', 'Arial', sans-serif; color: #333333;" class="display-10 text-center pt-2">OR SIGN IN WITH</h6>
            <div class="row pt-2">
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
        <div class="col-sm">
        <div id="carouselExampleIndicators" class="carousel slide h-75" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
   <!-- <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>-->
  </ol>
  <div class="carousel-inner h-100">
    <!--<div class="carousel-item active">
      <img class="d-block w-100" src="/images/bridal-bouquet.jpg" alt="First slide">
       <div class="carousel-caption d-none d-md-block">
    <h1>A few clicks away from planning your dream wedding!</h1>
  </div> 
    </div>-->
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

@endsection