@if(session()->has('message'))

<div class="bg-green-400 border-t-4 border-teal-600 rounded text-white px-4 py-3 shadow-md my-5 mb-10">
   
        <p class="font-bold">{{session('message')}}</p>
     
  </div>

@endif