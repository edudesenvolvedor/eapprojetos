@extends('blog.layouts.main')

@section('title', 'EAP Projetos | Artigos')

@section('content')
    <main class="flex justify-center py-32">
        <section class="space-y-8 max-w-3xl mx-auto p-8 rounded-lg shadow-md bg-gradient-to-tl from-[#FFF] to-white">
            <img src="https://picsum.photos/800/600" alt="image"/>
            <span>2 May, 2021</span>

            <h2>Digital Marketo to Their New Office.</h2>
            <p>Nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</p>

            <h2>Nobis eleifend option conguenes.</h2>
            <p>Mauris tempor, orci id pellentesque convallis, massa mi congue eros, sed posuere massa nunc quis dui. Integer ornare varius mi, in vehicula orci scelerisque sed. Fusce a massa nisi. Curabitur sit amet suscipit nisl. Sed eget nisl laoreet, suscipit enim nec, viverra eros. Nunc imperdiet risus leo, in rutrum erat dignissim id.</p>
            <p>Ut rhoncus vestibulum facilisis. Duis et lorem vitae ligula cursus venenatis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nunc vitae nisi tortor. Morbi leo nulla, posuere vel lectus a, egestas posuere lacus. Fusce eleifend hendrerit bibendum. Morbi nec efficitur ex.</p>

            <h2>Mauris tempor, orci id pellentesque.</h2>
            <p>Nulla non ligula vel nisi blandit egestas vel eget leo. Praesent fringilla dapibus dignissim. Pellentesque quis quam enim. Vestibulum ultrices, leo id suscipit efficitur, odio lorem rhoncus dolor, a facilisis neque mi ut ex. Quisque tempor urna a nisi pretium, a pretium massa tristique. Nullam in aliquam diam. Maecenas at nibh gravida, ornare eros non, commodo ligula. Sed efficitur sollicitudin auctor. Quisque nec imperdiet purus, in ornare odio. Quisque odio felis, vestibulum et.</p>

            <h2>Leave a Reply</h2>

            <form action="">
                <label>
                    Nome
                    <input type="text"/>
                </label>
                <label>
                    E-Mail
                    <input type="email"/>
                </label>
                <label>
                    Mensagem
                    <textarea></textarea>
                </label>
                <button type="submit">Enviar</button>
            </form>
        </section>
    </main>
@endsection
