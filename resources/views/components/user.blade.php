<div class='flex items-center justify-start p-4 border-2 rounded border-black w-full xl:h-36 my-4'>
  <x-delete-alert :route="route('admin.delete.user', ['id' => $user->id])" :id="$user->id"/>
  <div class='xl:w-full'>
    <div class='xl:px-4'>
      <h1 class='xl:text-3xl text-xl px-4'>{{$user->name}}</h1>
    </div>
  </div>
  <div class='w-full xl:block hidden'>
    <div class='overflow-auto'>
      <p class='text-lg px-4 max-h-28'>{{$user->email}}</p>
    </div>
  </div>
  <div class='xl:w-full flex flex-row items-center justify-end'>
    <div class='pl-1 text-end'>
      <button onclick="document.getElementById('{{$user->id}}').style.display = 'block';" class='text-xl py-4 px-6 rounded bg-red-600'>@lang('Delete')</button>
    </div>
  </div>
</div>