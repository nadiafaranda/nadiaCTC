@extends('layout.main')
@section('title', 'Home Page')
@section('content')
    <body>
        <h1> Member List </h1>
        <a href="{{ url('newmember') }}" class="addmemberbutton">Add New Member</a>
        <div class="table-container">
            <table class="member-list">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Age</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Professional Summary</th>
                        <th>Actions</th>
                        
                    </tr>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->firstname}}</td>
                            <td>{{$user->lasname}}</td>
                            <td>{{$user->age}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->phone}}</td>
                            <td>{{$user->address}}</td>
                            <td>{{$user->summary}}</td>
                            <td>
                                <a href="{{$user->id}}/edit" class="edit-button">Edit</a>
                                <form action="{{$user->id}}/delete"method="POST" onsubmit="return confirm('Are you sure you want to delete this item?')">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="submit-button">Delete</button>
                            </form>
                            </td>
                        </tr>
                    @endforeach
                </thead>
            </table>
        </div>
    </body>
</html>

@endsection