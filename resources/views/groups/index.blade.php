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
    <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>
            <a href="{{ route('groups.show', 1) }}">
                <button type="button" class="btn btn-primary">Просмотреть</button>
            </a>
        <button type="button" class="btn btn-danger">Удалить</button>
        <button type="button" class="btn btn-secondary">Редактировать</button>
        </td>
      
    </tr>
    
  </tbody>
</table>
@endsection