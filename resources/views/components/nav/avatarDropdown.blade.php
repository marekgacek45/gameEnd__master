<img id="avatarButton" type="button" data-dropdown-toggle="userDropdown" data-dropdown-placement="bottom-start" class="w-10 h-10 rounded-full cursor-pointer" src="{{asset('assets/avatar.jpg')}}" alt="User dropdown">

<!-- Dropdown menu -->
<div id="userDropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
    <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
      <div>{{ Auth::user()->name }}</div>
      {{-- <div class="font-medium truncate">{{ Auth::user()->email }}</div> --}}
    </div>
    <ul class="py-2 text-sm text-gray-700 " aria-labelledby="avatarButton">
      <li>
        <a href="{{route('admin.index')}}" class="block px-4 py-2 hover:bg-gray-100">Admin</a>
      </li>
      <li>
        <a href="#" class="block px-4 py-2 hover:bg-gray-100 ">Moje Konto</a>
      </li>
      <li>
        <a href="#" class="block px-4 py-2 hover:bg-gray-100 ">Ustawienia</a>
      </li>
     
    </ul>
    <div class="py-1">
      <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 ">Wyloguj się</a>
    </div>
</div>