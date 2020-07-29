<x-auth>
   <x-slot name="title">
      cReset password
   </x-slot>
   <div>
      @livewire('auth.passwords.reset', [
      'token' => $token
      ])
   </div>
</x-auth>