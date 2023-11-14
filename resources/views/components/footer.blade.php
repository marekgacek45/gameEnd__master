<footer class="bg-primaryColor-400 ">
    {{--CONTAINER--}}
    <div class="w-full max-w-screen-xl mx-auto p-4">
        <div class="flex flex-col justify-center items-center">
             {{--LOGO HEADING--}}
           <x-logoHeading/>
           <span class="text-sm text-white">"Moje hasło to Coco Jamboo i do przodu"</span>
            {{--LOGO HEADING--}}
          <x-social/>
        </div>
        <hr class="my-2 border-gray-200 sm:mx-auto" />
        {{--AUTHOR--}}
        <div class="flex flex-col sm:flex-row justify-center items-center gap-1 mt-4 font-sans-serif">
            <span class="block text-sm text-white sm:text-center">© <span id="currentYearSpan"></span> <a href="https://gameend.pl/"
                class="hover:underline">gamEend | </a></span> 
                <span class="flex justify-center items-center gap-1 text-sm text-white sm:text-center">stworzone przez <a href="https://gorskastrona.pl" target='_blank' class="flex justify-center items-center hover:underline">Górska Strona <img src="{{asset('assets/avatar_logo.png')}}" alt="logo Górskiej Strony - wykonawcy projektu" width="20px" class="ml-2 "></a></span>
        </div>
        
    </div>
</footer>