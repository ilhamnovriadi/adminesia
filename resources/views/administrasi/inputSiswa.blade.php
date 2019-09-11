@extends('layouts.master')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Input Data Siswa</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Administrasi</a></li>
              <li class="breadcrumb-item active">Input Data Siswa</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <h5 class="mb-2"></h5>
        <div class="row">
          <div class="col-md-4 col-sm-6 col-12">
            <div class="info-box">
              <span class="info-box-icon bg-info"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Total Siswa</span>
                <span class="info-box-number">1,410</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-4 col-sm-6 col-12">
            <div class="info-box">
              <span class="info-box-icon bg-success"><i class="fas fa-male"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Laki-Laki</span>
                <span class="info-box-number">410</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-4 col-sm-6 col-12">
            <div class="info-box">
              <span class="info-box-icon bg-warning"><i class="fas fa-female"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Perempuan</span>
                <span class="info-box-number">13,648</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

        <!-- =========================================================== -->
        <!-- /.table -->

        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Semua Data Siswa</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body" >
              <button type="button" class="btn btn-primary" style="margin-bottom: 1rem" data-toggle="modal" data-target="#modal-default">
                  Tambah Data Siswa
                </button>
              <button type="button" class="btn btn-info float-right" style="margin-bottom: 1rem" data-toggle="modal" data-target="#modal-default">
                  Export Excel
                </button>
              <button type="button" class="btn btn-info float-right" style="margin-bottom: 1rem; margin-right: 1rem" data-toggle="modal" data-target="#modal-default">
                  Export PDF
                </button>
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>NIS</th>
                <th>Nama Siswa</th>
                <th>Kelas</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
                <th>Alamat</th>
                <th>Aksi</th>
              </tr>
              </thead>
              <tbody>
              <tr>
                <td>01223</td>
                <td>Ilham Novriadi</td>
                <td>XII IPA 1</td>
                <td>Laki-Laki</td>
                <td>Islam</td>
                <td>Jalan Swakarya 1 No. 2772</td>
                <td align="center">
                    <button type="button" class="btn btn-warning"><i class="fas fa-edit"></i> EDIT</button>
                    <button type="button" class="btn btn-danger"><i class="fas fa-trash"></i> HAPUS</button>
                </td>
              </tr>
              </tbody>
              {{-- <tfoot>
              <tr>
                <th>Rendering engine</th>
                <th>Browser</th>
                <th>Platform(s)</th>
                <th>Engine version</th>
                <th>CSS grade</th>
              </tr>
              </tfoot> --}}
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.table -->

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

    <a id="back-to-top" href="#" class="btn btn-primary back-to-top" role="button" aria-label="Scroll to top">
      <i class="fas fa-chevron-up"></i>
    </a>
  </div>
  <!-- /.content-wrapper -->
  <div class="modal fade" id="modal-default">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Default Modal</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            <p>One fine body…</p>
          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
@stop