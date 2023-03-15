<x-app-layout>

<x-sidenav>
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

  <li class="nav-item">
    <a class="nav-link text-white " href="#">
      <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
        <i class="material-icons opacity-10">chevron_right</i>
      </div>
      <span class="nav-link-text text-sm ms-1">Menu Item</span>
    </a>
  </li>

</x-sidenav>






  <main class="main-content position-relative mt-7  h-100 mb-10 border-radius-lg ">
   
      
  
      <div class="container-fluid mb-4 py-4">




    <div class="row mt-4">
      <div class="col-12">
      <div class="card">
      
      <div class="card-header">
      <h5 class="mb-0">Dependants</h5>
      <p class="text-sm mb-0">
     See All Dependants. 
      </p>
      </div>
      <div class="table-responsive px-4 pb-4">




      <table class="table table-flush" id="datatable-search">
      <thead class="thead-light">
      <tr>
      <th>Name</th>
      <th>Surname</th>
      <th>ID Number</th>
      <th>Date Of Birth</th>
      <th>Gender</th>
      <th>Main Member</th>
      <th>Age</th>
      <th></th>
     
      </tr>
      </thead>
      <tbody>
        @foreach ($dependants as $dependant)
      <tr>
      <td class="text-sm font-weight-normal pt-3">{{$dependant->personDep->first_name}}</td>
      <td class="text-sm font-weight-normal pt-3">{{$dependant->personDep->last_name}}</td>
      <td class="text-sm font-weight-normal pt-3">{{$dependant->personDep->id_number}}</td>
      <td class="text-sm font-weight-normal pt-3">{{substr($dependant->personDep->birth_date,0,10)}}</td>
      <td class="text-sm font-weight-normal pt-3">{{$dependant->personDep->gender_id}}</td>
      <td class="text-sm font-weight-normal pt-3"><a href="/view-member/{{$dependant->personMain->membership->first()->id}}">{{$dependant->personMain->screen_name}}</a></td>
        @php
          $age = ageFromDOB($dependant->personDep->birth_date);
        @endphp
      <td class="text-sm fw-bolder my-2 pt-2 px-2 badge badge-sm {{ changeAgeBackground($age) }}">{{$age}}</td>
      
      

      <td class="text-sm text-center w-5 font-weight-normal">
        <a class="btn btn-link text-success text-gradient mx-3 mb-0" href="/view-member/{{$dependant->personMain->membership->first()->id}}#pills-dependants"><i class="material-icons text-sm me-2">visibility</i>View</a>
        <a class="btn btn-link text-warning text-gradient mx-3 mb-0" href="/edit-member/{{$dependant->personMain->membership->first()->id}}"><i class="material-icons text-sm me-2">edit</i>Edit</a> 
      </td>
    
      </tr>
      @endforeach
      
      </tbody>
      </table>
      </div>
      </div>
      </div>
      </div>





      @include('components.footer')


      </div>


  </main>



</x-app-layout>