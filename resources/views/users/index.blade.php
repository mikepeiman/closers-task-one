@extends('layout')

@section('page-title', 'Users: Curriculum For Life')

@section('title')
Users
@endsection

@section('content')
<ul>
  @foreach($users as $user)
  <li>{{ $user }}</li>
  @endforeach
  </ul>
@endsection