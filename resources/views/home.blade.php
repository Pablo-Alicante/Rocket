@extends('layouts.master')

@section('title', 'Página home')

@section('barraMenu')
    @parent
    <a href={{ route('emails.index') }} class="block p-4 text-blue-500 hover:text-blue-700">
        Emails
    </a>
@endsection
