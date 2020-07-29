<div class="flex flex-row lg:flex-col lg:max-w-xs lg:mt-0 max-w-2xl mt-20 overflow-hidden rounded-none sm:rounded-lg shadow-2xl w-full">
   <div class="bg-cover h-auto lg:h-48 lg:w-auto w-40" style="background-image: url('{{ $image }}')"></div>
   <div class="px-6 py-4 text-center flex-1">
      {{ $slot }}
   </div>
</div>