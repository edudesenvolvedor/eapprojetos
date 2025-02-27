<footer class="border-t border-t-gray-300 py-8 text-center">
    EAP Projetos © 2025.
</footer>

<script>
    function toggleSidebarMenu () {
        console.log("ok")
        const menu = document.querySelector("#menu");
        const isOpen = menu.getAttribute("data-is-open") === "true";

        if (isOpen) {
            hideSidebarMenu();
        } else {
            showSidebarMenu();
        }
    }

    function showSidebarMenu() {
        const menu = document.querySelector("#menu");
        menu.classList.remove("hidden");
        menu.setAttribute("data-is-open", "true");
    }

    function hideSidebarMenu() {
        const menu = document.querySelector("#menu");
        menu.classList.add("hidden");
        menu.setAttribute("data-is-open", "false");
    }
</script>
