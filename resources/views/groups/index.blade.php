@extends('layouts.app')

@section('title','Группы')
@section('content')




<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Название</th>
      <th scope="col">Управление</th>
    </tr>
  </thead>
  <tbody>
  @foreach($groups as $group)
    <tr>
        <th scope="row">{{ $group->id }}</th>
        <td>{{ $group->name }}</td>
        <td>
            <a href="{{ route('groups.show', $group->id) }}">
                <button type="button" class="btn btn-primary">Просмотреть</button>
            </a>
        <button type="button" class="btn btn-danger">Удалить</button>
        <button type="button" class="btn btn-secondary">Редактировать</button>
        </td>
      
    </tr>
    @endforeach

    
  </tbody>
</table>
<a href="{{ route('groups.create' ) }}">
                <button type="button" class="btn btn-primary">Create</button>
            </a>

@endsection