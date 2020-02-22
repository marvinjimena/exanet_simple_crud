@extends('base')

@section('main')

<div class="row">
  <div class="col-sm-8 offset-sm-2">
  <h1 class="display-4">Contact Details</h1>
      <div class="form-group">
      <ul class="list-group">
        <li class="list-group-item">First Name: {{$contact->first_name}}</li>
        <li class="list-group-item">Last Name: {{$contact->last_name}}</li>
        <li class="list-group-item">Email: {{$contact->email}}</li>
        <li class="list-group-item">Job Title: {{$contact->job_title}}</li>
        <li class="list-group-item">City: {{$contact->city}}</li>
        <li class="list-group-item">Country: {{$contact->country}}</li>   
      </ul>
     </div>
     <div class="form-group">
      <a href="{{ url('/')}}" class="btn btn-primary">Back</a>
     </div>
   <div>
</div>
@endsection