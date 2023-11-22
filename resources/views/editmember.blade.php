@extends('layout.main')
@section('title', 'New Member')
@section('content')

<div class="member">
    <div class="member-form">
       
        <form action="/{{$user->id}}/update" method="POST"> <h1>Create New Member</h1>
            @csrf
            @method('POST')
            <label for="firstname">First Name</label>
            <input type="text" id="firstname" name="firstname" value="{{$user->firstname}}" required>
            
            <label for="lastname">Last Name</label>
            <input type="text" id="lastname" name="lastname" value="{{$user->lastname}}" required>
            
            <label for="age">Age</label>
            <input type="number" id="age" name="age" value="{{$user->age}}" required>
            
            <label for="phone">Phone</label>
            <input type="tel" id="phone" name="phone" value="{{$user->phone}}" required>
            
            <label for="email">Email Address</label>
            <input type="email" id="email" name="email" value="{{$user->email}}" required>
            
            <label for="address">Address</label>
            <input type="text" id="address" name="address" value="{{$user->address}}" required>

            <label for="summary">Professional Summary</label>
            <textarea id="summary" name="summary"value="{{$user->summary}}" required></textarea>
            
            <button type="submit" class="submit-button"> 

        </form>
    </div>
</div>

@endsection
