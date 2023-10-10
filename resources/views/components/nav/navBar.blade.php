<nav class="bg-primaryColor 0 fixed w-full z-20 top-0 left-0">
    {{-- CONTAINER --}}
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4 xl:p-1">
        {{-- LOGO-HEADING --}}
        <x-logoHeading />
        {{-- HAMBURGER --}}
        <x-nav.hamburger />
        {{-- NAV-LINKS --}}
        <div class="hidden w-full md:block md:w-auto" id="navbar-dropdown">
            <x-nav.links />
        </div>
        @auth
            {{-- AVATAR DROPDOWN --}}
            <x-avatarDropdown />
        @endauth
    </div>

</nav>