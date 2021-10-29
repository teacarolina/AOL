@extends('base')
@section('main')

<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Welcome to Wedsly</h1>
        <h3 class="display-10">Already a member?</h3>
        <h3 class="display-10">Log in or Merge accounts</h3>
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
                    <label for="email">E-MAIL*</label>
                    <input type="text" class="form-control" name="email"/>
                </div>
                <div class="form-group">
                    <label for="password">CHOOSE PASSWORD*</label>
                    <input type="password" class="form-control" name="password"/>
                </div>
                <div class="form-group">
                    <label for="password_confirmation">REPEAT PASSWORD*</label>
                    <input type="password" class="form-control" name="password_confirmation"/>
                </div>
                <div class="form-group">
                    <label for="terms">I accept that Wedsly will store and process my information</label>
                    <input type="radio" class="form-control" name="terms" value="yes" required/>
                </div>
                <button type="submit" class="btn btn-primary">CREATE FREE ACCOUNT</button>
            </form>
        </div>
    </div>
</div>
@endsection