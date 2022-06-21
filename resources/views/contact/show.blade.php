@extends('contact.layout')
@section('content')
<body style="background-color: rgb(0, 0, 0)">
  

  <div class="container " style="padding-top: 20px;margin-top:20px">
<div class="card bg-dark">
    <div class="card-header text-white">Data User</div>
    <div class="card-body">
    
          <div class="card-body">
          <h5 class="card-title text-white">Name : {{ $contacts->name }}</h5>
          <p class="card-text text-white">Username : {{ $contacts->Username }}</p>
          <p class="card-text text-white">Email : {{ $contacts->email }}</p>
          <p class="card-text text-white">Password : {{ $contacts->password }}</p>

    </div>
        
      </hr>
    
    </div>
  </div></div></body>