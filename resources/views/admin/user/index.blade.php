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
                <h5 class="mb-0">Users</h5>
                <p class="text-sm mb-0">
               See All Users. 
                </p>
                </div>

                <div class="table-responsive px-4 pb-4">

                 
                      
                      @if(session()->has('message'))
                          <div class="mb-8 text-green-400 font-bold">
                              {{ session()->get('message') }}
                          </div>
                      @endif

                      @can('user create')
                      <div class="d-print-none with-border mb-4">
                          <a href="{{ route('user.create') }}" class="btn bg-gradient-dark ms-auto "><span class="btn-inner--icon pe-2"><i class="material-icons">add</i></span>{{ __('Add User') }}</a>
                      </div>
                      @endcan




                             
                      <table class="table table-flush" id="datatable-admin">
                        <thead class="thead-light">
                                      <tr>
                                        <th class="py-4 px-6  text-sm ">
                                             {{ __('Name') }}
                                          </th>
                                          <th class="py-4 px-6 text-sm ">
                                            {{ __('Email') }}
                                          </th>                                            
                                          @canany(['user edit', 'user delete'])
                                          <th class="py-4 px-6 text-sm ">
                                            {{ __('Actions') }}
                                          </th>
                                          @endcanany
                                      </tr>
                                  </thead>



                                    <tbody>
                                      @foreach($users as $user)
                                      <tr>
                                        <td class="p-2">
                                            <div class="text-sm text-gray-900">
                                                  <a href="{{route('user.show', $user->id)}}" class="text-sm font-weight-normal pt-3">{{ $user->name }}</a>
                                              </div>
                                          </td>
                                          <td class="p-2">
                                              
                                                  {{ $user->email }}
                                              
                                          </td>                                            
                                          @canany(['user edit', 'user delete'])
                                          <td class="p-2">
                                            
                                              <form action="{{ route('user.destroy', $user->id) }}" method="POST">
                                                <a href="{{route('user.show', $user->id)}}" class="btn bg-gradient-success me-2 mb-0 px-4 py-2">
                                                    {{ __('View') }}<span class="btn-inner--icon ps-2"><i class="material-icons">visibility</i></span>
                                                </a>

                                                  @can('user edit')
                                                  <a href="{{route('user.edit', $user->id)}}" class="btn bg-gradient-info ms-auto mb-0 px-4 py-2">
                                                      {{ __('Edit') }}<span class="btn-inner--icon ps-2"><i class="material-icons">edit</i></span>
                                                  </a>
                                                  @endcan
                                                  
                                            @can('user delete')
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
      </main>
</x-app-layout>