<nav class=" fixed w-full z-20 top-0 left-0 bg-primaryColor-400">
    {{-- CONTAINER --}}
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-2 xl:p-1 ">
        {{-- LOGO-HEADING --}}
        <x-logoHeading />
        {{-- NAV-LINKS --}}
        <div class="hidden w-full lg:block lg:w-auto" id="navbar-dropdown">
            <x-nav.links />
        </div>
        <div class="flex justify-center items-center gap-2 p-3">
            @auth
                {{-- AVATAR DROPDOWN --}}
                <x-nav.avatarDropdown />
            @endauth
            {{-- HAMBURGER --}}
            <x-nav.hamburger />
        </div>
    </div>

</nav>
