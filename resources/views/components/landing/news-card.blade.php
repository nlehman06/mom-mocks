<div
     class="flex flex-col lg:max-w-lg max-w-2xl overflow-hidden rounded-none sm:rounded-lg shadow-2xl w-full">
   <div class="bg-center bg-cover h-80 lg:h-48 w-auto" style="background-image: url('{{ $image }}')"></div>
   <div class="px-6 py-4 flex-1">
      <div class="font-semibold tracking-wider uppercase">{{ $category }}</div>
      <div class="font-extrabold mt-4">{{ $title }}</div>
      <p class="my-4">{{ $slot }}</p>
   </div>
</div>