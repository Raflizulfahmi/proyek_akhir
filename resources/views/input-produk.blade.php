<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Halaman Input Produk</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/dashboard.css" rel="stylesheet">
        <link href="css/sidebars.css" rel="stylesheet">
    </head>
<body>

    <header class="navbar navbar-dark sticky-top bg-primary flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-4 fs-4 fw-bold">Framework</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-nav">
            <div class="nav-item text-nowrap">
                <form action="{{ url('logout') }}" method="post">
                @csrf
                <button class="btn nav-link px-5 fw-bold">Logout</button>
                </form>
            </div>
        </div>
        </header>
        <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="position-sticky pt-3 sidebar-sticky">
                <ul class="list-unstyled ps-0">
                <li class="mb-1">
                    <a href="{{ url('dashboard') }}" class="btn d-inline-flex align-items-center fw-bold fs-5">
                    Dashboard
                    </a>
                </li>
                <li class="mb-1">
                    <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
                    Customers
                    </button>
                    <div class="collapse" id="dashboard-collapse">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        <li><a href="{{ url('tampil-customer') }}" class="fs-6 link-dark d-inline-flex text-decoration-none rounded">Data Customers</a></li>
                        <li><a href="{{ url('input-customer') }}" class="fs-6 link-dark d-inline-flex text-decoration-none rounded">Input Data Customers</a></li>
                    </ul>
                    </div>
                </li>
                <li class="mb-1">
                    <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="false">
                    Orders
                    </button>
                    <div class="collapse" id="orders-collapse">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        <li><a href="{{ url('tampil-order') }}" class="fs-6 link-dark d-inline-flex text-decoration-none rounded">Data Order</a></li>
                        <li><a href="{{ url('input-order') }}" class="fs-6 link-dark d-inline-flex text-decoration-none rounded">Input Data Order</a></li>
                    </ul>
                    </div>
                </li>
                <li class="mb-1">
                    <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#produk-collapse" aria-expanded="false">
                    Produk
                    </button>
                    <div class="collapse" id="produk-collapse">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        <li><a href="{{ url('tampil-produk') }}" class="fs-6 link-dark d-inline-flex text-decoration-none rounded">Data Produk</a></li>
                        <li><a href="{{ url('input-produk') }}" class="fs-6 link-dark d-inline-flex text-decoration-none rounded">Input Data Produk</a></li>
                    </ul>
                    </div>
                </li>
                <li class="border-top my-3"></li>
                <li class="mb-1">
                    <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">
                    Account
                    </button>
                    <div class="collapse" id="account-collapse">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        <li><a href="{{ url('setting') }}" class="fs-6 link-dark d-inline-flex text-decoration-none rounded">Settings</a></li>
                    </ul>
                    </div>
                </li>
                </ul>
            </div>
        </nav>
        </div>
        </div>
    <!-- ============================ Data Untuk Diganti ================================-->
<main class="col-md-9 ms-auto col-lg-10 top-0 border border-1">
    <div class="d-flex justify-content-center flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <div class="card w-50">
            <div class="card-header text-center font-weight-bold">
                Input Data Produk
            </div>
            <div class="card-body">
                <form action="{{ url('kirim-produk') }}" method="post" >
                @csrf
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Nama Produk</span>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror"  value="{{ old('nama') }}" name="nama" placeholder="nama" aria-label="nama" aria-describedby="basic-addon1">
                    @error('nama')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="input-group mb-3">
                    <input type="number" name="harga" min="0" class="form-control @error('harga') is-invalid @enderror"  value="{{ old('harga') }}" placeholder="Harga Produk" aria-label="Harga Produk" aria-describedby="basic-addon2">
                    @error('harga')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    <span class="input-group-text" id="basic-addon2">Harga Produk</span>
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text" id="jenis">Jenis Produk</span>
                    <input type="text" name="jenis" class="form-control @error('jenis') is-invalid @enderror"  value="{{ old('jenis') }}" id="basic-url" aria-describedby="jenis">
                    @error('jenis')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text">Minimal Pemesanan</span>
                    <input type="number" name="minimal_pesan" min="0" class="form-control @error('minimal_pesan') is-invalid @enderror"  value="{{ old('minimal_pesan') }}" aria-label="minimal_pesan">
                    @error('minimal_pesan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Kondisi</span>
                    <input type="text" name="kondisi" class="form-control @error('kondisi') is-invalid @enderror"  value="{{ old('kondisi') }}" placeholder="Kondisi" aria-label="Kondisi">
                    @error('kondisi')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="input-group">
                    <span class="input-group-text">Deskripsi</span>
                    <textarea class="form-control" name="deskripsi" aria-label="Deskripsi"></textarea>
                    @error('nama')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary mt-2">Submit</button>
            </form>
        </div>
    </div>
</div>
</main>
<!--=================================== Akhir data untuk diganti ===================================== -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/sidebars.js"></script>
</body>
</html>
