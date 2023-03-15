<!-- Navbar -->
<nav class="navbar navbar-expand-lg blur w-100  top-0 z-index-3 shadow-none  mt-0 py-2 start-0 end-0 mx-auto  fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 text-white"
            href="../../../pages/dashboards/analytics.html">
            <a href="/" target="_blank">
                <img src="/img/GBA-LOGO-white2.png" width="80" height="30" class="navbar-brand-img h-100"
                    alt="main_logo">
                <!-- <span class="ms-1 fw-bold text-white" style="text-align: center">GROUP BURIAL<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ASSOCIATION</span>   -->
            </a>
        </a>


        {{-- <div class="form-check form-switch ps-4 ms-auto my-auto">
        <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarMinimize" onclick="navbarMinimize(this)">
       
      </div> --}}

        <div class="sidenav-toggler sidenav-toggler-inner d-xl-block d-none px-2 ">
            <a href="javascript:;" onclick="navbarMinimize(this)" class="nav-link text-body p-0 "
                data-bs-toggle="tooltip" data-bs-placement="bottom" title="Show/Hide Sidebar">
                <div class="sidenav-toggler-inner">
                    <i class="sidenav-toggler-line"></i>
                    <i class="sidenav-toggler-line"></i>
                    <i class="sidenav-toggler-line"></i>
                </div>
            </a>
        </div>




        <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse"
            data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon mt-2">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
            </span>
        </button>

        <div class="collapse navbar-collapse w-100 pt-3 pb-2 py-lg-0" id="navigation">
            <ul class="navbar-nav navbar-nav-hover mx-auto">
                @canany(['permission edit', 'permission delete'])
                    <li class="nav-item dropdown dropdown-hover mx-2">
                        <a href="{{ route('admin.home') }}"
                            class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center"
                            aria-expanded="false">
                            Home

                        </a>

                    </li>
                @endcanany

                <!--    This is the drop down with more sub items to the right
    
    
    <li class="nav-item dropdown dropdown-hover mx-2">
    <a role="button" class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center" id="dropdownMenuAccount" data-bs-toggle="dropdown" aria-expanded="false">
    Authentication
    <img src=" /img/down-arrow-white.svg " alt="down-arrow" class="arrow ms-1 d-lg-block d-none">
    <img src="/img/down-arrow-dark.svg" alt="down-arrow" class="arrow ms-1 d-lg-none d-block">
    </a>
    <div class="dropdown-menu dropdown-menu-animation dropdown-md border-radius-xl p-3 mt-0 mt-lg-3" aria-labelledby="dropdownMenuAccount">
    <div class="d-none d-lg-flex">
    <div class="col-12 ps-0 d-flex justify-content-center flex-column">
    <ul class="list-group">
    <li class="nav-item dropdown dropdown-hover dropdown-subitem list-group-item border-0 p-0">
    <a class="dropdown-item border-radius-md ps-3 d-flex align-items-center mb-1 text-dark" id="dropdownSignIn">
    <i class="material-icons opacity-6 me-2 text-md">login</i>
    <span>Sign In</span>
    
    </a>
    
    </li>
    
    <li class="nav-item dropdown dropdown-hover dropdown-subitem list-group-item border-0 p-0">
    <a class="dropdown-item border-radius-md ps-3 d-flex align-items-center mb-1 text-dark" id="dropdownSignUp">
    <i class="material-icons opacity-6 me-2 text-md">assignment</i>
    <span>Sign Up</span>
    <img src="/img/down-arrow.svg" alt="down-arrow" class="arrow ms-auto">
    </a>
    <div class="dropdown-menu mt-0 py-3 px-2" aria-labelledby="dropdownSignUp">
    <a class="dropdown-item ps-3 border-radius-md mb-1" href="../../../pages/authentication/signup/basic.html">
    <span>Basic</span>
    </a>
    <a class="dropdown-item ps-3 border-radius-md mb-1" href="../../../pages/authentication/signup/cover.html">
    <span>Cover</span>
    </a>
    <a class="dropdown-item ps-3 border-radius-md" href="../../../pages/authentication/signup/illustration.html">
    <span>Illustration</span>
    </a>
    </div>
    </li>
    <li class="nav-item dropdown dropdown-hover dropdown-subitem list-group-item border-0 p-0">
    <a class="dropdown-item border-radius-md ps-3 d-flex align-items-center mb-1 text-dark" id="dropdownPasswordReset">
    <i class="material-icons opacity-6 me-2 text-md">restart_alt</i>
    <span>Reset Password</span>
    <img src="/img/down-arrow.svg" alt="down-arrow" class="arrow ms-auto">
    </a>
    <div class="dropdown-menu mt-0 py-3 px-2" aria-labelledby="dropdownPasswordReset">
    <a class="dropdown-item ps-3 border-radius-md mb-1" href="../../../pages/authentication/reset/basic.html">
    <span>Basic</span>
    </a>
    <a class="dropdown-item ps-3 border-radius-md mb-1" href="../../../pages/authentication/reset/cover.html">
    <span>Cover</span>
    </a>
    <a class="dropdown-item ps-3 border-radius-md" href="../../../pages/authentication/reset/illustration.html">
    <span>Illustration</span>
    </a>
    </div>
    </li>
    <li class="nav-item dropdown dropdown-hover dropdown-subitem list-group-item border-0 p-0">
    <a class="dropdown-item border-radius-md ps-3 d-flex align-items-center mb-1 text-dark" id="dropdownLock">
    <i class="material-icons opacity-6 me-2 text-md">lock</i>
    <span>Lock</span>
    <img src="/img/down-arrow.svg" alt="down-arrow" class="arrow ms-auto">
    </a>
    <div class="dropdown-menu mt-0 py-3 px-2" aria-labelledby="dropdownLock">
    <a class="dropdown-item ps-3 border-radius-md mb-1" href="../../../pages/authentication/lock/basic.html">
    <span>Basic</span>
    </a>
    <a class="dropdown-item ps-3 border-radius-md mb-1" href="../../../pages/authentication/lock/cover.html">
    <span>Cover</span>
    </a>
    <a class="dropdown-item ps-3 border-radius-md" href="../../../pages/authentication/lock/illustration.html">
    <span>Illustration</span>
    </a>
    </div>
    </li>
    <li class="nav-item dropdown dropdown-hover dropdown-subitem list-group-item border-0 p-0">
    <a class="dropdown-item border-radius-md ps-3 d-flex align-items-center mb-1 text-dark" id="dropdown2fa">
    <i class="material-icons opacity-6 me-2 text-md">admin_panel_settings</i>
    <span>2-Step Verification</span>
    <img src="/img/down-arrow.svg" alt="down-arrow" class="arrow ms-auto">
    </a>
    <div class="dropdown-menu mt-0 py-3 px-2" aria-labelledby="dropdown2fa">
    <a class="dropdown-item ps-3 border-radius-md mb-1" href="../../../pages/authentication/verification/basic.html">
    <span>Basic</span>
    </a>
    <a class="dropdown-item ps-3 border-radius-md mb-1" href="../../../pages/authentication/verification/cover.html">
    <span>Cover</span>
    </a>
    <a class="dropdown-item ps-3 border-radius-md" href="../../../pages/authentication/verification/illustration.html">
    <span>Illustration</span>
    </a>
    </div>
    </li>
    <li class="nav-item dropdown dropdown-hover dropdown-subitem list-group-item border-0 p-0">
    <a class="dropdown-item border-radius-md ps-3 d-flex align-items-center mb-1 text-dark" id="dropdownError">
    <i class="material-icons opacity-6 me-2 text-md">warning</i>
    <span>Error</span>
    <img src="/img/down-arrow.svg" alt="down-arrow" class="arrow ms-auto">
    </a>
    <div class="dropdown-menu mt-0 py-3 px-2" aria-labelledby="dropdownError">
    <a class="dropdown-item ps-3 border-radius-md mb-1" href="../../../pages/authentication/error/404.html">
    <span>404</span>
    </a>
    <a class="dropdown-item ps-3 border-radius-md" href="../../../pages/authentication/error/500.html">
    <span>500</span>
    </a>
    </div>
    </li>
    </ul>
    </div>
    </div>
    <div class="row d-lg-none">
    <div class="col-12 d-flex justify-content-center flex-column">
    <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-0">
    <i class="material-icons opacity-6 me-2 text-md">login</i>
    Sign In
    </h6>
    <a href="../../../pages/authentication/signin/basic.html" class="dropdown-item border-radius-md ps-4">
    Basic
    </a>
    <a href="../../../pages/authentication/signin/cover.html" class="dropdown-item border-radius-md ps-4">
    Cover
    </a>
    <a href="../../../pages/authentication/signin/illustration.html" class="dropdown-item border-radius-md ps-4">
    Illustration
    </a>
    <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center mt-3 px-0">
    <i class="material-icons opacity-6 me-2 text-md">assignment</i>
    Sign Up
    </h6>
    <a href="../../../pages/authentication/signup/basic.html" class="dropdown-item border-radius-md ps-4">
    Basic
    </a>
    <a href="../../../pages/authentication/signup/cover.html" class="dropdown-item border-radius-md ps-4">
    Cover
    </a>
    <a href="../../../pages/authentication/signup/illustration.html" class="dropdown-item border-radius-md ps-4">
    Illustration
    </a>
    <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center mt-3 px-0">
    <i class="material-icons opacity-6 me-2 text-md">restart_alt</i>
    Reset Password
    </h6>
    <a href="../../../pages/authentication/reset/basic.html" class="dropdown-item border-radius-md ps-4">
    Basic
    </a>
    <a href="../../../pages/authentication/reset/cover.html" class="dropdown-item border-radius-md ps-4">
    Cover
    </a>
    <a href="../../../pages/authentication/reset/illustration.html" class="dropdown-item border-radius-md ps-4">
    Illustation
    </a>
    <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center mt-3 px-0">
    <i class="material-icons opacity-6 me-2 text-md">lock</i>
    Lock
    </h6>
    <a href="../../../pages/authentication/lock/basic.html" class="dropdown-item border-radius-md ps-4">
    Basic
    </a>
    <a href="../../../pages/authentication/lock/cover.html" class="dropdown-item border-radius-md ps-4">
    Cover
    </a>
    <a href="../../../pages/authentication/lock/illustration.html" class="dropdown-item border-radius-md ps-4">
    Illustration
    </a>
    <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center mt-3 px-0">
    <i class="material-icons opacity-6 me-2 text-md">admin_panel_settings</i>
    2-Step Verification
    </h6>
    <a href="../../../pages/authentication/verification/basic.html" class="dropdown-item border-radius-md ps-4">
    Basic
    </a>
    <a href="../../../pages/authentication/verification/cover.html" class="dropdown-item border-radius-md ps-4">
    Cover
    </a>
    <a href="../../../pages/authentication/verification/illustration.html" class="dropdown-item border-radius-md ps-4">
    Illustration
    </a>
    <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center mt-3 px-0">
    <i class="material-icons opacity-6 me-2 text-md">warning</i>
    Error
    </h6>
    <a href="../../../pages/authentication/error/404.html" class="dropdown-item border-radius-md ps-4">
    404
    </a>
    <a href="../../../pages/authentication/error/500.html" class="dropdown-item border-radius-md ps-4">
    500
    </a>
    </div>
    </div>
    </div>
    </li>
        -->


                <li class="nav-item dropdown dropdown-hover mx-2">
                    <a role="button" href="/memberships"
                        class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center"
                        id="dropdownMenuBlocks" data-bs-toggle="dropdown" aria-expanded="false">
                        Memberships
                        <img src="/img/down-arrow-dark.svg" alt="down-arrow" class="arrow ms-1 d-lg-block d-none">
                        <img src="/img/down-arrow-dark.svg" alt="down-arrow" class="arrow ms-1 d-lg-none d-block">
                    </a>
                    <div class="dropdown-menu dropdown-menu-animation dropdown-md dropdown-md-responsive p-3 border-radius-lg mt-0 mt-lg-3"
                        aria-labelledby="dropdownMenuBlocks">
                        <div class="d-none d-lg-block">
                            <ul class="list-group">
                                <li
                                    class="nav-item dropdown dropdown-hover dropdown-subitem list-group-item border-0 p-0">
                                    <a class="dropdown-item border-radius-md mb-2" href="/add-member">
                                        <div class="d-flex align-items-center text-dark">
                                            <i class="material-icons opacity-6 me-2 text-md">person_add</i>
                                            Add Member
                                        </div>
                                    </a>
                                </li>
                                <li
                                    class="nav-item dropdown dropdown-hover dropdown-subitem list-group-item border-0 p-0">
                                    <a class="dropdown-item border-radius-md mb-2" href="/memberships">
                                        <div class="d-flex align-items-center text-dark">
                                            <i class="material-icons opacity-6 me-2 text-md">view_list</i>
                                            All Memberships
                                        </div>
                                    </a>
                                </li>

                            </ul>
                        </div>

                        <div class="row d-lg-none">
                            <div class="col-md-12">
                                <a class="py-2 ps-3 border-radius-md" href="/add-member">
                                    <div class="d-flex align-items-center text-dark">
                                        <i class="material-icons opacity-6 me-2 text-md">person_add</i>
                                        Add Member
                                    </div>
                                </a>
                                <a class="py-2 ps-3 border-radius-md" href="/memberships">
                                    <div class="d-flex align-items-center text-dark">
                                        <i class="material-icons opacity-6 me-2 text-md">view_list</i>
                                        All Memberships
                                    </div>
                                </a>

                            </div>
                        </div>


                    </div>
                </li>



                <li class="nav-item dropdown dropdown-hover mx-2" data-title="Dependants"
                    data-intro="View/Edit All Dependants Here." data-step='5'>
                    <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center"
                        href="/dependants">
                        Dependants

                    </a>

                </li>

                <li class="nav-item dropdown dropdown-hover mx-2" data-title="Presents"
                    data-intro="View/Edit All Presents Here." data-step='5'>
                    <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center"
                        href="/presents">
                        Presents
                    </a>
                </li>


                <li class="nav-item dropdown dropdown-hover mx-2">
                    <a role="button"
                        class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center"
                        id="dropdownMenuDocs" data-bs-toggle="dropdown" aria-expanded="false">
                        Settings
                        <img src=" /img/down-arrow-dark.svg " alt="down-arrow" class="arrow ms-1 d-lg-block d-none">
                        <img src="/img/down-arrow-dark.svg" alt="down-arrow" class="arrow ms-1 d-lg-none d-block">
                    </a>
                    <div class="dropdown-menu dropdown-menu-animation dropdown-lg mt-0 mt-lg-3 p-3 border-radius-lg"
                        aria-labelledby="dropdownMenuDocs">
                        <div class="d-none d-lg-block">
                            <ul class="list-group">

                                <li class="nav-item list-group-item border-0 p-0">
                                    <a class="dropdown-item border-radius-md text-dark" href="#">
                                        <div class="d-flex align-items-center">
                                            <i class="material-icons opacity-6 me-2 text-md">grading</i>
                                            <h6
                                                class="dropdown-header text-dark font-weight-bolder d-flex align-items-center p-0 mb-0">
                                                Membership Types</h6>
                                        </div>
                                        <span class="text-sm opacity-8 ps-4">See From/To Age, Premium, Effective date,
                                            etc.</span>
                                    </a>
                                </li>
                                <li class="nav-item list-group-item border-0 p-0">
                                    <a class="dropdown-item border-radius-md text-dark" href="#">
                                        <div class="d-flex align-items-center">
                                            <i class="material-icons opacity-6 me-2 text-md">apps</i>
                                            <h6
                                                class="dropdown-header text-dark font-weight-bolder d-flex align-items-center p-0 mb-0">
                                                Placeholder</h6>
                                        </div>
                                        <span class="text-sm opacity-8 ps-4">Example</span>
                                    </a>
                                </li>
                                <li class="nav-item list-group-item border-0 p-0">
                                    <a class="dropdown-item border-radius-md text-dark" href="#">
                                        <div class="d-flex align-items-center">
                                            <i class="material-icons opacity-6 me-2 text-md">extension</i>
                                            <h6
                                                class="dropdown-header text-dark font-weight-bolder d-flex align-items-center p-0 mb-0">
                                                Placeholder</h6>
                                        </div>
                                        <span class="text-sm opacity-8 ps-4">Example</span>
                                    </a>
                                </li>
                                <li class="nav-item list-group-item border-0 p-0">
                                    <a class="dropdown-item border-radius-md text-dark" href="#">
                                        <div class="d-flex align-items-center">
                                            <i class="material-icons opacity-6 me-2 text-md">swipe</i>
                                            <h6
                                                class="dropdown-header text-dark font-weight-bolder d-flex align-items-center p-0 mb-0">
                                                Placeholder</h6>
                                        </div>
                                        <span class="text-sm opacity-8 ps-4">Example</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="row d-lg-none">
                            <div class="col-md-12 g-0">

                                <a class="dropdown-item border-radius-md text-dark" href="#">
                                    <div class="d-flex align-items-center">
                                        <i class="material-icons opacity-6 me-2 text-md">grading</i>
                                        <h6
                                            class="dropdown-header text-dark font-weight-bolder d-flex align-items-center p-0">
                                            Membership Types</h6>
                                    </div>
                                    <span class="text-sm ps-4">See From/To Age, Premium, Effective date, etc.</span>
                                </a>
                                <a class="dropdown-item border-radius-md text-dark" href="#">
                                    <div class="d-flex align-items-center">
                                        <i class="material-icons opacity-6 me-2 text-md">apps</i>
                                        <h6
                                            class="dropdown-header text-dark font-weight-bolder d-flex align-items-center p-0">
                                            Placeholder</h6>
                                    </div>
                                    <span class="text-sm ps-4">Example</span>
                                </a>
                                <a class="dropdown-item border-radius-md text-dark" href="#">
                                    <div class="d-flex align-items-center">
                                        <i class="material-icons opacity-6 me-2 text-md">extension</i>
                                        <h6
                                            class="dropdown-header text-dark font-weight-bolder d-flex align-items-center p-0">
                                            Placeholder</h6>
                                        <span class="text-sm ps-4">Example</span>
                                    </div>
                                </a>
                                <a class="dropdown-item border-radius-md text-dark" href="#">
                                    <div class="d-flex align-items-center">
                                        <i class="material-icons opacity-6 me-2 text-md">swipe</i>
                                        <h6
                                            class="dropdown-header text-dark font-weight-bolder d-flex align-items-center p-0">
                                            Placeholder</h6>
                                        <span class="text-sm ps-4">Example</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </li>



                {{-- ADMIN SETTINGS --}}

                @canany(['permission edit', 'permission delete'])
                    <li class="nav-item dropdown dropdown-hover mx-2">
                        <a role="button"
                            class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center"
                            id="dropdownMenuDocs" data-bs-toggle="dropdown" aria-expanded="false">
                            Admin-Settings
                            <img src=" /img/down-arrow-dark.svg " alt="down-arrow" class="arrow ms-1 d-lg-block d-none">
                            <img src="/img/down-arrow-dark.svg" alt="down-arrow" class="arrow ms-1 d-lg-none d-block">
                        </a>
                        <div class="dropdown-menu dropdown-menu-animation dropdown-lg mt-0 mt-lg-3 p-3 border-radius-lg"
                            aria-labelledby="dropdownMenuDocs">
                            <div class="d-none d-lg-block">
                                <ul class="list-group">

                                    {{-- User Link --}}
                                    @canany(['user edit', 'user delete'])
                                        <li class="nav-item list-group-item border-0 p-0">
                                            <a class="dropdown-item border-radius-md text-dark"
                                                href="{{ route('user.index') }}">
                                                <div class="d-flex align-items-center">
                                                    <i class="material-icons opacity-6 me-2 text-md">manage_accounts</i>
                                                    <h6
                                                        class="dropdown-header text-dark font-weight-bolder d-flex align-items-center p-0 mb-0">
                                                        Users</h6>
                                                </div>
                                                <span class="text-sm opacity-8 ps-4">Manage all users</span>
                                            </a>
                                        </li>
                                    @endcanany

                                    {{-- Roles Link --}}
                                    @canany(['role edit', 'role delete'])
                                        <li class="nav-item list-group-item border-0 p-0">
                                            <a class="dropdown-item border-radius-md text-dark"
                                                href="{{ route('role.index') }}">
                                                <div class="d-flex align-items-center">
                                                    <i class="material-icons opacity-6 me-2 text-md">lock</i>
                                                    <h6
                                                        class="dropdown-header text-dark font-weight-bolder d-flex align-items-center p-0 mb-0">
                                                        Roles</h6>
                                                </div>
                                                <span class="text-sm opacity-8 ps-4">Add/Edit Roles</span>
                                            </a>
                                        </li>
                                    @endcanany


                                    {{-- Permissions Link --}}
                                    @canany(['permission edit', 'permission delete'])
                                        <li class="nav-item list-group-item border-0 p-0">
                                            <a class="dropdown-item border-radius-md text-dark"
                                                href="{{ route('permission.index') }}">
                                                <div class="d-flex align-items-center">
                                                    <i class="material-icons opacity-6 me-2 text-md">admin_panel_settings</i>
                                                    <h6
                                                        class="dropdown-header text-dark font-weight-bolder d-flex align-items-center p-0 mb-0">
                                                        Permissions</h6>
                                                </div>
                                                <span class="text-sm opacity-8 ps-4">Request/Grant Permission to
                                                    view/edit/delete</span>
                                            </a>
                                        </li>
                                    @endcanany

                                </ul>
                            </div>
                            <div class="row d-lg-none">
                                <div class="col-md-12 g-0">

                                    {{-- Mobile User Link --}}
                                    @canany(['user edit', 'user delete'])
                                        <a class="dropdown-item border-radius-md text-dark" href="{{ route('user.index') }}">
                                            <div class="d-flex align-items-center">
                                                <i class="material-icons opacity-6 me-2 text-md">grading</i>
                                                <h6
                                                    class="dropdown-header text-dark font-weight-bolder d-flex align-items-center p-0">
                                                    Users</h6>
                                            </div>
                                            <span class="text-sm ps-4">Manage Users</span>
                                        </a>
                                    @endcanany
                                    {{-- Mobile Roles Link --}}
                                    @canany(['role edit', 'role delete'])
                                        <a class="dropdown-item border-radius-md text-dark" href="{{ route('role.index') }}">
                                            <div class="d-flex align-items-center">
                                                <i class="material-icons opacity-6 me-2 text-md">article</i>
                                                <h6
                                                    class="dropdown-header text-dark font-weight-bolder d-flex align-items-center p-0">
                                                    Roles</h6>
                                            </div>
                                            <span class="text-sm ps-4">Add/Edit Roles</span>
                                        </a>
                                    @endcanany

                                    {{-- Mobile Permissions Link --}}
                                    @canany(['permission edit', 'permission delete'])
                                        <a class="dropdown-item border-radius-md text-dark"
                                            href="{{ route('permission.index') }}">
                                            <div class="d-flex align-items-center">
                                                <i class="material-icons opacity-6 me-2 text-md">article</i>
                                                <h6
                                                    class="dropdown-header text-dark font-weight-bolder d-flex align-items-center p-0">
                                                    Permissions</h6>
                                            </div>
                                            <span class="text-sm ps-4">Request Permission to view/edit/delete</span>
                                        </a>
                                    @endcanany

                                </div>
                            </div>
                        </div>
                    </li>




                @endcanany


            </ul>

            <div class="nav-item dropdown dropdown-hover mx-2">
                <i class="fa fa-question-circle" style="font-size:22px"></i>
                <div class="dropdown-menu dropdown-menu-end dropdown-md dropdown-md-responsive p-3 border-radius-lg mt-0 mt-lg-3"
                    aria-labelledby="dropdownMenuUser">
                    <div class="d-none d-lg-block">
                        <ul class="list-group">

                            <li class="nav-item dropdown dropdown-hover dropdown-subitem list-group-item border-0 p-0">

                                <a class="dropdown-item border-radius-md mb-2" href="#">
                                    <div class="d-flex align-items-center text-dark">
                                        <i class="material-icons opacity-6 me-2 text-md">manage_accounts</i>
                                        {{ __('Help Option 1') }}
                                    </div>
                                </a>


                            </li>



                            <li class="nav-item dropdown dropdown-hover dropdown-subitem list-group-item border-0 p-0">
                                <a class="dropdown-item border-radius-md mb-2" href="#">
                                    <div class="d-flex align-items-center text-dark">
                                        <i class="material-icons opacity-6 me-2 text-md">manage_accounts</i>
                                        {{ __('Help Option 2') }}
                                    </div>
                                </a>
                            </li>

                            <li class="nav-item dropdown dropdown-hover dropdown-subitem list-group-item border-0 p-0">
                                <a class="dropdown-item border-radius-md mb-2" href="#">
                                    <div class="d-flex align-items-center text-dark">
                                        <i class="material-icons opacity-6 me-2 text-md">manage_accounts</i>
                                        {{ __('Help Option 3') }}
                                    </div>
                                </a>
                            </li>



                        </ul>
                    </div>

                    <div class="row d-lg-none">
                        <div class="col-md-12">
                            <!-- Authentication -->


                            <a class="py-2 ps-3 border-radius-md" href="#">

                                <div class="d-flex align-items-center text-dark">
                                    <i class="material-icons opacity-6 me-2 text-md">manage_accounts</i>
                                    {{ __('Help Option 2') }}
                                </div>
                            </a>

                        </div>
                    </div>
                </div>
            </div>

            <ul class="navbar-nav  justify-content-end">


                <li class="nav-item dropdown dropdown-hover mx-2">

                    <a role="button"
                        class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center"
                        id="dropdownMenuUser" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-user me-sm-1 pe-2"></i>
                        <span class="d-sm-inline d-none">{{ ucfirst('demo') }}</span>
                        <img src=" /img/down-arrow-dark.svg  " alt="down-arrow" class="arrow ms-1 d-lg-block d-none">
                        <img src="/img/down-arrow-dark.svg" alt="down-arrow" class="arrow ms-1 d-lg-none d-block">
                    </a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-md dropdown-md-responsive p-3 border-radius-lg mt-0 mt-lg-3"
                        aria-labelledby="dropdownMenuUser">
                        <div class="d-none d-lg-block">
                            <ul class="list-group">

                                <li
                                    class="nav-item dropdown dropdown-hover dropdown-subitem list-group-item border-0 p-0">

                                    <a class="dropdown-item border-radius-md mb-2"
                                        href="{{ route('admin.account.info') }}">
                                        <div class="d-flex align-items-center text-dark">
                                            <i class="material-icons opacity-6 me-2 text-md">manage_accounts</i>
                                            {{ __('My Account') }}
                                        </div>
                                    </a>


                                </li>



                                <li
                                    class="nav-item dropdown dropdown-hover dropdown-subitem list-group-item border-0 p-0">
                                    <!-- Authentication -->
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <a class="dropdown-item border-radius-md mb-2" href="route('logout')"
                                            onclick="event.preventDefault();
                                    this.closest('form').submit();">
                                            <div class="d-flex align-items-center text-dark">
                                                <i class="material-icons opacity-6 me-2 text-md">logout</i>
                                                Logout
                                            </div>
                                        </a>

                                    </form>
                                </li>
                            </ul>
                        </div>

                        <div class="row d-lg-none">
                            <div class="col-md-12">
                                <!-- Authentication -->


                                <a class="py-2 ps-3 border-radius-md" href="{{ route('admin.account.info') }}">

                                    <div class="d-flex align-items-center text-dark">
                                        <i class="material-icons opacity-6 me-2 text-md">manage_accounts</i>
                                        {{ __('My Account') }}
                                    </div>
                                </a>


                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <a class="py-2 ps-3 border-radius-md" href="route('logout')"
                                        onclick="event.preventDefault(); this.closest('form').submit();">

                                        <div class="d-flex align-items-center text-dark">
                                            <i class="material-icons opacity-6 me-2 text-md">logout</i>
                                            Logout
                                        </div>
                                    </a>
                                </form>
                            </div>
                        </div>
                    </div>
                </li>
                {{-- <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </a>
            </li> --}}
                <li class="nav-item px-3 d-flex align-items-center">
                    <a href="javascript:;" class="nav-link  text-body p-0">
                        <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
                    </a>
                </li>

            </ul>
        </div>

    </div>



</nav>
