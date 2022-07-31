@php
 $page_title = 'Movies';   
@endphp

@extends('layouts.app')
@section('page_content')

<div class="container-fluid">

@foreach ($data as $item)   

<div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">titolo: {{$item["title"]}}</h5>
      <h5 class="card-title">titolo originale: {{$item["original_title"]}}</h5>
      <h5 class="card-title">nazionalità: {{$item["nationality"]}}</h5>
      <h5 class="card-title">anno: {{$item["date"]}}</h5>
      <h5 class="card-title">voto: {{$item["vote"]}}</h5>
    </div>
  </div>

  @endforeach
</div>
@endsection