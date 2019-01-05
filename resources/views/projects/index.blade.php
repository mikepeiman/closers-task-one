@extends('layout')

@section('page-title', 'Projects: Curriculum For Life')

@section('title')
Projects
@endsection

@section('content')
<ul>
  @foreach($projects as $project)
  <li>{{ $project }}</li>
  @endforeach
  </ul>
@endsection