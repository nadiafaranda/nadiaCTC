@extends('layout.main')
@section('title', 'New Member')
@section('content')

<div class="member">
    <div class="member-form">
      
        <form action="/new-member" method="POST">  <h1>Create New Member</h1>
            @csrf
            @method('POST')
            <label for="firstname">First Name</label>
            <input type="text" id="firstname" name="firstname" required>

        
            <label for="lastname">Last Name</label>
            <input type="text" id="lastname" name="lastname" required>
            
        
            <label for="age">Age</label>
            <input type="number" id="age" name="age" required>
            
            <label for="email">Email Address</label>
            <input type="email" id="email" name="email" required>

            <label for="phone">Phone</label>
            <input type="tel" id="phone" name="phone" required>
            
            <label for="address">Address</label>
            <input type="address" id="address" name="address" required>

            <label for="summary">Professional Summary</label>
            <textarea id="summary" name="summary" required></textarea>

            <input type="submit" class="submit-button" value="SUBMIT"> 
        </form>
    </div>
</div>

@endsection