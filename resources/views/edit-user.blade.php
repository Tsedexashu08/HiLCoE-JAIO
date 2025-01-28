<x-app-layout>
<div id="edit" style="height: 100vh">
    
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
       <div class="py-12">{{--this part is the profile pic section for updating the user profile pic.--}}
       @include('components.admin-profile-card',['user'=>$user])
       </div>
       <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
           <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
               <div class="max-w-xl">
                   @include('components.update-profile-information',['user'=>$user])
               </div>
           </div>

           <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
               <div class="max-w-xl">
                   @include('components.update-password-information',['user'=>$user])
               </div>
           </div>

           <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg mb-4">
               <div class="max-w-xl">
                   @include('components.delete-user-form',['user'=>$user])
               </div>
           </div>
       </div>
   </div>
</div>
</x-app-layout>
<style>
   #edit::-webkit-scrollbar{
       display: none;
   }
</style>


