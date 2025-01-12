@extends('layout')

@section('title')
Workopia | Create A Job
@endsection

@section('content')
<h1>Create New Job</h1>
<form action="/jobs" method="POST">
   @csrf
   <input type="text" name="title" placeholder="title" /><br /><br />
   <input type="text" name="description" placeholder="description" /><br /><br />
   <button type="submit">submit</button>
</form>
@endsection