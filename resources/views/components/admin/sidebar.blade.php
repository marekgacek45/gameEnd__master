@props(['posts'])


<nav class="fixed top-0 z-50 w-full bg-paleViolet ">
    <div class="px-3 py-3 lg:px-5 lg:pl-3 border-b z-30">
      <div class="flex items-center justify-between ">
        <div class="flex items-center justify-start">
          <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 text-sm text-darkBlue rounded-lg lg:hidden bg-white hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-200 ">
              <span class="sr-only">Otwórz sidebar</span>
              <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                 <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
              </svg>
           </button>
           <a href="/" class="flex items-center ml-4">
            <img src="{{ asset('assets/logo.webp') }}" class="h-10 mr-2" alt="Gameend Logo" />
            <span id="logo-title"
                class="self-center text-3xl font-semibold whitespace-nowrap text-actionColor-100">Gameend</span>
          </a>
        </div>
       <x-nav.avatarDropdown/>
      </div>
    </div>
  </nav>
  
  <aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-paleViolet border-r border-gray-200 lg:translate-x-0 " aria-label="Sidebar">
   <div class="h-full  ml-3 px-3 pb-4 overflow-y-auto bg-paleViolet text-white">
      <ul class="space-y-3 font-medium ">
         <li>
            <a href="{{route('admin.index')}}" class="flex items-center p-2 text-white rounded-lg dark:text-white hover:bg-actionColor-200 transition-all group">
             <i class="uil uil-desktop text-actionColor-100 group-hover:text-white text-3xl"></i>
               <span class="ml-3">Dashboard</span>
            </a>
         </li>
         <li>
            <a href="{{route('admin.index')}}" class="flex items-center p-2 text-white rounded-lg dark:text-white hover:bg-actionColor-200 transition-all group">
             <i class="uil uil-desktop text-actionColor-100 group-hover:text-white text-3xl"></i>
               <span class="ml-3">Wszystkie Posty</span>
            </a>
         </li>
         
        
         
         <li>
            <a href="{{route('admin.create')}}" class="flex items-center p-2 text-white rounded-lg dark:text-white hover:bg-actionColor-200 transition-all group">
             <i class=" uil uil-plus text-actionColor-100 group-hover:text-white text-3xl"></i>
               <span class="flex-1 ml-3 whitespace-nowrap">+ Post</span>
            </a>
         </li>
        
         <li>
            <a href="{{route('admin.category.index')}}" class="flex items-center p-2 text-white rounded-lg dark:text-white hover:bg-actionColor-200 transition-all group">
             <i class="uil uil-apps text-actionColor-100 group-hover:text-white text-3xl"></i>
               <span class="flex-1 ml-3 whitespace-nowrap">Kategorie</span>
            </a>
         </li>
         <li>
            <a href="{{route('admin.tag.index')}}" class="flex items-center p-2 text-white rounded-lg dark:text-white hover:bg-actionColor-200 transition-all group">
             <i class="uil uil-tag text-actionColor-100 group-hover:text-white text-3xl"></i>
               <span class="flex-1 ml-3 whitespace-nowrap">Tagi</span>
            </a>
         </li>
         <li>
            <a href="{{route('admin.video.index')}}" class="flex items-center p-2 text-white rounded-lg dark:text-white hover:bg-actionColor-200 transition-all group">
             <i class="uil uil-desktop text-actionColor-100 group-hover:text-white text-3xl"></i>
               <span class="ml-3">Wszystkie Wideo</span>
            </a>
         </li>
         <li>
            <a href="{{route('admin.video.create')}}" class="flex items-center p-2 text-white rounded-lg dark:text-white hover:bg-actionColor-200 transition-all group">
             <i class="uil uil-desktop text-actionColor-100 group-hover:text-white text-3xl"></i>
               <span class="ml-3">+ Wideo</span>
            </a>
         </li>
         <li>
          <a href="#" class="flex items-center p-2 text-white rounded-lg dark:text-white hover:bg-actionColor-200 transition-all group">
             <i class="uil uil-users-alt text-actionColor-100 group-hover:text-white text-3xl"></i>
             <span class="flex-1 ml-3 whitespace-nowrap">Użytkownicy</span>
          </a>
       </li>
        
         
      </ul>
   </div>
</aside>
  
  <div class=" p-4 lg:ml-64">
     <div class="p-4 mt-16 ">
        {{$slot}}
    
     </div>
  </div>