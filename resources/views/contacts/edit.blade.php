@extends('base')
@section('main')

<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Update password</h1>
        @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>
                    {{ $error }}
                </li>
                @endforeach
            </ul>
        </div><br/>
        @endif
        <form method="post" action="{{ route('contacts.update', $contact->id) }}">
            @method('PATCH')
            @csrf
       <!-- To edit email      
           <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" name="email" value="{{ $contact->email }}"/>
            </div> -->
            <div class="form-group">
                <label for="city">Password</label>
                <input type="password" class="form-control" name="password" value="{{ $contact->password }}"/>
            </div>
            <div class="form-group">
                    <label for="password_confirmation">Repeat Password</label>
                    <input type="password" class="form-control" name="password_confirmation"/>
                </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection