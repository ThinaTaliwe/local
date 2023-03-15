<x-app-layout>


  <x-sidenav>

    <li class="nav-item mt-3">
      <h6 class="ps-1  ms-2 text-uppercase text-xs font-weight-bolder text-white">Relative</h6>
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

    {{-- ADMIN Settings SECTION --}}
    @canany(['user edit', 'role edit', 'permission edit'])
    <li class="nav-item mt-3" >
      <hr class="horizontal light" />
      <h6 class="ps-1  ms-2 text-uppercase text-xs font-weight-bolder text-white">ADMIN SETTINGS</h6>
    </li>


    <li class="nav-item" data-title="Admin Settings (Users)" data-intro="Here you can view,edit and delete users and their roles!👪 " data-step='2'>
      <a class="nav-link text-white " href="{{ route('user.index') }}">
        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
          <i class="material-icons opacity-10">chevron_right</i>
        </div>
        <span class="nav-link-text text-sm ms-1">Users</span>
      </a>
    </li>


    <li class="nav-item" data-title="Admin Settings (Roles)" data-intro="Create new Roles that can be assigned to new and existing users!🛡️ " data-step='3'>
      <a class="nav-link text-white " href="{{ route('role.index') }}">
        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
          <i class="material-icons opacity-10">chevron_right</i>
        </div>
        <span class="nav-link-text text-sm ms-1">Roles</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link text-white " href="{{ route('permission.index') }}">
        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
          <i class="material-icons opacity-10">chevron_right</i>
        </div>
        <span class="nav-link-text text-sm ms-1">Permissions</span>
      </a>
    </li>


    @endcanany

    {{-- Settings SECTION --}}
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







  <main class="main-content position-relative mt-8  h-100 mb-0 border-radius-lg " style="max-height: 100vh !important;" data-title="All Done!👋" data-intro="Enjoy! Have a 1-derful experience! From: 1Office😉" data-step='6'>

    <div class="container-fluid mb-4 py-4" >



{{-- content here --}}
 <div class="row" data-title="Welcome! 👋" data-intro="Let me take you through some of the awesome features." data-step='1'>
  <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
  <div class="card">
  <div class="card-header p-3 pt-2">
  <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
  <i class="material-icons opacity-10">church</i>
  </div>
  <div class="text-end pt-1">
  <p class="text-sm mb-0 text-capitalize">Funerals This Week</p>
  <h4 class="mb-0">4</h4>
  </div>
  </div>
  <hr class="dark horizontal my-0">
  <div class="card-footer p-3">
  <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+55% </span>than last week</p>
  </div>
  </div>
  </div>
  <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
  <div class="card">
  <div class="card-header p-3 pt-2">
  <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
  <i class="material-icons opacity-10">group_add</i>
  </div>
  <div class="text-end pt-1">
  <p class="text-sm mb-0 text-capitalize">New Memberships This Month</p>
  <h4 class="mb-0">184</h4>
  </div>
  </div>
  <hr class="dark horizontal my-0">
  <div class="card-footer p-3">
  <p class="mb-0"><span class="text-danger text-sm font-weight-bolder">-3% </span>than last month</p>
  </div>
  </div>
  </div>
  <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
  <div class="card">
  <div class="card-header p-3 pt-2">
  <div class="icon icon-lg icon-shape bg-gradient-primary shadow-dark text-center border-radius-xl mt-n4 position-absolute">
  <i class="material-icons opacity-10">person_remove</i>
  </div>
  <div class="text-end pt-1">
  <p class="text-sm mb-0 text-capitalize">Cancelled Memberships</p>
  <h4 class="mb-0">3</h4>
  </div>
  </div>
  <hr class="dark horizontal my-0">
  <div class="card-footer p-3">
  <p class="mb-0"><span class="text-success text-sm font-weight-bolder">-2%</span> than last month</p>
  </div>
  </div>
  </div>
  <div class="col-xl-3 col-sm-6">
  <div class="card">
  <div class="card-header p-3 pt-2">
  <div class="icon icon-lg icon-shape bg-gradient-danger shadow-danger text-center border-radius-xl mt-n4 position-absolute">
  <i class="material-icons opacity-10">payments</i>
  </div>
  <div class="text-end pt-1">
  <p class="text-sm mb-0 text-capitalize">Outstanding Payments</p>
  <h4 class="mb-0">12</h4>
  </div>
  </div>
  <hr class="dark horizontal my-0">
  <div class="card-footer p-3">
  <p class="mb-0"><span class="text-danger text-sm font-weight-bolder">+5% </span>than last month</p>
  </div>
  </div>
  </div>
  </div>



{{--
  <div class="row mt-6">
    <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
      <div class="card bg-gradient-success shadow-success">

        <a class="btn  mb-0 py-7 text-white text-xl "  href="/add-member" style="font-size: 0.9rem"><i class="material-icons text-xl" style="font-size: 1.9rem">person_add</i>&nbsp;&nbsp;New Membership</a>
      </div>
    </div>

    <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
      <div class="card bg-gradient-dark shadow-dark">
        <a class="btn  mb-0 py-7 text-white text-xl "  href="/memberships" style="font-size: 0.9rem"><i class="material-icons text-xl" style="font-size: 1.9rem">recent_actors</i>&nbsp;&nbsp;All Memberships</a>
      </div>
      </div>


    <div class="col-xl-4 col-sm-6">

    <div class="card bg-gradient-success shadow-success">
      <a class="btn  mb-0 py-7 text-white text-xl "  href="javascript:;" style="font-size: 0.9rem" onclick="notify(this)" data-type="danger" data-content="You are not authorized to use this. Please request permission from Admin." data-title="Permission Denied" data-icon="fas fa-exclamation-triangle"><i class="material-icons text-xl" style="font-size: 1.9rem">group_add</i>&nbsp;&nbsp;Add Dependent</a>
    </div>
    </div>

    </div> --}}



    {{-- <div class="row mt-6">
      <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
        <div class="card bg-gradient-dark shadow-dark">
          <a class="btn  mb-0 py-7 text-white text-xl "  href="/dependants" style="font-size: 0.9rem"><i class="material-icons text-xl" style="font-size: 1.9rem">family_restroom</i>&nbsp;&nbsp;All Dependents</a>
        </div>
      </div>

      <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
        <div class="card bg-gradient-success shadow-success" data-bs-toggle="tooltip" data-bs-placement="top" title="This is disabled">
          <a  class="btn  mb-0 py-7 text-white text-xl disabled"  href="#" style="font-size: 0.9rem" ><i class="material-icons text-xl" style="font-size: 1.9rem">add_card</i>&nbsp;&nbsp;New Payment</a>
        </div>
        </div>


      <div class="col-xl-4 col-sm-6">

      <div class="card bg-gradient-dark shadow-dark">
        <a class="btn  mb-0 py-7 text-white text-xl " onclick="notify(this)" data-type="danger" data-content="You are not authorized to view this. Please request permission from Admin." data-title="Permission Denied" data-icon="fas fa-exclamation-triangle"  href="#" style="font-size: 0.9rem"><i class="material-icons text-xl" style="font-size: 1.9rem">history</i>&nbsp;&nbsp;Recent Transactions</a>
      </div>
      </div>

      </div> --}}

      {{-- END OF BUTTONS --}}


      {{-- <hr class="dark horizontal mt-6 mb-0"> --}}

      <div class="row mt-4">
        <div class="col-lg-4 col-sm-6">
        <div class="card h-100">
        <div class="card-header pb-0 p-3">
        <div class="d-flex justify-content-between">
        <h6 class="mb-0">Members</h6>
        <button type="button" class="btn btn-icon-only btn-rounded btn-outline-secondary mb-0 ms-2 btn-sm d-flex align-items-center justify-content-center" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="See traffic channels">
        <i class="material-icons text-sm">priority_high</i>
        </button>
        </div>
        </div>
        <div class="card-body pb-0 p-3 mt-4">
        <div class="row">
        <div class="col-7 text-start">
        <div class="chart">
        <canvas id="chart-pie" class="chart-canvas" height="200"></canvas>
        </div>
        </div>
        <div class="col-5 my-auto">
        <span class="badge badge-md badge-dot me-4 d-block text-start">
        <i class="bg-info"></i>
        <span class="text-dark text-xs">A1 - Member Age 0-35 </span>
        </span>
        <span class="badge badge-md badge-dot me-4 d-block text-start">
        <i class="bg-primary"></i>
        <span class="text-dark text-xs">B1 - Member Age 36-40 </span>
        </span>
        <span class="badge badge-md badge-dot me-4 d-block text-start">
        <i class="bg-dark"></i>
        <span class="text-dark text-xs">C1 - Member Age 41-45 </span>
        </span>
        <span class="badge badge-md badge-dot me-4 d-block text-start">
        <i class="bg-secondary"></i>
        <span class="text-dark text-xs">D1 - Member Age 46-50 </span>
        </span>
        </div>
        </div>
        </div>
        <div class="card-footer pt-0 pb-0 p-3 d-flex align-items-center">
        <div class="w-60">
        <p class="text-sm">
        More than <b>1,200,000</b> members are between 35-55, and <b>700,000+</b> are 1-34.
        </p>
        </div>
        <div class="w-40 text-end">
        <a class="btn bg-light mb-0 text-end" href="javascript:;" data-title="Membership Info" data-intro="Get in-depth statistics on Memberships and Dependants." data-step='4'>Read more</a>
        </div>
        </div>
        </div>
        </div>
        <div class="col-lg-8 col-sm-6 mt-sm-0 mt-4">
        <div class="card">
        <div class="card-header pb-0 p-3">
        <div class="d-flex justify-content-between">
        <h6 class="mb-0">Example</h6>
        <button type="button" class="btn btn-icon-only btn-rounded btn-outline-secondary mb-0 ms-2 btn-sm d-flex align-items-center justify-content-center" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-original-title="See which ads perform better">
        <i class="material-icons text-sm">priority_high</i>
        </button>
        </div>
        <div class="d-flex align-items-center">
        <span class="badge badge-md badge-dot me-4">
        <i class="bg-primary"></i>
        <span class="text-dark text-xs">Example 1</span>
        </span>
        <span class="badge badge-md badge-dot me-4">
        <i class="bg-dark"></i>
        <span class="text-dark text-xs">Example 2</span>
        </span>
        </div>
        </div>
        <div class="card-body p-3">
        <div class="chart">
        <canvas id="chart-line" class="chart-canvas" height="300"></canvas>
        </div>
        </div>
        </div>
        </div>
        </div>











      <div class="row mt-4">
        <div class="col-lg-8">
        <div class="card h-100">
        <div class="card-header pb-0 p-3">
        <div class="d-flex justify-content-between">
        <h6 class="mb-0">Dependants by Age</h6>
        </div>
        </div>
        <div class="card-body p-3">
        <div class="chart">
        <canvas id="chart-bar" class="chart-canvas" height="340"></canvas>
         </div>
        </div>
        </div>
        </div>



          {{-- Upcoming Events --}}
        <div class="col-lg-4 col-md-7">
          <div class="card">
          <div class="card-header p-3 pb-0">
          <h6 class="mb-0">Upcoming events</h6>
          <p class="text-sm mb-0 text-capitalize font-weight-normal">Next 7 Days</p>
          </div>
          <div class="card-body border-radius-lg p-3">
          <div class="d-flex">
          <div>
          <div class="icon icon-shape bg-gradient-dark icon-md text-center border-radius-md shadow-none">
          <i class="material-icons text-white opacity-10" aria-hidden="true">savings</i>
          </div>
          </div>
          <div class="ms-3">
          <div class="numbers">
          <h6 class="mb-1 text-dark text-sm">Memorial Service for John Doe</h6>
          <span class="text-sm">22 March 2023, at 12:30 PM</span>
          </div>
          </div>
          </div>
          <div class="d-flex mt-4">
          <div>
          <div class="icon icon-shape bg-gradient-dark icon-md text-center border-radius-md shadow-none">
          <i class="material-icons text-white opacity-10" aria-hidden="true">notifications_active</i>
          </div>
          </div>
          <div class="ms-3">
          <div class="numbers">
          <h6 class="mb-1 text-dark text-sm">Funeral Service @ Free State</h6>
          <span class="text-sm">24 March 2023, at 10:00 AM</span>
          </div>
          </div>
          </div>
          <div class="d-flex mt-4">
            <div>
            <div class="icon icon-shape bg-gradient-dark icon-md text-center border-radius-md shadow-none">
            <i class="material-icons text-white opacity-10" aria-hidden="true">notifications_active</i>
            </div>
            </div>
            <div class="ms-3">
            <div class="numbers">
            <h6 class="mb-1 text-dark text-sm">Funeral Service @ Boksburg</h6>
            <span class="text-sm">24 March 2023, at 10:00 AM</span>
            </div>
            </div>
            </div>
          <div class="d-flex mt-4">
          <div>
          <div class="icon icon-shape bg-gradient-dark icon-md text-center border-radius-md shadow-none">
          <i class="material-icons text-white opacity-10" aria-hidden="true">task</i>
          </div>
          </div>
          <div class="ms-3">
          <div class="numbers">
          <h6 class="mb-1 text-dark text-sm">Transport of mortal remains from Limpopo</h6>
          <span class="text-sm">27 March 2023, at 07:30 AM</span>
          </div>
          </div>
          </div>
          </div>

      </div>





  {{-- @include('components.footer') --}}
    </div>

    
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/intro.js/6.0.0/intro.min.js" integrity="sha512-i3JuyB+yXgX08haAnY9OnbCuv+a0aB6eLeKh970IOC3XOeWVnOtZlcla55VztDzqCHbl2zn9gpeNu2VBNdvmdQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/intro.js/6.0.0/intro.js" integrity="sha512-iC2jUAfCjQVVR2eGiPYjV2lb7ZIF0Tx3xPj/PdGZSJkSJVz5y+88tRwshNmrso1twhzhSQwBPXNLdAqUYmRAPg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  
  
    <script>
      introJs().start()
    </script>



  </main>


  





</x-app-layout>

