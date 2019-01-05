@extends('layout')

@section('page-title', 'Projects: Curriculum For Life')

@section('title')
Edit Project
@endsection

@section('content')
<form method="POST" action="/projects/{{ $project->id }}">
  {{ csrf_field() }}
  {{ method_field('PATCH')}}

  <!-- Blade method shorthand:
    @method('PATCH')
    @csrf
  -->

  <div class="field">
    <label for="title" class="label">Title</label>
    <div class="control">
      <input type="text" class="input" name="title" placeholder="Title" value="{{ $project->title }}">
    </div>
  </div>

  <div class="field">
    <label for="label" class="label">Description</label>
  <div class="control">
    <textarea name="description" class="textarea" cols="30" rows="10">{{ $project->description }}</textarea>
    </div>
  </div>

  <div class="field">
    <div type="submit" class="control">
      <button class="button is-link">Update Project</button>
    </div>
  </div>

<form method="POST" action="/projects/{{ $project->id}}">
    {{ method_field('DELETE') }}
    {{ csrf_field() }}
    <div class="field">
      <div type="submit" class="control">
        <button class="button">Delete Project</button>
      </div>
    </div>
  </form>
</form>

@endsection