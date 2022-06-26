@include('sys/bootstrap')
<link rel="stylesheet" href="custom.css">
<meta name="csrf-token" content="{{ csrf_token() }}">
</head>
@include('sys/navbar')
<div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div> <a href="#" class="nav_logo"> <i class='fa-solid fa-laptop nav_logo-icon'></i> <span class="nav_logo-name">KuroComputer</span> </a>
                <div class="nav_list"> <a href="/" class="nav_link"> <i class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">Dashboard</span> </a> <a href="profile" class="nav_link"> <i class='bx bx-user nav_icon'></i> <span class="nav_name">Profile</span> </a> <a href="tambah" class="nav_link active"> <i class='bx bx-pencil nav_icon'></i> <span class="nav_name">Add Data</span> </a> </div>
        
        </nav>
    </div>
<div class="container col-md-5 kontener-tambah">
<h3 class="text-center">Tambah Data Laptop</h3>

<div class="container col-md-12 mt-3">
    <div class="row mb-3">
        <div class="col-sm-4 col-form-label">Merek Laptop</div>
        <div class="col-sm-8">
            <input class="form-control" type="text" id="merek" name="merek" required></br>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-sm-4 col-form-label">Nomor Seri</div>
        <div class="col-sm-8">
            <input class="form-control" type="text" id="serial" name="serial" required></br>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-sm-4 col-form-label">Tahun Produksi</div>
        <div class="col-sm-8">
            <input class="form-control" type="text" id="tahun_produksi" name="tahun_produksi" required></br>
        </div>
    </div>
    <Button id="submit" name="submit" class="btn text-center" style="background-color: #135984CF;" onclick="return confirm('Are you sure ?')">Simpan</Button>
    @include('ajax')
</div>
@include("sys/js2")
</div>
    <div class="gambar tambahan">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#135984CF" fill-opacity="1" d="M0,32L30,64C60,96,120,160,180,197.3C240,235,300,245,360,250.7C420,256,480,256,540,234.7C600,213,660,171,720,138.7C780,107,840,85,900,117.3C960,149,1020,235,1080,229.3C1140,224,1200,128,1260,112C1320,96,1380,160,1410,192L1440,224L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path></svg>
    </div>