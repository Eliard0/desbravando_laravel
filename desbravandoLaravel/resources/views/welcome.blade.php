@extends('layout.main')

@section('title', 'Bem vindo')
@section('content')
  @foreach($events as $event)
    <p>{{ $event->title}} -- {{$event->description}}</p>
  @endforeach
@endsection
