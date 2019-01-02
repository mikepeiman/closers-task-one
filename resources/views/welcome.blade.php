@extends('layout')

@section('page-title', 'Curriculum For Life - How To Live Well')

@section('title', 'Curriculum For Life')

@section('tasks-list')
<?php foreach ($tasks as $task) : ?>
<div>
<ul>
<li><?= $task ?></li>
</ul>
</div>
<?php endforeach; ?>
@endsection