<!DOCTYPE html>
<html>
<head>
  <title>@yield("title")</title>
  @include('layouts.meta')
  @include('layouts.links')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  @include('layouts.navbar')
  @include('layouts.aside')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">@yield("header")</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        @yield("content")
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

</div>

  @include('layouts.scripts')
</body>
</html>
