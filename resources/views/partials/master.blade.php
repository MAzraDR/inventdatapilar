<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SeoDash Free Bootstrap Admin Template by Adminmart</title>
    <link rel="shortcut icon" type="image/png" href="../assets/images/logos/seodashlogo.png" />
    <link rel="stylesheet" href="{{asset('css/styles.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/styles2.css')}}" />
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.6/css/dataTables.dataTables.css" />
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="">
        <!-- Sidebar Start -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div>
                <div class="brand-logo d-flex align-items-center justify-content-between">
                    <a href="{{route('dashboard')}}" class="text-nowrap logo-img mb-2">
                        <img style="height:auto; display: block; margin-left: auto; margin-right: auto; width: 70%;"
                            src="{{asset('images/logo-bappeda_new.png')}}" alt="" />
                    </a>
                    <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                        <i class="ti ti-x fs-8"></i>
                    </div>
                </div>
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
                    <ul id="sidebarnav">
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{route('dashboard')}}" aria-expanded="false">
                                <span>
                                    <iconify-icon icon="solar:home-smile-bold-duotone" class="fs-6"></iconify-icon>
                                </span>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                            <a class="sidebar-link" href="#dropdownMenu" aria-expanded="false" data-bs-toggle="collapse"
                                role="button">
                                <span>
                                    <iconify-icon icon="solar:home-smile-bold-duotone" class="fs-6"></iconify-icon>
                                </span>
                                <span class="hide-menu">Data Pilar Batas</span>
                            </a>
                            <ul class="collapse list-unstyled" id="dropdownMenu">
                                <li><a class="sidebar-link" href="{{ route('pilar.index') }}">Seluruh Kecamatan</a></li>
                                <li><a class="sidebar-link" href="{{ route('pilar.blimbing') }}">Kecamatan Blimbing</a>
                                </li>
                                <li><a class="sidebar-link" href="{{ route('pilar.kedungkandang') }}">Kecamatan
                                        Kedungkandang</a></li>
                                <li><a class="sidebar-link" href="{{ route('pilar.klojen') }}">Kecamatan Klojen</a></li>
                                <li><a class="sidebar-link" href="{{ route('pilar.lowokwaru') }}">Kecamatan
                                        Lowokwaru</a></li>
                                <li><a class="sidebar-link" href="{{ route('pilar.sukun') }}">Kecamatan Sukun</a></li>
                            </ul>
                            <a class="sidebar-link" href="{{route('pilar.create')}}" aria-expanded="false">
                                <span>
                                    <iconify-icon icon="solar:home-smile-bold-duotone" class="fs-6"></iconify-icon>
                                </span>
                                <span class="hide-menu">Input Data</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>

        <!--  Sidebar End -->
        <!--  Main wrapper -->
        <div class="body-wrapper">
            <!--  Header Start -->
            <header class="app-header">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <ul class="navbar-nav">
                        <li class="nav-item d-block d-xl-none">
                            <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse"
                                href="javascript:void(0)">
                                <i class="ti ti-menu-2"></i>
                            </a>
                        </li>

                    </ul>
                    <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
                        <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
                            @if(Auth::check())
                            <!-- Jika pengguna sudah login, tampilkan foto profil -->
                            <li class="nav-item dropdown">
                                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="{{ asset('images/user-1.jpg') }}" alt="" width="35" height="35"
                                        class="rounded-circle">
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up"
                                    aria-labelledby="drop2">
                                    <div class="message-body">
                                        <a href="javascript:void(0)"
                                            class="d-flex align-items-center gap-2 dropdown-item">
                                            <i class="ti ti-user fs-6"></i>
                                            <p class="mb-0 fs-3">My Profile</p>
                                        </a>
                                        <a href="{{ route('logout') }}"
                                            class="btn btn-outline-success mx-3 mt-2 d-block"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
                                        <!-- Form untuk logout -->
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </div>
                            </li>
                            @else
                            <!-- Jika pengguna belum login, tampilkan tombol login -->
                            <li class="nav-item">
                                <a href="{{ route('login') }}" class="btn btn-success">Login</a>
                            </li>
                            @endif
                        </ul>
                    </div>
                </nav>
            </header>
            <!--  Header End -->

            @yield('content')

        </div>
    </div>

    <script src="{{ asset('libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('libs/apexcharts/dist/apexcharts.min.js') }}"></script>
    <script src="{{ asset('libs/simplebar/dist/simplebar.js') }}"></script>
    <script src="{{ asset('js/sidebarmenu.js') }}"></script>
    <script src="{{ asset('js/app.min.js') }}"></script>
    <script src="{{ asset('js/dashboard.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="https://cdn.datatables.net/2.1.6/js/dataTables.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
    <!-- DataTables Buttons JS -->
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>
    <style>
         .dt-buttons {
            display: flex;
            /* Menggunakan Flexbox */
            margin: 10px;
            /* Margin atas dan bawah */
            justify-content: flex-end;
            /* Menempatkan tombol di sebelah kanan */
        }    
        .dt-buttons .btn {
            margin-left: 10px;
        }    

        .dt-search {
            margin: 20px 0px;
        }
        
    </style>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable({
                dom: 'lfrtipB', // Untuk menambahkan tombol export di atas table
                buttons: [{
                        extend: 'copy',
                        className: 'btn btn-secondary'
                    },
                    {
                        extend: 'csv',
                        className: 'btn btn-success'
                    },
                    {
                        extend: 'excel',
                        className: 'btn btn-primary'
                    },
                    {
                        extend: 'pdf',
                        className: 'btn btn-danger'
                    },
                    {
                        extend: 'print',
                        className: 'btn btn-info'
                    }
                ],
                language: {
                    buttons: {
                        copy: 'Copy to clipboard',
                        csv: 'Export as CSV',
                        excel: 'Export as Excel',
                        pdf: 'Export as PDF',
                        print: 'Print'
                    }
                }
            });
        });
    </script>
</body>

</html>