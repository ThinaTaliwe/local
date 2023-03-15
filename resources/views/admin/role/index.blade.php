<x-app-layout>
    

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
          <a class="nav-link text-white " href="#">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">manage_accounts</i>
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








      <main class="main-content position-relative mt-7  h-100 mb-0 border-radius-lg " style="max-height: 80vh !important;">

        <div class="container-fluid mb-4 py-4">

          <div class="row mt-4">
            <div class="col-12">
            <div class="card">

              <div class="card-header">
                <h5 class="mb-0">Roles</h5>
                <p class="text-sm mb-0">
               See All Roles. 
                </p>
                </div>


                <div class="table-responsive px-4 pb-4">

                        @if(session()->has('message'))
                            <div class="mb-8 text-green-400 font-bold">
                                {{ session()->get('message') }}
                            </div>
                        @endif

                        @can('role create')
                        <div class="d-print-none with-border mb-4">
                            <a href="{{ route('role.create') }}" class="btn bg-gradient-dark ms-auto"><span class="btn-inner--icon pe-2"><i class="material-icons">add</i></span>{{ __('Add Role') }}</a>
                        </div>
                        @endcan
                            {{-- <div class="min-w-full border-b border-gray-200 shadow"> --}}
                                {{-- <form method="GET" action="{{ route('role.index') }}">
                                <div class="py-2 flex">
                                    <div class="overflow-hidden flex pl-4">
                                        <input type="search" name="search" value="{{ request()->input('search') }}" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Search">
                                        <button type='submit' class='ml-4 inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150'>
                                            {{ __('Search') }}
                                        </button>
                                    </div>
                                </div>
                                </form> --}}

                                <table class="table table-flush" id="datatable-roles">
                                    <thead class="thead-light">
                                        <tr>
                                            <th class="py-4 px-6  text-sm ">
                                                {{ __('Name') }}
                                            </th>
                                            @canany(['role edit', 'role delete'])
                                            <th class="py-4 px-6  text-sm ">
                                                {{ __('Actions') }}
                                            </th>
                                            @endcanany
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        @foreach($roles as $role)
                                        <tr>
                                            <td class="p-2">
                                                
                                                    <a href="{{route('role.show', $role->id)}}" class="text-sm font-weight-normal pt-3">{{ $role->name }}</a>
                                               
                                            </td>
                                            @canany(['role edit', 'role delete'])
                                            <td class="p-2">
                                                <form action="{{ route('role.destroy', $role->id) }}" method="POST">
                                                    @can('role edit')
                                                    <a href="{{route('role.edit', $role->id)}}" class="btn bg-gradient-info ms-auto mb-0 px-4 py-2">
                                                        {{ __('Edit') }}<span class="btn-inner--icon ps-2"><i class="material-icons">edit</i></span>
                                                    </a>
                                                    @endcan
                                                    @can('role delete')
                                                    @csrf
                                                                                          @method('DELETE')
                                                    <button class="btn bg-gradient-dark ms-2 mb-0">
                                                        {{ __('Delete') }}<span class="btn-inner--icon ps-2"><i class="material-icons">remove_circle_outline</i></span>
                                                    </button>
                                                    @endcan
                                                </form>
                                            </td>
                                            @endcanany
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>



                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        
    </div>
      </main>
</x-app-layout>