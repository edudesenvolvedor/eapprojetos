@extends('layouts.main')

@section('title', 'Eduardo Pacheco | Sobre Mim')

@section('content')

    <main>

        @include('partials.about.info')

        @include('partials.about.technologies')

        @include('partials.homepage.clients')

    </main>

@endsection
