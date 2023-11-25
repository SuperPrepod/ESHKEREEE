@extends('layouts.app')

@section('title','Редактирование группы')

@section('content' )
<!--форма front--> 

@include('groups.form', ['action'=>route('groups.update',$group->id),'method'=>'put'])


@endsection