<x-app-layout>

      <!--Second Navbar -->
      <nav class="navbar navbar-expand-lg  w-100 blur top-0 z-index-2 shadow-dark position-sticky  navbar-dark shadow-blur position-absolute  py-2 start-0 end-0 mx-auto" style="margin-top:67px">
        {{-- <div class="w-20 py-0 px-3">
        <nav aria-label="breadcrumb" >
        
              <h6 class="font-weight-bolder mb-0">Membership - {{ $membership->name }}</h6>
            </nav>
          </div>--}}
        {{-- <div class="container-fluid me-10">  --}}
        
        
        <div class="collapse mx-auto navbar-collapse w-100 pt-3 pb-2 py-lg-0" id="navigation">
        <ul class="navbar-nav navbar-nav-hover mx-auto">

          <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
            <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
              <div class="sidenav-toggler-inner">
                <i class="sidenav-toggler-line"></i>
                <i class="sidenav-toggler-line"></i>
                <i class="sidenav-toggler-line"></i>
              </div>
            </a>
          </li>

        <li class="nav-item dropdown dropdown-hover mx-2">
          
          <div class="dropdown">
            <button class="btn bg-gradient-success dropdown-toggle " style="margin-bottom:0px" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
              Membership(s)
            </button>
            <ul class="dropdown-menu dropdown-menu-dark " aria-labelledby="dropdownMenuButton2">
              <li><a class="dropdown-item active" href="#">Memberships</a></li>
              <li><a class="dropdown-item" href="#">Membership 001</a></li>
              <li><a class="dropdown-item" href="#">Membership 002</a></li>
              {{-- <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Separated link</a></li> --}}
            </ul>
          </div>
        
        </li>
        <li class="nav-item mx-2">
          
            <button class="btn bg-gradient-danger" style="margin-bottom: 0px" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
              Cancel Membership
            </button>
            
          
        </li>
        
        
        
        
        </ul>
        
        
        
        </div>
        
        {{-- </div> --}}
        
        </nav>
      <!-- End Second Navbar -->




  <x-sidenav>
    <li class="nav-item">
      <a class="nav-link text-white " href="/memberships">
        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
          <i class="material-icons opacity-10">recent_actors</i>
        </div>
        <span class="nav-link-text text-sm ms-1">Show Memberships</span>
      </a>
    </li>
  
    <li class="nav-item">
      <a class="nav-link text-white " href="/dependants">
        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
          <i class="material-icons opacity-10">people</i>
        </div>
        <span class="nav-link-text text-sm ms-1">Show Dependants</span>
      </a>
    </li>
  
    <li class="nav-item">
      <a class="nav-link text-white " href="/add-member">
        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
          <i class="material-icons opacity-10">post_add</i>
        </div>
        <span class="nav-link-text text-sm ms-1">New Membership</span>
      </a>
    </li>
  
    <li class="nav-item">
      <a class="nav-link text-white " href="#pills-dependants">
        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
          <i class="material-icons opacity-10">person_add_alt</i>
        </div>
        <span class="nav-link-text text-sm ms-1" >Add Dependant</span>
      </a>
    </li>
  
  </x-sidenav>





  {{-- @include('layouts.sidenav-r') --}}
 
  <main class="main-content position-relative mt-2  h-100 mb-10 border-radius-lg ">

    

    <div class="container-fluid mb-4 py-4">

      <div class="row">
        <div class="col-12">
          <div class="card my-4">

            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-1">
              <div class=" bg-gradient-success shadow-success border-radius-lg pt-3 pb-2">

                <div class="nav-wrapper position-relative end-0 mx-2">
                  <ul class="nav nav-pills nav-pills-gba  nav-fill p-1" role="tablist">
                     <li class="nav-item">
                        <a class="nav-link mb-0 px-0 py-1 active" id="pills-info-tab" data-bs-toggle="tab" href="#pills-info" role="tab" aria-controls="info" aria-selected="true">
                          <span class="material-icons align-middle mb-1">
                            account_circle
                          </span>
                        Membership Info
                        </a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link mb-0 px-0 py-1" id="pills-dependants-tab" data-bs-toggle="tab" href="#pills-dependants" role="tab" aria-controls="dependants" aria-selected="false">
                          <span class="material-icons align-middle mb-1">
                            people
                          </span>
                          Dependants
                        </a>
                     </li>
                     <li class="nav-item">
                      <a class="nav-link mb-0 px-0 py-1" id="pills-Addresses-tab" data-bs-toggle="tab" href="#pills-Addresses" role="tab" aria-controls="Addresses" aria-selected="false">
                        <span class="material-icons align-middle mb-1">
                          house
                        </span>
                        Addresses
                      </a>
                   </li>
                   @canany(['transactions view'])
        
                   <li class="nav-item">
                    <a class="nav-link mb-0 px-0 py-1" id="pills-Payment-tab" data-bs-toggle="tab" href="#pills-Payment" role="tab" aria-controls="Payment" aria-selected="false">
                      <span class="material-icons align-middle mb-1">
                        history
                      </span>
                      Payment History
                    </a>
                 </li>

                 @endcanany
                   </ul>
               </div>

              </div>
            </div>
      


     <div class="card-body g-3 px-4 pb-2 pt-3">
      <div class="tab-content" id="pills-tabContent">
        
        
        <div class="tab-pane fade show active" id="pills-info" role="tabpanel" aria-labelledby="pills-info-tab">
          
          <div class="row">
            <div class="col-12">
              <div class="card my-4">
    
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-1">
                  <div class=" bg-gradient-dark shadow-dark border-radius-lg pt-3 pb-2">
                    <h6 class="text-white text-capitalize ps-3">Membership Details</h6>
                    <!--   <div class="form-check form-switch d-flex align-items-center mb-3">
                        <input class="form-check-input" type="checkbox" id="EngAfr" checked>
                        <label class="form-check-label mb-0 ms-3" for="EngAfr">English/Afrikaans</label>
                      </div> -->
                  </div>
                </div>
    
                <div class="card-body g-3 px-4 pb-2 pt-3">
    
    
                  <form {{ $dis }} method="POST" action="{{ route('add-member.store') }}" role="form" id="membershipForm" name="membershipForm" class="row g-3 ">
                    @csrf  
                    
                    <div class="col-md-3 mx-auto">
                      <div  class="input-group input-group-outline   mt-3 mb-0" >
                      
                        <input type="text" class="form-control" name="PenEmpNum" id="PenEmpNum"  value="{{ old('PenEmpNum') }}" placeholder="Pension/Force/Employee Number">
                      </div>
                      {{-- @error('PenEmpNum')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                </span>
                        @enderror --}}
                    </div>
                       <div class="form-check  form-switch col d-flex justify-content-center align-items-center mt-5 mb-0">
                    <label class="form-check-label mb-0 me-2" for="language">Language:</label>
                        <label class="form-check-label mb-0 me-6" for="language">English</label>
                      <input class="form-check-input" type="checkbox" id="language" name="language"  {{ ($membership->language_id=="2")? "checked" : "" }}>
                      <label class="form-check-label mb-0 ms-3" for="language">Afrikaans</label>
                    </div>
    
                      <hr class="dark horizontal mt-2 mb-0">
    
                      <div class="col-md-6">
                        <div  class="input-group input-group-outline  mt-3 mb-0" >
                        
                          <input type="text" class="form-control" name="Name" id="Name"  value="{{$membership->name}}" placeholder="Name" >
                        </div>
                        {{-- @error('Name')
                                  <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                  </span>
                          @enderror --}}
                      </div>
                    <div class="col-md-6">
                      <div  class="input-group input-group-outline  mt-3 mb-0" >
                      
                        <input type="text" class="form-control" name="Surname" id="Surname"  value="{{ $membership->surname }}" placeholder="Surname">
                      </div>
                      {{-- @error('Surname')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                </span>
                        @enderror --}}
                    </div>
                    <div class="col-md-6">
                      <div  class="input-group input-group-outline   mt-3 mb-0" >
                      
                        <input type="text" class="form-control" name="IDNumber" id="IDNumber"  value="{{ $membership->id_number }}" placeholder="Identity Number"  maxlength="13" size="13">
                      </div>
                      {{-- @error('IDNumber')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                </span>
                        @enderror --}}
                    </div>
    
                    <div class="col-md-6 mx-auto py-2" style=" margin-top: 25px;">
                      <div class="btn-group  col d-flex justify-content-center align-items-center mx-auto">
    
                        <input type="radio" class="btn-check form-check-input" name="radioGender" id="Male" value="M"  {{ ($membership->gender_id=="M")? "checked" : "" }} />
                        <label class="btn btn-secondary" for="Male">Male</label>
    
                        <input type="radio" class="btn-check form-check-input" name="radioGender" id="Female" value="F"{{ ($membership->gender_id=="F")? "checked" : "" }} />
                        <label class="btn btn-secondary" for="Female">Female</label>
    
                      </div>
                    </div>
    
                     <hr class="dark horizontal mt-2 mb-0">
    
            
    

    
                    <div class="col-md-6">
                      <div  class="input-group input-group-outline   mt-3 mb-0" >
                      
                        <input type="number" class="form-control" name="Telephone" id="Telephone"  value="{{ $membership->primary_contact_number }}" placeholder="Telephone (Cell)"  maxlength="10">
                      </div>
                      {{-- @error('Telephone')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                </span>
                        @enderror --}}
                    </div>
                    <div class="col-md-6">
                      <div  class="input-group input-group-outline   mt-3 mb-0" >
                      
                        <input type="number" class="form-control" name="WorkTelephone" id="WorkTelephone"  value="{{ $membership->secondaty_contact_number }}" placeholder="Telephone (Work)">
                      </div>
                      {{-- @error('WorkTelephone')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                </span>
                        @enderror --}}
                    </div>
    
                    <div class="col-md-8 mx-auto">
                      <div  class="input-group input-group-outline   mt-3 mb-0" >
                      
                        <input type="email" class="form-control" name="Email" id="Email"  value="{{ $membership->primary_e_mail_address}}" placeholder="Email">
                      </div>
                      {{-- @error('Email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                </span>
                        @enderror --}}
                    </div>
    
                      <div class="row col-md-12">
    
                        <div  class="col-md-6 py-2  pt-4  col d-flex justify-content-center align-items-center mx-auto">
                          <div style="white-space:nowrap;" class="px-4">
                         <label for="inputAddress" class="form-label">Date Of Birth</label>
                     
                            </div>
                         <div class="input-group input-group-outline ">
                           
                           <input type="text" onkeypress="return isNumberKey(event)" class="form-control" name="inputDay" id="inputDay" value="{{ dobBreakdown($membership->person->birth_date)->day }}" placeholder="DD" maxlength="2" size="2">
                           {{-- @error('inputDay')
                           <span class="invalid-feedback" role="alert">
                                   <strong>{{ $message }}</strong>
                           </span>
                          @enderror --}}
                          </div>
                         <span class="px-2">/</span>
                          <div class="input-group input-group-outline ">
                           
                           <input type="text" onkeypress="return isNumberKey(event)" class="form-control" name="inputMonth" id="inputMonth" value="{{ dobBreakdown($membership->person->birth_date)->month }}" placeholder="MM"  maxlength="2" size="2" >
                           {{-- @error('inputMonth')
                           <span class="invalid-feedback" role="alert">
                                   <strong>{{ $message }}</strong>
                           </span>
                          @enderror --}}
                          </div>
                         <span class="px-2">/</span>
                         <div class="input-group input-group-outline ">
                          
                           <input type="text" onkeypress="return isNumberKey(event)" class="form-control" name="inputYear" id="inputYear" value="{{ dobBreakdown($membership->person->birth_date)->year }}" placeholder="YYYY" maxlength="4" size="4">
                           {{-- @error('inputYear')
                           <span class="invalid-feedback" role="alert">
                                   <strong>{{ $message }}</strong>
                           </span>
                          @enderror --}}
                          </div>
                     
                     
                     
                                           </div>
    
                          <div  class="col-md-6 py-2 ">
                              <label class="form-label col d-flex justify-content-center mx-auto">Marital status</label>
                              <div class="btn-group  col d-flex justify-content-center align-items-center mx-auto">
    
                                  <input type="radio" class="btn-check form-check-input" name="marital_status" id="Married" value="1" {{ ($membership->person->married_status=="1")? "checked" : "" }}  />
                                  <label class="btn btn-secondary" for="Married">Married</label>
    
                                  <input type="radio" class="btn-check form-check-input" name="marital_status" id="Single" value="2"  {{ ($membership->person->married_status=="2")? "checked" : "" }}/>
                                  <label class="btn btn-secondary" for="Single">Single</label>
    
                                  <input type="radio" class="btn-check form-check-input" name="marital_status" id="Widowed" value="3" {{ ($membership->person->married_status=="3")? "checked" : "" }}/>
                                  <label class="btn btn-secondary" for="Widowed">Widowed</label>
    
                                  <input type="radio" class="btn-check form-check-input" name="marital_status" id="Divorced" value="4"{{ ($membership->person->married_status=="4")? "checked" : "" }}/>
                                  <label class="btn btn-secondary" for="Divorced">Divorced</label>
                                </div>
                                
                          </div>
    
                      </div>
    
                      <hr class="dark horizontal mt-2 mb-0">
    
                      <div class="col-md-12">
                        <div class="dropdown">
                          <select name="memtype" id="memtype" class="btn bg-gradient-secondary dropdown-toggle w-100 my-4 @error('Select Membership Type') is-invalid @enderror"  aria-label="Select Membership Type">
                            <option  disabled >Select Membership Type</span> </option>
                            @foreach ($memtypes as $memtype)
                           
                           <option {{$membership->bu_membership_type_id == $memtype->id  ? 'selected' : ''}} value="{{ $memtype->id }}">{{ $memtype->id }}. {{ $memtype->name }} - {{ $memtype->description }} - R{{ round($memtype->membership_fee,2) }}</option>
                            
                            @endforeach
                          </select>
                        </div>
                      </div>
                      
        
    
    
    
                    <div class="col-8 mx-auto">
                      <div class="text-center  d-flex justify-content-center align-items-center ">
                        <button  type="submit" class="btn bg-gradient-success w-100 my-4 mb-4"><i class="material-icons opacity-10 pe-2">save</i>Update</button>
                      </div>
                    </div>
     
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="tab-pane fade" id="pills-dependants" role="tabpanel" aria-labelledby="pills-dependants-tab">
          



          <div class="col-sm-12 my-4">
            <div class="card h-100 mt-4 mt-md-0">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-dark shadow-dark border-radius-lg pt-3 pb-2">
                <h6 class="text-white text-capitalize ps-3">Dependants</h6>
                </div>
                </div>
            <div class="card-body px-3 pt-4 pb-2">
            <div class="table-responsive p-0">
            <table class="table table-flush align-items-center justify-content-center  mb-4" id="datatable-dependant">
            <thead>
            <tr>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Name</th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">ID</th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Gender</th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Relationship Code</th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Date Of Birth</th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Age</th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2"></th>
            </tr>
            </thead>
            <tbody>
              @foreach ($dependants as $dependant )

            <tr>
            <td>
              
            <p class="text-sm font-weight-normal mb-0">{{$dependant->personDep->screen_name}}</p>
            </td>
            <td>
            <p class="text-sm font-weight-normal mb-0">{{$dependant->personDep->id_number}}</p>
            </td>
            <td>
            <p class="text-sm font-weight-normal mb-0">{{$dependant->personDep->gender_id }}</p>
            </td>
            <td>
            <p class="text-sm font-weight-normal mb-0">{{$dependant->person_relationship_id}}</p>
            </td>
            <td>
            <p class="text-sm font-weight-normal mb-0">{{substr($dependant->personDep->birth_date,0,10)}}</p>
            </td>
            @php
              $age = ageFromDOB($dependant->personDep->birth_date); 
            @endphp
            <td class="text-sm fw-bolder my-1 pt-2 px-2 badge badge-sm {{ changeAgeBackground($age) }}">
              {{$age}}
              </td>
              <td>
                <a class="btn btn-link text-danger text-gradient mx-3 mb-0" href="/remove-dependant/{{ $dependant->secondary_person_id }}"><i class="material-icons text-sm me-2">highlight_off</i>Remove</a>
              </td>
            </tr>
              
            @endforeach
            
            </tbody>
            </table>
            </div>
            </div>
            </div>
            </div>


            <!-- Add Dependant Block -->


            <div class="card mt-5 mb-2" id="add-dependant">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-dark shadow-dark border-radius-lg pt-3 pb-2">
                <h6 class="text-white text-capitalize ps-3">Add Dependant</h6>
                </div>
                </div>
                <form method="POST" id="addDependant" action="{{ route('add-dependant.store') }}"  autocomplete="off" >
                  @csrf 
              <div class="card-body pt-0 mt-4 mb-3">
              <div class="row">
                <div class="col-6 col-sm-6">
                  <div  class="input-group input-group-outline  @error('Name') is-invalid focused is-focused  @enderror mt-3 mb-0" >
                              
                    <input type="text" class="form-control" name="Name" id="Name"  value="{{ old('Name') }}" placeholder="Name">
                  </div>
                  @error('DepName')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                            </span>
                    @enderror
                </div>
                <div class="col-12 col-sm-6">
                  <div  class="input-group input-group-outline  @error('Surname') is-invalid focused is-focused  @enderror mt-3 mb-0" >
                              
                    <input type="text" class="form-control" name="Surname" id="Surname"  value="{{ old('Surname') }}" placeholder="Surname">
                  </div>
                  @error('DepSurname')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                            </span>
                    @enderror
                </div>
              </div>
              
              <div class="row mt-3">
                <div class="col-6 col-sm-6">
                  <div id="IDNumberDepDiv" class="input-group input-group-outline  @error('IDNumberDep') is-invalid focused is-focused  @enderror mt-3 mb-0" >
                            
                    <input type="text" class="form-control" name="IDNumberDep" id="IDNumberDep"  value="{{ old('IDNumberDep') }}" placeholder="Identity Number"  maxlength="13" size="13" onchange="getDOBDep(this.value)">
                  </div>
                  <span class="invalid-feedback" role="alert" id="error"></span>
                  @error('IDNumberDep')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                            </span>
                    @enderror
                </div>
                <div class="col-6 col-sm-6 pt-3 mt-sm-0" style=" margin-top: 25px;">
                  <div class="btn-group  col d-flex justify-content-center align-items-center mx-auto">
          
                    <input type="radio" class="btn-check form-check-input" name="radioGenderDep" id="MaleDep" value="M"  checked  />
                    <label class="btn btn-secondary" for="MaleDep">Male</label>
          
                    <input type="radio" class="btn-check form-check-input" name="radioGenderDep" id="FemaleDep" value="F"  />
                    <label class="btn btn-secondary" for="FemaleDep">Female</label>
          
                  </div>
                </div>
                </div>
              
              <div class="row mt-0">
                <div class="col-12 col-sm-6">
                  <div  class=" py-2  pt-4  col d-flex justify-content-center align-items-center mx-auto">
                    <div style="white-space:nowrap;" class="px-4">
                   <label class="form-label">Date Of Birth</label>
               
                      </div>
                   <div id="inputDayDepDiv" class="input-group input-group-outline @error('inputDayDep') is-invalid @enderror">
                     
                     <input type="text" onkeypress="return isNumberKey(event)" class="form-control" name="inputDayDep" id="inputDayDep" value="{{ old('inputDayDep') }}" placeholder="DD" maxlength="2" size="2">
                     @error('inputDayDep')
                     <span class="invalid-feedback" role="alert">
                             <strong>{{ $message }}</strong>
                     </span>
                    @enderror
                    </div>
                   <span class="px-2">/</span>
                    <div id="inputMonthDepDiv" class="input-group input-group-outline @error('inputMonthDep') is-invalid @enderror">
                     
                     <input type="text" onkeypress="return isNumberKey(event)" class="form-control" name="inputMonthDep" id="inputMonthDep" value="{{ old('inputMonthDep') }}" placeholder="MM" maxlength="2" size="2" >
                     @error('inputMonthDep')
                     <span class="invalid-feedback" role="alert">
                             <strong>{{ $message }}</strong>
                     </span>
                    @enderror
                    </div>
                   <span class="px-2">/</span>
                   <div id="inputYearDepDiv" class="input-group input-group-outline @error('inputYearDep') is-invalid @enderror">
                     
                     <input type="text" onkeypress="return isNumberKey(event)" class="form-control" name="inputYearDep" id="inputYearDep" value="{{ old('inputYearDep') }}" placeholder="YYYY" maxlength="4" size="4">
                     @error('inputYearDep')
                     <span class="invalid-feedback" role="alert">
                             <strong>{{ $message }}</strong>
                     </span>
                    @enderror
                    </div>
               
                    <input hidden type="text"  class="form-control" name="mainMemberId" id="mainMemberId" value="{{ $membership->person_id }}">
                     
               
               
                                     </div>
                </div>

              <div class="col-6" style=" margin-top: 25px;">
                <div class="btn-group  col d-flex justify-content-center align-items-center mx-auto">
          
                  <input type="radio" class="btn-check form-check-input" name="radioRelationCode" id="Spouse" value="1" checked  />
                  <label class="btn btn-secondary" for="Spouse">1 - Wife / Husband</label>
        
                  <input type="radio" class="btn-check form-check-input" name="radioRelationCode" id="Child" value="2"  />
                  <label class="btn btn-secondary" for="Child">2 - Child</label>
        
                </div>
              </div>
              
               </div>
              <div class="row mt-4">
              <div class="col-6 mx-auto">
                                <div class="text-center  d-flex justify-content-center align-items-center ">
                                  <button type="submit" class="btn bg-gradient-success w-100 my-4 mb-4"><i class="material-icons opacity-10">add</i>   Add</button>
                                </div>
                              </div>
              </div>
              
              </div>

                </form>

              </div>


              <!-- End Add Dependant Block -->


        </div>






        <div class="tab-pane fade" id="pills-Addresses" role="tabpanel" aria-labelledby="pills-Addresses-tab">



          <div class="row mt-4 mb-4">
            <div class="col-lg-7 col-12">
            <div class="card">
            <div class="card-header pb-0 px-3">
            <h6 class="mb-0">Addresses</h6>
            </div>
            <div class="card-body pt-4 p-3">
            <ul class="list-group">

            

          @foreach ($addresses as $address)

            <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
              <div class="d-flex flex-column">
              <h6 class="mb-3 text-sm">Home</h6>
              <span class="mb-2 text-xs">Address Line 1: <span class="text-dark font-weight-bold ms-sm-2">{{ $address->line1 }}</span></span>
              <span class="mb-2 text-xs">Town/Suburb: <span class="text-dark ms-sm-2 font-weight-bold">{{ $address->suburb }}</span></span>
              <span class="mb-2 text-xs">City: <span class="text-dark ms-sm-2 font-weight-bold">{{ $address->city }}</span></span>
              <span class="mb-2 text-xs">Province: <span class="text-dark ms-sm-2 font-weight-bold">{{ $address->province }}</span></span>
              <span class="text-xs">Postal Code: <span class="text-dark ms-sm-2 font-weight-bold">{{ $address->ZIP }}</span></span>
  
              </div>
              <div class="ms-auto text-end">
              <a class="btn btn-link text-success text-gradient px-3 mb-0" href="#"><i class="material-icons text-sm me-2">location_on</i>View On Map</a>
              <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="#"><i class="material-icons text-sm me-2">delete</i>Delete</a>
              </div>
              </li>
          @endforeach
           
            
            </ul>
            </div>
            </div>
            </div>



            <div class="col-lg-5 col-12 mt-md-0 mt-4">
              <div class="card h-100 mb-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                  <div class="bg-gradient-dark shadow-dark border-radius-lg pt-3 pb-2">
                  <h6 class="text-white text-capitalize ps-3"><i class="material-icons me-2 text-lg">add_location_alt</i>Add Address</h6>
                  </div>
                  </div>
                  {{-- <form method="POST" id="addAddress" action="{{ route('address.store') }}"  autocomplete="off" > --}}
                    @csrf 
              <div class="card-body pt-4 p-3">
             


                
                  <div class="row mt-3">
                  <div class="col">
                    <div  class="input-group input-group-outline  @error('Line1') is-invalid focused is-focused  @enderror  mb-0" >
                                
                      <input type="text" class="form-control" name="Line1" id="Line1"  value="{{ old('Line1') }}" >
                    </div>
                    @error('Line1')
                              <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                              </span>
                      @enderror
                  </div>
                  </div>
                  <div class="row mt-3">
                  <div class="col-6 col-sm-6">
                    <div  class="input-group input-group-outline  @error('Line2') is-invalid focused is-focused  @enderror  mb-0" >
                                  
                      <input type="text" class="form-control" name="Line2" id="Line2"  value="{{ old('Line2') }}" placeholder="Address Line 2">
                    </div>
                    @error('Line2')
                              <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                              </span>
                      @enderror
                  </div>
                  <div class="col-6 col-sm-6">
                    <div  class="input-group input-group-outline  @error('TownSuburb') is-invalid focused is-focused  @enderror  mb-0" >
                                
                      <input type="text" class="form-control" name="TownSuburb" id="TownSuburb"  value="{{ old('TownSuburb') }}" placeholder="Town/Suburb">
                    </div>
                    @error('TownSuburb')
                              <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                              </span>
                      @enderror
                  </div>
                  </div>
                  <div class="row mt-3">
                  <div class="col-12 col-sm-6">
                    <div  class="input-group input-group-outline  @error('City') is-invalid focused is-focused  @enderror mt-3 mb-0" >
                                  
                      <input type="text" class="form-control" name="City" id="City"  value="{{ old('City') }}" placeholder="City">
                    </div>
                    @error('City')
                              <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                              </span>
                      @enderror
                  </div>
                  <div class="col-6 col-sm-4 mt-3 mt-sm-0">
                    <div  class="input-group input-group-outline  @error('Province') is-invalid focused is-focused  @enderror mt-3 mb-0" >
                                  
                      <input type="text" class="form-control" name="Province" id="Province"  value="{{ old('Province') }}" placeholder="Province">
                    </div>
                    @error('Province')
                              <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                              </span>
                      @enderror
                  </div>
                  <div class="col-6 col-sm-2 mt-3 mt-sm-0">
                    <div  class="input-group input-group-outline  @error('PostalCode') is-invalid focused is-focused  @enderror mt-3 mb-0" >
                                  
                      <input type="text" class="form-control" name="PostalCode" id="PostalCode"  value="{{ old('PostalCode') }}" placeholder="Postal Code">
                    </div>
                    @error('PostalCode')
                              <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                              </span>
                      @enderror
                  </div>
                  </div>
                  <div class="row">

                    <div class="col-6 col-sm-4 mt-3 mt-sm-0 mx-auto">
                      <div  class="input-group input-group-outline  @error('Country') is-invalid focused is-focused  @enderror mt-3 mb-0" >
                                    
                        <input type="text" class="form-control" name="Country" id="Country"  value="{{ old('Province') }}" placeholder="Country">
                      </div>
                      @error('Country')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>
                   
                    </div>
                  <div class="button-row d-flex mt-4">
                  
                  <button class="btn bg-gradient-success mx-auto mb-0 w-100" type="button" title="Add New Address">Add</button>
                  </div>
                  





              </div>
              </form>
              </div>
              </div>




        </div>




      
          







      </div>
     </div>

          </div>
        </div>
      </div>
      </div>


      @include('components.footer')



    </div>
  </main>


</x-app-layout>