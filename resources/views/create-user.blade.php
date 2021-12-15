
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  @include('Template.head')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  @include('Template.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
 @include('Template.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Tambah User</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href='{{ route('index') }}'>Home</a></li>
              <li class="breadcrumb-item active">Create</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="card card-into card-outline">

        <div class="card-body">
          <form action="{{ route('simpan-user') }}" method="POST">
            @csrf
            <div class="form-group">
              <label for="username">Username *</label>
              <input type="text" name="username" class="form-control" placeholder="hery123">
            </div>

            <div class="form-group">
              <label for="name">Nama *</label>
              <input type="text" name="name" class="form-control" placeholder="hery">
            </div>

            <div class="form-group">
              <label for="email">Email *</label>
              <input type="text" name="email" class="form-control" placeholder="E-mail">
            </div>

            <div class="form-group">
              <label for="password">Password *</label>
              <input type="password" name="password" class="form-control" placeholder="********">
            </div>

            <div class="form-group">
              <label for="phone">Phone *</label>
              <input type="text" name="phone" class="form-control" placeholder="085808768909">
            </div>

            <div class="form-group">
              <label for="address">Address *</label>
              <input type="text" name="address" class="form-control" placeholder="Samarinda"></textarea>
            </div>

            <div class="form-group">
              <button type="submit" class="btn btn-success"> Simpan Data </button>
            </div>

          </form>
          
        </div>
      </div>
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  @include('Template.footer')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
@include('Template.script')
</body>
</html>
