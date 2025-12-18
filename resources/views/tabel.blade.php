<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Arre Technology | Dashboard</title>

    <!-- Custom fonts for this template-->
    <link rel="shortcut icon" href="{{ asset('assets/img/icon.png') }}" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link href="{{ asset('assets2/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('assets2/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.3.5/css/dataTables.dataTables.css" />

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-dark accordion mt-5 pt-5" id="accordionSidebar"
            style="background-color: #03254c">

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="/dashboard">
                    <i class="bi bi-display"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            {{-- <div class="sidebar-heading">
                Interface
            </div> --}}

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item active">
                <a class="nav-link" href="/dashboard/table">
                    <i class="bi bi-table"></i>
                    <span>Portofolio</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow fixed-top">

                    <a class="sidebar-brand d-flex align-items-start justify-content-start bg-white" href="dashboard">
                        <img src="/assets/img/logo-ws.png" alt="Logo" class="w-25">
                    </a>
                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto d-flex flex-row">

                        <form class="d-none d-sm-inline-block form-inline mr-auto p-3 navbar-search">
                            <div class="input-group">
                                <input type="text" class="form-control bg-light border-0 small"
                                    placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn" style="background-color: #03254c; color: white;" type="button">
                                        <i class="fas fa-search fa-sm"></i>
                                    </button>
                                </div>
                            </div>
                        </form>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <div class="p-3">
                            <form method="POST" action="{{ url('logout') }}">
                                @csrf
                                <button type="submit" class="btn btn-outline-danger">Logout</button>
                            </form>
                        </div>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid mt-5 pt-5">

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Tabel Portofolio</li>
                        </ol>
                    </nav>
                    <hr>
                    <!-- Page Heading -->
                    <div class="d-flex mb-4">
                        <h1 class="h3 me-auto text-gray-800">Tabel Data Portofolio</h1>
                        <button type="button" class="btn" style="background-color: #03254c; color: white;"
                            data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <i class="bi bi-plus-lg me-2"></i>Tambah
                        </button>
                    </div>
                    <div class="card my-3">
                        <div class="card-header" style="background-color: #03254c; color: white;">Data Portofolio</div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="myTable" class="display">
                                    <thead class="table-primary">
                                        <tr>
                                            <th scope="col">No.</th>
                                            <th scope="col">Nama Project</th>
                                            <th scope="col">Deskripsi Project</th>
                                            <th scope="col">Link Project</th>
                                            <th scope="col">Gambar</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($project as $key => $item)
                                            <tr>
                                                <th scope="row">{{ $key + 1 }}</th>
                                                <td>{{ $item->nama_project }}</td>
                                                <td>{{  Str::limit($item->deskripsi_project, 50) }}</td>
                                                <td><a href="{{ $item->link_project }}"
                                                        target="_blank">{{  Str::limit($item->link_project, 40) }}</a></td>
                                                <td>
                                                    @php
                                                        $images = json_decode($item->image, true);
                                                    @endphp
                                                    @if(is_array($images))
                                                        <div id="carouselExampleSlidesOnly{{ $item->id }}"
                                                            class="carousel slide" data-bs-ride="carousel">
                                                            <div class="carousel-inner">
                                                                @foreach ($images as $index => $img)
                                                                    <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                                                                        <img src="{{ asset('image/' . $img) }}"
                                                                            class="img-fluid rounded w-100"
                                                                            alt="Gambar {{ $index + 1 }}">
                                                                    </div>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    @endif
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-warning mb-2"
                                                        data-bs-toggle="modal" data-bs-target="#editModal{{ $item->id }}">
                                                        <i class="bi bi-pencil-square"></i>
                                                    </button>
                                                    <a href="#" class="btn btn-danger delete-confirm"
                                                        data-id="{{ $item->id }}">
                                                        <i class="bi bi-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>&copy; Copyright <b>Arre Technology</b>, All
                            right
                            reserved.</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Create Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Project</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @include('create')
                </div>
            </div>
        </div>
    </div>

    <!--Edit Modal-->
    @foreach ($project as $item)
        <div class="modal fade" id="editModal{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Project</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        @include('edit', ['item' => $item])
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('assets2/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets2/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('assets2/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('assets2/js/sb-admin-2.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/2.3.5/js/dataTables.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
    {{-- script modal bawaan bootstrap --}}
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (() => {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            const forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
        })()
    </script>
    {{-- data table --}}
    <script>
        $(document).ready(function () {
            $('#myTable').DataTable();
        });
    </script>
    {{-- untuk delete data --}}
    <script>
        document.addEventListener('DOMContentLoaded', function () {

            const deleteButtons = document.querySelectorAll('.delete-confirm');

            deleteButtons.forEach(button => {
                button.addEventListener('click', function (e) {
                    e.preventDefault(); // cegah link langsung buka URL

                    const id = this.getAttribute('data-id');

                    Swal.fire({
                        title: "Yakin mau hapus?",
                        text: "Data ini akan hilang permanen!",
                        icon: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#d33",
                        cancelButtonColor: "#3085d6",
                        confirmButtonText: "Ya, hapus!",
                        cancelButtonText: "Batal"
                    }).then((result) => {
                        if (result.isConfirmed) {
                            // Redirect ke URL delete Laravel
                            window.location.href = `/dasboard/delete/${id}`;
                        }
                    });
                });
            });

        });
    </script>
    {{-- sweet alert data ketika berhasil/tidak --}}
    <script>
        @if(session('success'))
            Swal.fire({
                title: 'Berhasil!',
                text: "{{ session('success') }}",
                icon: 'success',
                confirmButtonText: 'OK'
            });
        @endif

        @if(session('error'))
            Swal.fire({
                title: 'Gagal!',
                text: "{{ session('error') }}",
                icon: 'error',
                confirmButtonText: 'OK'
            });
        @endif
    </script>
    {{-- Edit Modal validasi gambar --}}
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            document.body.addEventListener('change', function (e) {
                if (e.target.matches('input[type="file"][name="image[]"]')) {

                    const input = e.target;
                    const allowedTypes = ['image/png', 'image/jpeg', 'image/jpg'];
                    const maxSize = 2 * 1024 * 1024; // 2MB

                    for (let file of input.files) {

                        if (!allowedTypes.includes(file.type)) {
                            Swal.fire({
                                icon: 'error',
                                title: 'Format tidak valid',
                                text: 'Hanya png, jpg, jpeg',
                            });

                            input.value = '';
                            input.classList.add('is-invalid');
                            return;
                        }

                        if (file.size > maxSize) {
                            Swal.fire({
                                icon: 'error',
                                title: 'Ukuran terlalu besar',
                                text: 'Maksimal 2 MB',
                            });

                            input.value = '';
                            input.classList.add('is-invalid');
                            return;
                        }
                    }

                    input.classList.remove('is-invalid');
                }
            });
        });
    </script>
</body>

</html>