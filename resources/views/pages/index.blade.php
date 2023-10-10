<x-layouts.master>
  @section('title', 'Gameend')

  <header class="mt-24 max-w-screen-2xl mx-auto ">
    <div id="headerSlider"
        class="flex bg-center min-h-[50vh]  pt-32 bg-gray-600 bg-blend-multiply bg-cover bg-no-repeat bg-[url('https://ocs-pl.oktawave.com/v1/AUTH_2887234e-384a-4873-8bc5-405211db13a2/spidersweb/2022/02/elden-ring-recenzja.jpg')] rounded-md">
    
        <div class="self-end px-4 pb-28 mx-auto max-w-screen-xl text-center d">
            <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">
                <strong class="text-mainColor-300">lorem</strong> ipsum</h1>
            <p class="mb-8 sm:px-16 lg:px-48 text-lg lg:text-xl font-light text-gray-300  " >Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestias, ducimus laudantium? Veritatis suscipit distinctio nemo optio quidem debitis omnis dolor!</p>
            <div class="flex flex-col sm:flex-row sm:justify-center space-y-4 sm:space-y-0 sm:space-x-4 lg:mt-16">
                
               
                
            </div>
        </div>
    </div>
</header>
  <main>


{{--VIDEO--}}
<section class="max-w-screen-xl mx-auto mt-12">

  <h2 class="text-5xl text-center font-bold">Najnowsze filmy</h2>

  <div class="sm:grid md:grid-cols-2 lg:grid-cols-3 mt-8 gap-x-12 gap-y-4">
@foreach ($videos as $video )
<div class="p-4 sm:p-8 md:p-0  border border-black rounded-md transition-shadow ">
      
  <a href="{{$video->link}}" class="flex flex-col justify-center items-center">
  <img src="{{ asset('storage/' . $video->thumbnail) }}" alt="miniaturka filmu {{$video->title}}" class="min-h-[250px] md:min-h-[200px] max-h-[250px] md:max-h-[200px] object-cover w-full" loading="lazy">
 
  <h2 class="text-xl font-semibold py-3">{{$video->title}}</h2>    
</a>
</div>
@endforeach
</div>

    
    
   
    
  
   
   

</section>

<section class="max-w-screen-xl mx-auto mt-12">

  <h2 class="text-5xl text-center font-bold">Najnowsze posty</h2>
  <div class="sm:grid md:grid-cols-2 lg:grid-cols-3 mt-8 gap-12">
    @foreach ($posts as $post)

        <x-posts.postCard :post="$post" />

    @endforeach
</div>
  </main>

</x-layouts.master>