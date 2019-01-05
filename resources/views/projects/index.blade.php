@extends('layout')

@section('page-title', 'Projects: Curriculum For Life')

@section('title')
Projects
@endsection

@section('content')
<ul>
  @foreach($projects as $project)
  <li>
      <h2><b>
  <a href="/projects/{{ $project->id }}">{{ $project->title }}</a></h2></b>
    <p>{{ $project->description }}</p>
  </li>
  @endforeach
  </ul>
@endsection