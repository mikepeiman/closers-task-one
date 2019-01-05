@extends('layout')

@section('page-title', 'Projects: Curriculum For Life')

@section('title')
{{$project->title}}
@endsection

@section('content')
<b>    <a href="/projects/{{ $project->id }}">{{ $project->title }}</a></b>
      <p>{{ $project->description }}</p>
<a href="/projects/{{ $project->id }}/edit">Edit</a>
@endsection