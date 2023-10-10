<footer class="bg-primaryColor ">
    {{--CONTAINER--}}
    <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
        <div class="flex flex-col justify-center items-center">
             {{--LOGO HEADING--}}
           <x-logoHeading/>
            {{--LOGO HEADING--}}
          <x-social/>
        </div>
        <hr class="my-2 border-gray-200 sm:mx-auto" />
        {{--AUTHOR--}}
        <div class="flex flex-col sm:flex-row justify-center items-center gap-1 mt-4 font-sans-serif">
            <span class="block text-sm text-white sm:text-center">© 2023 <a href="https://gameend.pl/"
                class="hover:underline">Gameend </a></span> 
                <span class="flex justify-center items-center gap-1 text-sm text-white sm:text-center">stworzone przez <a href="https:://gorskastrona.pl" class="flex justify-center items-center hover:underline">Górska Strona <img src="{{asset('assets/avatar_logo.png')}}" alt="logo Górskiej Strony - wykonawcy projektu" width="20px" class="ml-2 "></a></span>
        </div>
        
    </div>
</footer>