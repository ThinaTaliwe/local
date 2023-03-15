<x-app-layout>

<x-sidenav>
  <li class="nav-item">
    <a class="nav-link text-white " href="#">
      <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
        <i class="material-icons opacity-10">chevron_right</i>
      </div>
      <span class="nav-link-text text-sm ms-1">Add dependent</span>
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
      <h5 class="mb-0">Memberships</h5>
      <p class="text-sm mb-0">
     See All Memberships. 
      </p>
      </div>
      <div class="table-responsive px-4 pb-4">




      <table class="table table-flush" id="datatable-search">
      <thead class="thead-light">
      <tr>
      <th>Name</th>
      <th>Surname</th>
      <th>ID Number</th>
      <th>Gender</th>
      <th>Age</th>
      <th>Telephone</th>
      <th>Join Date</th>
      <th>End Date</th>
      <th>Status</th>
      <th></th>
     
      </tr>
      </thead>
      <tbody>
        @foreach ($memberships as $membership)
      <tr>
      <td class="text-sm font-weight-normal pt-3">{{ $membership->name }}</td>
      <td class="text-sm font-weight-normal pt-3">{{ $membership->surname }}</td>
      <td class="text-sm font-weight-normal pt-3">{{ $membership->id_number }}</td>
      <td class="text-sm font-weight-normal pt-3">{{$membership->gender_id}}</td>
        @php
          $age = ageFromDOB($membership->person->birth_date);
        @endphp
      <td class="text-sm font-weight-normal pt-3">{{$age}}</td>
      <td class="text-sm font-weight-normal pt-3">{{ $membership->primary_contact_number }}</td>
      <td class="text-sm font-weight-normal pt-3">{{ Carbon\Carbon::parse($membership->join_date)->format('d/m/Y') }}</td>
      <td class="text-sm font-weight-normal pt-3">{{ Carbon\Carbon::parse($membership->end_date)->format('d/m/Y') }}</td>
      <td class="text-sm font-weight-normal pt-3">{{ $membership->bu_membership_status_id }}</td>
      <td class="text-sm text-center w-5 font-weight-normal">
        <a class="btn btn-link text-success text-gradient mx-3 mb-0" href="/view-member/{{ $membership->id }}"><i class="material-icons text-sm me-2">visibility</i>View</a>
        <a class="btn btn-link text-warning text-gradient mx-3 mb-0" href="/edit-member/{{ $membership->id }}"><i class="material-icons text-sm me-2">edit</i>Edit</a>
        <a class="btn btn-link text-danger text-gradient mx-3 mb-0" href="#" onclick="deleteConfirm('/cancel-member/{{ $membership->id }}')"><i class="material-icons text-sm me-2" read-only>delete</i>Cancel</a>
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
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="sweetalert2.all.min.js"></script>
<script>
  window.deleteConfirm = function(membershipId)
{
    Swal.fire({
        icon: 'warning',
        text: 'Do you want to cancel this membership?',
        showCancelButton: true,
        confirmButtonText: 'Delete',
        confirmButtonColor: '#e3342f',
    }).then((result) => {
        if (result.isConfirmed) {
          
          Swal.fire({
  title: 'Select Reason for Cancellation',
  input: 'select',
  inputOptions: {
  
      reason1: 'Reason 1',
      reason2: 'Reason 2',
      reason3: 'Reason 3',
      reason4: 'Reason 4'
   
  },
  inputPlaceholder: 'Select a reason',
  showCancelButton: true,
  inputValidator: (value) => {
    return new Promise((resolve) => {
      if (value === '') {
        resolve('You need to select a reason for cancellation')
      } else {
        window.location.href = membershipId;
      }
    })
  }
})















        }
    });
}
</script>

</x-app-layout>