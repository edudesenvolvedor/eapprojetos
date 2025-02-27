<div class="shadow-md px-4">
    <div class="flex justify-between max-w-7xl mx-auto py-5 items-center">
        <a>
            <img src="{{ asset("assets/image/brand.png") }}" alt="brand" width="128"/>
        </a>
        <nav data-is-open="false" id="menu" class="hidden justify-end fixed  h-full w-8/12 top-0 left-0 xl:static xl:flex xl:w-full">
            <ul class="h-full text-center bg-white shadow-md px-2 space-y-4 xl:flex xl:space-x-4 xl:shadow-none  xl:items-center xl:space-y-0 xl:justify-end">
                <li class="p-4 text-primary uppercase">Início</li>
                <li class="p-4 hover:bg-gray-300 text-[#c6c6c6] uppercase hover:text-primary hover:cursor-pointer xl:hover:bg-transparent">Serviços</li>
                <li class="p-4 hover:bg-gray-300 text-[#c6c6c6] uppercase hover:text-primary hover:cursor-pointer xl:hover:bg-transparent">Sobre Mim</li>
                <li class="p-4 hover:bg-gray-300 text-[#c6c6c6] uppercase hover:text-primary hover:cursor-pointer xl:hover:bg-transparent">Blog</li>
                <li class="p-4 hover:bg-gray-300 text-[#c6c6c6] uppercase hover:text-primary hover:cursor-pointer xl:hover:bg-transparent">Contato</li>
                <li class="p-4 hover:bg-gray-300 text-[#c6c6c6] uppercase hover:text-primary hover:cursor-pointer xl:hover:bg-transparent"><a>Login</a></li>
                <li class="rounded-md p-4 shadow-md hover:-translate-y-1.5 hover:duration-300 hover:cursor-pointer bg-gradient-to-tl from-[#d11414] to-primary text-white hover:outline-solid hover:outline-4 hover:outline-red-900 animate-pulse hover:animate-none"><a onclick="hiddenSidebarMenu()"><span class="hidden sm:inline">Quero </span>Solicitar um Orçamento!</a></li>
            </ul>
        </nav>
        <button onclick="toggleSidebarMenu()" class="btn-toggle-navbar p-2 rounded-sm focus:outline-2 focus:outline-primary xl:hidden hover:cursor-pointer hover:bg-gray-400">
            <span class="hidden">Menu</span>
            <img src="{{ asset("assets/image/icons/list.svg") }}" alt="icone menu" width="32"/>
        </button>
    </div>
</div>
