<x-layout>
    <x-slot name="content">
        <h1>Hello World!</h1>
        <form method="POST">
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
        {{ $error }}
    </x-slot>
</x-layout>