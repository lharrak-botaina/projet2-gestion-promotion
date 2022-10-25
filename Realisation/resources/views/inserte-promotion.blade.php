
<!DOCTYPE html>
<html lang="en" itemscope itemtype="">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <!-- <link rel="icon" type="image/png" href="../assets/img/favicon.png"> -->
  <title>
    Material Kit 2 by Creative Tim
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/material-kit.css?v=3.0.4" rel="stylesheet" />
</head>

<body class="presentation-page bg-gray-200">
  <!-- Navbar -->
  <div class="container position-sticky z-index-sticky top-0">
    <div class="row">
      <div class="col-12">
        <nav class="navbar navbar-expand-lg  blur border-radius-xl top-0 z-index-fixed shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
          <div class="container-fluid px-0">
            <a class="navbar-brand font-weight-bolder ms-sm-3" href="" rel="tooltip" title="Designed and Coded by Creative Tim" data-placement="bottom" target="_blank">
              Material Kit 2
            </a>


          </div>
        </nav>
        <!-- End Navbar -->
      </div>
    </div>
  </div>
  <header class="header-2">
    <div class="page-header min-vh-75 relative" style="background-image: url('../assets/img/bg2.png')">
      <span class="mask bg-gradient-primary opacity-4"></span>
      <div class="container">
        <div class="row">
          <div class="col-lg-7 text-center mx-auto">
            <h1 class="text-white pt-3 mt-n5">Ajouter promotion</h1>
            {{-- <p class="lead text-white mt-3">Free & Open Source Web UI Kit built over Bootstrap 5. <br /> Join over 1.6 million developers around the world. </p> --}}
          </div>
        </div>
      </div>
    </div>
  </header>
  <div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6">
    <!-- -------- START HEADER 4 w/ search book a ticket form ------- -->
<header>


  <div class="card card-body  shadow-blur mx-3 mx-md-4 mt-n6">
    <div class="container">
      <div class="row border-radius-md justify-content-start pb-4 p-3 mx-sm-0 mx-1 ">



        <div class="col-lg-3 mt-lg-n2 mt-2">
          <label>&nbsp;</label>
          <a href="{{ route('promotion.index') }}">
            <button type="button"  class="btn bg-gradient-primary w-100 mb-0"><i  class="fa fa-arrow-left" aria-hidden="true"></i>
                Retour</button>
          </a>

        </div>
      </div>
    </div>
  </div>
</header>
<section>
    <div class="container py-4">
      <div class="row">
        <div class="col-lg-7 mx-auto d-flex justify-content-center flex-column">
          <h3 class="text-center">Remplir le formulaire </h3>

          <form role="form" id="contact-form" action="{{route('promotion.store')}}" method="post" autocomplete="off">
            @csrf

            <div class="card-body">
              <div class="row">
                <div class="mb-4">
                  <div class="input-group input-group-dynamic mb-4">

                    <input name="name" placeholder="Nom de promotion" class="form-control"  type="text" >
                  </div>
                </div>

              </div>




                <div class="col-md-8 mt-7 ms-7">
                  <button type="submit" class="btn bg-gradient-primary w-100 ">Ajouter</button>
                </div>

            </div>
          </form>
        </div>
      </div>
    </div>
  </section>





  </div>
  <footer class="footer pt-5 mt-5">
    <div class="container">

    </div>
  </footer>



</body>

</html>
