<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Permissions') }}
        </h2>
    </x-slot>

    <x-sidenav>

        <li class="nav-item mt-3">
          <h6 class="ps-1  ms-2 text-uppercase text-xs font-weight-bolder text-white">RELEVANT</h6>
        </li>
    
    
        <li class="nav-item">
          <a class="nav-link text-white " href="/memberships">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">chevron_right</i>
            </div>
            <span class="nav-link-text text-sm ms-1">Menu Item</span>
          </a>
        </li>
      
        <li class="nav-item">
          <a class="nav-link text-white " href="#">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">chevron_right</i>
            </div>
            <span class="nav-link-text text-sm ms-1">Menu Item</span>
          </a>
        </li>
      
        <li class="nav-item">
          <a class="nav-link text-white " href="#">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">chevron_right</i>
            </div>
            <span class="nav-link-text text-sm ms-1">Menu Item</span>
          </a>
        </li>
      
        <li class="nav-item">
          <a class="nav-link text-white " href="#">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">chevron_right</i>
            </div>
            <span class="nav-link-text text-sm ms-1">Menu Item</span>
          </a>
        </li>
    
        {{-- 2ND SECTION --}}
        <li class="nav-item mt-3">
          <hr class="horizontal light" />
          <h6 class="ps-1  ms-2 text-uppercase text-xs font-weight-bolder text-white">SETTINGS</h6>
        </li>
    
      
        <li class="nav-item">
          <a class="nav-link text-white " href="route('permission.index')">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">manage_accounts</i>
            </div>
            <span class="nav-link-text text-sm ms-1">Permissions</span>
          </a>
        </li>

        <li class="nav-item">
            <a class="nav-link text-white " href="#">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">chevron_right</i>
              </div>
              <span class="nav-link-text text-sm ms-1">Membership Types</span>
            </a>
          </li>
      
        <li class="nav-item">
          <a class="nav-link text-white " href="#">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">chevron_right</i>
            </div>
            <span class="nav-link-text text-sm ms-1">Correspondence Codes</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="#">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">chevron_right</i>
            </div>
            <span class="nav-link-text text-sm ms-1">Group Codes</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="#">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">chevron_right</i>
            </div>
            <span class="nav-link-text text-sm ms-1">Funeral Items</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="#">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">chevron_right</i>
            </div>
            <span class="nav-link-text text-sm ms-1">Benefits</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="#">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">chevron_right</i>
            </div>
            <span class="nav-link-text text-sm ms-1">Contractors</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="#">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">chevron_right</i>
            </div>
            <span class="nav-link-text text-sm ms-1">Recruiters</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="#">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">chevron_right</i>
            </div>
            <span class="nav-link-text text-sm ms-1">Document Settings</span>
          </a>
        </li>
        
      
      </x-sidenav>

<main class="main-content position-relative mt-8  h-100 mb-10 border-radius-lg ">

  <div class="container-fluid mb-4 py-4">


        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="px-6">
                    <h1 class="inline-block text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight dark:text-slate-200 py-4 block sm:inline-block flex">{{ __('Account Info') }}</h1>
                    @if ($errors->account->any())
                        <ul class="mt-3 list-none list-inside text-sm text-red-400">
                            @foreach ($errors->account->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif
                    @if(session()->has('account_message'))
                        <div class="mb-8 text-green-400 font-bold">
                            {{ session()->get('account_message') }}
                        </div>
                    @endif
                </div>
                <div class="w-full px-6 py-4 bg-white overflow-hidden">
<form method="POST" action="{{ route('admin.account.info.store') }}">
                    @csrf
<div class="py-2">
                            <label for="name" class="block font-medium text-sm text-gray-700{{$errors->account->has('name') ? ' text-red-400' : ''}}">{{ __('Name') }}</label>
<input id="name" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{$errors->account->has('name') ? ' border-red-400' : ''}}"
                                            type="text"
                                            name="name"
                                            value="{{ old('name', $user->name) }}"
                                            />
                        </div>
<div class="py-2">
                            <label for="email" class="block font-medium text-sm text-gray-700{{$errors->account->has('email') ? ' text-red-400' : ''}}">{{ __('Email') }}</label>
<input id="email" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{$errors->account->has('email') ? ' border-red-400' : ''}}"
                                            type="email"
                                            name="email"
                                            value="{{ old('email', $user->email) }}"
                                            />
                        </div>
<div class="flex justify-end mt-4">
                            <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                                {{ __('Update') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid mb-4 py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="px-6">
                    <h1 class="inline-block text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight dark:text-slate-200 py-4 block sm:inline-block flex">{{ __('Change Password') }}</h1>
                    @if ($errors->password->any())
                        <ul class="mt-3 list-none list-inside text-sm text-red-400">
                            @foreach ($errors->password->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif
                    @if(session()->has('password_message'))
                        <div class="mb-8 text-green-400 font-bold">
                            {{ session()->get('password_message') }}
                        </div>
                    @endif
                </div>
                <div class="w-full px-6 py-4 bg-white overflow-hidden">
<form method="POST" action="{{ route('admin.account.password.store') }}">
                    @csrf
<div class="py-2">
                            <label for="old_password" class="block font-medium text-sm text-gray-700{{$errors->password->has('old_password') ? ' text-red-400' : ''}}">{{ __('Old Password') }}</label>
<input id="old_password" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{$errors->password->has('old_password') ? ' border-red-400' : ''}}"
                                            type="password"
                                            name="old_password"
                                            />
                        </div>
<div class="py-2">
                            <label for="new_password" class="block font-medium text-sm text-gray-700{{$errors->password->has('new_password') ? ' text-red-400' : ''}}">{{ __('New Password') }}</label>
<input id="new_password" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{$errors->password->has('new_password') ? ' border-red-400' : ''}}"
                                            type="password"
                                            name="new_password"
                                            />
                        </div>
<div class="py-2">
                            <label for="confirm_password" class="block font-medium text-sm text-gray-700{{$errors->password->has('confirm_password') ? ' text-red-400' : ''}}">{{ __('Confirm password') }}</label>
<input id="confirm_password" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{$errors->password->has('confirm_password') ? ' border-red-400' : ''}}"
                                            type="password"
                                            name="confirm_password"
                                            />
                        </div>
<div class="flex justify-end mt-4">
                            <button type='submit' class='inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150'>
                                {{ __('Change Password') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
</x-app-layout>