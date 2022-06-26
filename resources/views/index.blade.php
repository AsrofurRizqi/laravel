@include('sys/bootstrap')
<link rel="stylesheet" href="custom.css">
<meta name="csrf-token" content="{{ csrf_token() }}" />
</head>
@include('sys/navbar')
<div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div> <a href="#" class="nav_logo"> <i class='fa-solid fa-laptop nav_logo-icon'></i> <span class="nav_logo-name">KuroComputer</span> </a>
                <div class="nav_list"> <a href="/" class="nav_link active"> <i class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">Dashboard</span> </a> <a href="profile" class="nav_link"> <i class='bx bx-user nav_icon'></i> <span class="nav_name">Profile</span> </a> <a href="tambah" class="nav_link"> <i class='bx bx-pencil nav_icon'></i> <span class="nav_name">Add Data</span> </a> </div>
        
        </nav>
    </div>

<div class="container mx-4">
<h1 class="text-center">Selamat Datang</h1>
<br>
<div class="row">
    <div class="col-md-auto">
        <div class="text-center">
                <div class="card" style="width: 14rem;">
                    <div class="card-body"> 
                        <div id="laptopcount">

                        </div>
                        <h5 class="card-title">Jumlah Laptop</h5>
                    </div>
                </div>
                <div class="card mt-3" style="width: 14rem;">
                    <div class="card-body">
                    <div id="merekcount">
                            
                        </div>
                        <h5 class="card-title">Total Merek</h5>
                    </div>
                </div>
        </div>     
    </div>
    <div class="col">
        <div class="row mb-3">
            <div class="col-md-6">
                <form action="" method="GET">
                    <div class="row g-3 align-items-center">
                            <div class="col-auto">
                                <label class="col-form-label">Find Items</label>
                            </div>
                            <div class="col-md-4">
                                <input type="text" name="find" class="form-control">
                            </div>
                            <div class="col-auto">
                                <button type="submit" class="btn btn-primary">Cari</button>
                                <button type="button" class="btn" ><a href="index.php"><i class="fa-solid fa-trash-can"></a></i></button>
                            </div>
                    </div>
                </form>
            </div>   
            <div class="col-md-6">
                <div class="row g-3 align-items-center">
                    <div class="col-auto">
                        <label class="col-form-label">Sort By</label>
                    </div>
                    <div class="col-md-4">
                    <select id="sortselect" class="form-select">
                        <option selected value="0" >Pilih</option>
                        <option value="1">Merek</option>
                        <option value="2">Nomor Seri</option>
                        <option value="3">Tahun Dibuat</option>
                    </select>
                    </div>
                    <div class="col-auto">
                        <span id="passwordHelpInline" class="form-text">
                        Sort Menurut kolom.
                        </span>
                    </div>
                </div>
            </div>
        </div>
    <div class="collapse" id="mycollapse">
        <input class="form-control" type="text" id="id" name="id" disabled></br>
        <input class="form-control" type="text" id="merek" name="merek" required></br>
        <input class="form-control" type="text" id="seri" name="seri" required></br>
        <input class="form-control" type="text" id="tahun_produksi" name="tahun_produksi" required></br>
        <div class="col">
        <a class="btn btn-danger" data-toggle="collapse" href="#mycollapse" role="button" aria-expanded="false" aria-controls="collapseExample">Close</a>
        <a id="submit_update" name="submit_update" class="btn btn-info">Save</a>
        </div>
    </div>
            @include("table")
    </div>
</div>
@include("sys/js");
</div>
    <div class="gambar">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#135984CF" fill-opacity="1" d="M0,32L30,64C60,96,120,160,180,197.3C240,235,300,245,360,250.7C420,256,480,256,540,234.7C600,213,660,171,720,138.7C780,107,840,85,900,117.3C960,149,1020,235,1080,229.3C1140,224,1200,128,1260,112C1320,96,1380,160,1410,192L1440,224L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path></svg>
    </div>
</body>
