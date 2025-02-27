@extends("layouts.main")

@section("title", "Eduardo Pacheco | Portfólio")

@section("content")

    <main>

        @include("partials.homepage.hero")

        @include("partials.homepage.clients")

        @include("partials.homepage.info")

        @include("partials.homepage.services")

        @include("partials.homepage.call_to_action")

        @include("partials.homepage.portfolio")

        @include("partials.homepage.request_quote")

        @include("partials.homepage.testimonials")

        @include("partials.homepage.blog")

        @include("partials.homepage.contact")

    </main>

@endsection
