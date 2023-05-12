@extends('layouts.admin-layout')
@section('body')
  <div class='xl:px-24 px-4 py-4 grid grid-rows-auto grid-cols-1 justify-items-center'>
    <div class='flex xl:flex-row flex-col items-center justify-center w-full relative'>
      <h1 class='text-5xl text-center py-8'>@lang('Users List')</h1>
      <div class='xl:absolute xl:right-0'>
        <x-a :url="route('admin.create.user')" :name="'Create User'"/>
      </div>
    </div>
    @if(count($users) != 0)
      @foreach ($users as $user)
        <x-user :user="$user"/>
      @endforeach
    @else
      <div class="p-4">
        <h1 class='text-2xl'>There are no users created</h1>
      </div>
    @endif
  </div>
@endsection
