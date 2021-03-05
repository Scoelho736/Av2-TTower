<html lang="pt-br">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>T - Tower</title>


<link rel="stylesheet" href="{{url('assets/bootstrap/css/bootstrap.min.css')}}">
  <!-- Custom styles for this template -->

  <link rel="stylesheet" href="{{url('assets/bootstrap/css/simple-sidebar.css')}}">
</head>

<body style="background-color:#F3F5F4">

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-secondary border-right " id="sidebar-wrapper">
      <div class="sidebar-heading text-light "  ><h1>T - Tower </h1></div>
      <div class="list-group list-group-flush">
        <a href="{{url('Apto/form')}}" class="list-group-item list-group-item-action bg-secondary text-light">Cadastro</a>
        <a href="{{url('Apto')}}" class="list-group-item list-group-item-action bg-secondary text-light">Tabela</a>

      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light border-bottom shadow p-3  bg-body rounded"style="background-color:#E1E6E3">

        <button class="btn bg-light " id="menu-toggle" >
        <img class="bg-light"src="icons/list.svg" alt="" width="32" height="32"></button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

      </nav>
      @yield('content')

    </div>


  </div>


  <!-- Bootstrap core JavaScript -->
  <script src="jquery/jquery.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>
