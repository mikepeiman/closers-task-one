@extends('layout')

@section('page-title', 'Users: Curriculum For Life')

@section('title')
Users
@endsection

@section('tasks-list')
<ul>
  @foreach($users as $user)
  <li>{{ $user }}</li>
  @endforeach
  </ul>
@endsection