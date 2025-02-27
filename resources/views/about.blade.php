@extends('layouts.main')

@section('title', 'Eduardo Pacheco | Sobre Mim')

@section('content')

    <main>

        @include('partials.about.info')

        @include('partials.about.technologies')

        @include('partials.homepage.clients')

        @include('partials.homepage.portfolio')

        @include('partials.homepage.blog')

        @include('partials.homepage.testimonials')

        @include('partials.homepage.contact')

    </main>

@endsection
