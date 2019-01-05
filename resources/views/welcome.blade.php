@extends('layout')

@section('page-title', 'Curriculum For Life - How To Live Well')

@section('title')
Curriculum For Life - {{ $foo }}
@endsection

@section('content')
<ul>
@foreach($tasks as $task)
<li>{{ $task }}</li>
@endforeach
</ul>

@endsection