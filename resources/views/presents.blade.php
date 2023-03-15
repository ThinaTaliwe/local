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

    <main class="main-content position-relative mt-7 mb-10 border-radius-lg ">
        <div class="container-fluid mb-4 py-4">
            <div class="row mt-4">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header text-center">
                            <h5 class="mb-0">Presents</h5>
                            <p class="text-sm mb-0">
                                Feel free to open..
                            </p>
                        </div>
                        <!-- The presents -->
                        <div class="row m-2">
                            <div class="col-md-6">
                                <a href="#" onclick="present1Clicked()">
                                    <div class="card border-0">
                                        <img src="img/present1.jpg" alt="Present 1" class="card-img-top">
                                        <div class="card-body text-center">
                                            <h5 class="card-title">Present 1</h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="#" onclick="present2Clicked()">
                                    <div class="card border-0">
                                        <img src="img/present2.jpg" alt="Present 2" class="card-img-top">
                                        <div class="card-body text-center">
                                            <h5 class="card-title">Present 2</h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- @include('components.footer') -->

        </div>
    </main>

    <script src="{{ asset('js/present.js') }}"></script>
</x-app-layout>
