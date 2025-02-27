@extends('blog.layouts.main')

@section('title', 'EAP Projetos | Blog')

@section('content')
    <section class="py-32 flex flex-col items-center min-h-screen">
        <form action="" class="flex items-center">
            <input class="bg-gradient-to-tl from-[#FFF] to-white shadow-md p-2 rounded-bl-md rounded-tl-md border-2 border-r-0 border-gray-300" type="text" placeholder="Pesquisar ..." />
            <button class="shadow-md bg-gradient-to-tl from-[#FFF] to-white py-2 px-4 border-gray-300 border-2 border-l-0 hover:from-primary hover:to-primary hover:cursor-pointer hover:text-white">Pesquisar</button>
        </form>

        <div class="py-32">
            <h2 class="h1">Não foi Encontrado ...</h2>
        </div>
    </section>
@endsection
