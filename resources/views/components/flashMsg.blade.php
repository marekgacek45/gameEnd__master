@if(session()->has('success'))
<div x-data={show:true} x-init="setTimeout(()=>show=false,4000)" x-show='show' class="fixed text-white bg-green-400 rounded-md p-4 bottom-3 right-3">
    <span class="p-12 uppercase">{{session('success')}}</span>
</div>
@endif