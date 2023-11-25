@extends('layouts.app')

@section('title','Группы')

@section('content' )
<!--форма front--> 

@include('groups.form', ['action'=>route('groups.store'),'method'=>'post'])



@endsection

