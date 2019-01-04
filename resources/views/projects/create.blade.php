@extends('layout')

@section('page-title', 'Projects: Curriculum For Life')

@section('title')
Create a New Project
@endsection

@section('tasks-list')
<form method="POST" action="/projects">
  
  {{ csrf_field() }}

  <div>
    <input type="text" name="title" placeholder="Project Title">
  </div>
  <div><textarea name="description" cols="30" rows="10" placeholder="Project Description"></textarea></div>

  <div><button type="submit">Submit</button></div>
</form>
@endsection