@extends('layouts.master')

@section('title', 'emails')

@section('contenido')
    <h1>Lista emails</h1>

    @foreach ($emails as $item)
        <p> {{ $item->id }}</p>
    @endforeach

@endsection
