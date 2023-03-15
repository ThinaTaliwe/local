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
                    <h1 class="inline-block text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight dark:text-slate-200 py-4 block sm:inline-block flex">{{ __('Update role') }}</h1>
                    <a href="{{route('role.index')}}" class="no-underline hover:underline text-cyan-600 dark:text-cyan-400">{{ __('<< Back to all role') }}</a>
                    @if ($errors->any())
                        <ul class="mt-3 list-none list-inside text-sm text-red-400">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif
                </div>
                <div class="w-full px-6 py-4 bg-white overflow-hidden">
<form method="POST" action="{{ route('role.update', $role->id) }}">
                    @csrf
                    @method('PUT')
<div class="py-2">
                            <label for="name" class="block font-medium text-sm text-gray-700{{$errors->has('name') ? ' text-red-400' : ''}}">{{ __('Name') }}</label>
<input id="name" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{$errors->has('name') ? ' border-red-400' : ''}}"
                                            type="text"
                                            name="name"
                                            value="{{ old('name', $role->name) }}"
                                            />
                        </div>
                        @unless ($role->name == env('APP_SUPER_ADMIN', 'super-admin'))
                        <div class="py-2">
                            <h3 class="inline-block text-xl sm:text-2xl font-extrabold text-slate-900 tracking-tight dark:text-slate-200 py-4 block sm:inline-block flex">Permissions</h3>
                            <div class="grid grid-cols-4 gap-4">
                                @forelse ($permissions as $permission)
                                    <div class="col-span-4 sm:col-span-2 md:col-span-1">
                                        <label class="form-check-label">
                                            <input type="checkbox" name="permissions[]" value="{{ $permission->name }}" {{ in_array($permission->id, $roleHasPermissions) ? 'checked' : '' }} class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                            {{ $permission->name }}
                                        </label>
                                    </div>
                                @empty
                                    ----
                                @endforelse
                            </div>
                        </div>
                        @endunless
<div class="flex justify-end mt-4">
                            <button type='submit' class='btn bg-gradient-dark ms-auto transition ease-in-out duration-150'>
                                {{ __('Update') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
</x-app-layout>