@extends('layouts.app')

@section('title','Группы')

@section('content' )
<!--форма front--> 

<form class="row g-3" action="{{ route('groups.store') }}" method="post">
    @csrf
  <div class="col-auto">
    <!-- <label for="inputPassword2"></label> -->
    <input name="name" type="text" class="form-control" id="inputPassword2" placeholder="Имя группы">
  </div>
  <div class="col-auto">
    <!-- <label for="inputPassword2"></label> -->
    <input name="leader" type="text" class="form-control" id="inputPassword2" placeholder="Имя старосты">
  </div>
  <div class="col-auto">
    <button type="submit" class="btn btn-primary mb-3">Воздать группу!1!</button>
  </div>
</form>
@endsection

