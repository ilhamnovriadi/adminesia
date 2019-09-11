<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>AdminLTE 3 | Starter</title>

  <!-- Theme style -->
  <link rel="stylesheet" href="/css/app.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper" id="app">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Cari" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{asset('dist/img/user1-128x128.jpg')}}" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Ilham Novriadi
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Kenapa anak saya belum ada?</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 2 Jam Lalu</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{asset('dist/img/user8-128x128.jpg')}}" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Rizarullah Santoso
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Istri saya mana?</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Jam Lalu</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">Lihat Semua Pesan</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifikasi</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 Pesan Baru
            <span class="float-right text-muted text-sm">3 menit</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 Siswa Izin
            <span class="float-right text-muted text-sm">12 jam</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 Laporan Ortu
            <span class="float-right text-muted text-sm">2 hari</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">Lihat Semua Notifikasi</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/home" class="brand-link">
      <img src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
     <span class="brand-text font-weight-light">Adminesia</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="/home" class="d-block">Super Admin</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
                  <router-link to="/dashboard" class="nav-link {{ (request()->is('dashboard')) ? 'active' : '' }}">
                    <i class="nav-icon fas fa-home"></i>
                    <p>
                      Dashboard
                    </p>
                  </router-link>
                </li>
              <li class="nav-item">
                <a href="/developer" class="nav-link {{ Request::is('analitik')? 'active' : null }}">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>Analitik</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link {{ Request::is('statistik')? 'active' : null }}">
                  <i class="nav-icon fas fa-chart-line"></i>
                  <p>Statistik</p>
                </a>
              </li>

                <li class="nav-header">KELAS</li>
          <li class="nav-item has-treeview {{ Request::is('kendalifingerprint') || Request::is('terbitkanbarcode') || Request::is('buatrekapabsensi') || Request::is('scanbarcode') || Request::is('absenfingerprint') || Request::is('outputabsensi') || Request::is('mekanismeizin') || Request::is('laporanizin') ? 'menu-open' : null }}">
            <a href="#" class="nav-link {{ Request::is('kendalifingerprint') || Request::is('terbitkanbarcode') || Request::is('buatrekapabsensi') || Request::is('scanbarcode') || Request::is('absenfingerprint') || Request::is('outputabsensi') || Request::is('mekanismeizin') || Request::is('laporanizin') ? 'active' : null }}">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Absensi
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">6</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link {{ Request::is('kendalifingerprint')? 'active' : null }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kendali Finger Print</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link {{ Request::is('terbitkanbarcode')? 'active' : null }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Terbitkan Barcode</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link {{ Request::is('buatrekapabsensi')? 'active' : null }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Buat Rekap Absensi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link {{ Request::is('scanbarcode')? 'active' : null }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Scan Barcode</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link {{ Request::is('absenfingerprint')? 'active' : null }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Absen Finger Print</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link {{ Request::is('outputabsensi')? 'active' : null }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Output Absensi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link {{ Request::is('mekanismeizin')? 'active' : null }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Mekanisme Izin</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link {{ Request::is('laporanizin')? 'active' : null }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Laporan Izin</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview {{ Request::is('inputnilai') || Request::is('editnilai') || Request::is('lihatoutputnilai') || Request::is('pdfprintout') ? 'menu-open' : null }}">
            <a href="#" class="nav-link {{ Request::is('inputnilai') || Request::is('editnilai') || Request::is('lihatoutputnilai') || Request::is('pdfprintout') ? 'active' : null }}">
              <i class="nav-icon fas fa-scroll"></i>
              <p>
                Rapor
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link {{ Request::is('inputnilai')? 'active' : null }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Input Nilai</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link {{ Request::is('editnilai')? 'active' : null }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Edit Nilai</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link {{ Request::is('lihatoutputnilai')? 'active' : null }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lihat Output Nilai</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link {{ Request::is('pdfprintout')? 'active' : null }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>PDF/Print Out</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview {{ Request::is('penjadwalan') || Request::is('kurasinilai') || Request::is('lihatjadwalujian') || Request::is('moderasiujian') ? 'menu-open' : null }}">
            <a href="#" class="nav-link {{ Request::is('penjadwalan') || Request::is('kurasinilai') || Request::is('lihatjadwalujian') || Request::is('moderasiujian') ? 'active' : null }}">
                <i class="nav-icon fas fa-list-ol"></i>
              <p>
                Manajemen Ujian
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link {{ Request::is('penjadwalan')? 'active' : null }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Penjadwalan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link {{ Request::is('kurasinilai')? 'active' : null }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kurasi Nilai</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link {{ Request::is('lihatjadwalujian')? 'active' : null }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lihat Jadwal</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link {{ Request::is('moderasiujian')? 'active' : null }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Moderasi</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview {{ Request::is('moderasi') || Request::is('penerbit') || Request::is('lihatjadwal')|| Request::is('simpanjadwal') ?'menu-open' : null }}">
            <a href="#" class="nav-link {{ Request::is('moderasi') || Request::is('penerbit') || Request::is('lihatjadwal')|| Request::is('simpanjadwal') ?'active' : null }}">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Jadwal Pelajaran
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link {{ Request::is('moderasi')? 'active' : null }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Moderasi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link {{ Request::is('penerbit')? 'active' : null }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Penerbit</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link {{ Request::is('lihatjadwal')? 'active' : null }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lihat Jadwal</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link {{ Request::is('simpanjadwal')? 'active' : null }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Simpan Jadwal</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">ADMINISTRASI</li>
          <li class="nav-item has-treeview {{ Request::is('penerbitfaktur') || Request::is('penerimaanpembayaran') || Request::is('kurasifaktur') || Request::is('konfirmasipembayaran') || Request::is('terimafaktur') || Request::is('pembayaranfaktur') || Request::is('daftarkonfirmasi') ? 'menu-open' : null }}">
            <a href="#" class="nav-link {{ Request::is('penerbitfaktur') || Request::is('penerimaanpembayaran') || Request::is('kurasifaktur') || Request::is('konfirmasipembayaran') || Request::is('terimafaktur') || Request::is('pembayaranfaktur') || Request::is('daftarkonfirmasi') ? 'active' : null }}">
                <i class="nav-icon fas fa-wallet"></i>
              <p>
                Pembayaran
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link {{ Request::is('penerbitfaktur')? 'active' : null }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Penerbitan Faktur</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link {{ Request::is('penerimaanpembayaran')? 'active' : null }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Penerimaan Pembayaran</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link {{ Request::is('kurasifaktur')? 'active' : null }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kurasi Faktur</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link {{ Request::is('konfirmasipembayaran')? 'active' : null }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Konfirmasi Pembayaran</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link {{ Request::is('terimafaktur')? 'active' : null }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Terima Faktur</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link {{ Request::is('pembayaranfaktur')? 'active' : null }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pembayaran Faktur</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link {{ Request::is('daftarkonfirmasi')? 'active' : null }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Daftar Konfirmasi</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview {{ Request::is('inputsiswa') || Request::is('inputguru') || Request::is('inputpegawai') ? 'menu-open' : null }}">
            <a href="#" class="nav-link {{ Request::is('inputsiswa') || Request::is('inputguru') || Request::is('inputpegawai') ? 'active' : null }}">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Administrasi
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link {{ Request::is('inputsiswa')? 'active' : null }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Input Nama Siswa</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link {{ Request::is('inputguru')? 'active' : null }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Input Nama Guru</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link {{ Request::is('inputpegawai')? 'active' : null }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Input Nama Pegawai</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">EKSTRA</li>
          <li class="nav-item has-treeview {{ Request::is('inputpegawai')? 'active' : null }}">
            <a href="#" class="nav-link {{ Request::is('jadwalsekolah') || Request::is('jadwalrapat') || Request::is('jadwallibur') || Request::is('insidental') ? 'active' : null }}">
                <i class="nav-icon fas fa-bell"></i>
              <p>
                Pengumuman
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link {{ Request::is('jadwalsekolah')? 'active' : null }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Jadwal Sekolah</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link {{ Request::is('jadwalrapat')? 'active' : null }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Jadwal Rapat</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link {{ Request::is('jadwallibur')? 'active' : null }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Jadwal Libur</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link {{ Request::is('insidental')? 'active' : null }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Insidental</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview {{ Request::is('uploadsoal') || Request::is('terbitkansilabus') ? 'menu-open' : null }}">
            <a href="#" class="nav-link {{ Request::is('uploadsoal') || Request::is('terbitkansilabus') ? 'active' : null }}">
                <i class="nav-icon fas fa-download"></i>
              <p>
                Pusat Download
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link {{ Request::is('uploadsoal')? 'active' : null }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Upload Soal</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link {{ Request::is('terbitkansilabus')? 'active' : null }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Terbitkan Silabus</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
              <a href="#" class="nav-link {{ Request::is('blog')? 'active' : null }}">
                <i class="nav-icon fas fa-blog"></i>
                <p>Blog</p>
              </a>
            </li>
          <li class="nav-item">
              <a href="#" class="nav-link {{ Request::is('kelolafrontend')? 'active' : null }}">
                <i class="nav-icon fas fa-home"></i>
                <p>Kelola Frontend</p>
              </a>
            </li>
          <li class="nav-item">
              <a href="#" class="nav-link {{ Request::is('panduan')? 'active' : null }}">
                <i class="nav-icon fas fa-compass"></i>
                <p>Panduan</p>
              </a>
            </li>
          <li class="nav-item">
              <a href="/users" class="nav-link {{ Request::is('/users')? 'active' : null }}">
                <i class="nav-icon fas fa-users"></i>
                <p>Manajemen Akun</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('logout') }}" 
                onclick="event.preventDefault(); 
                document.getElementById('logout-form').submit();"
                class="nav-link">
                <i class="nav-icon fas fa-power-off"></i>
                <p>Logout</p>
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
            </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <router-view></router-view>
    <vue-progress-bar></vue-progress-bar>
  </div>
  <!-- /.content-wrapper -->
  <!-- Content Wrapper. Contains page content -->
{{-- @yield('content') --}}
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2019 <a href="http://adminesia.com">adminesia.com</a>.</strong>
    <div class="float-right d-none d-sm-inline-block">
      <b>Versi</b> 1.0.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<script src="/js/app.js"></script>
</body>
</html>
