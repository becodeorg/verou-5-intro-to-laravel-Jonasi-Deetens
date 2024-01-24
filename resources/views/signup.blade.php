@extends('components.layout')

@section('title', 'Sign up')

@section('content')
        <h1>Sign Up Here</h1>
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <label for="firstName">First Name:</label><br>
            <input type="text" name="firstName" id="firstName">
            <br>
            @if ($errors->any()) 
                @if($errors->has('firstName'))
                    <div class="alert alert-danger">
                        <p>{{ $errors->first('firstName') }}</p>
                    </div>
                @endif
            @endif
            <label for="lastName">Last Name:</label><br>
            <input type="text" name="lastName" id="lastName">
            <br>
            @if ($errors->any()) 
                @if($errors->has('lastName'))
                    <div class="alert alert-danger">
                        <p>{{ $errors->first('lastName') }}</p>
                    </div>
                @endif
            @endif
            <input type="submit" value="Send">
        </form>
@endsection