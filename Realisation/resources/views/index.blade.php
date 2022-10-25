
<!DOCTYPE html>
<html lang="en" itemscope itemtype="">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <!-- <link rel="icon" type="image/png" href="../assets/img/favicon.png"> -->

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
            <h1 class="text-white pt-3 mt-n5">Tableau des promotions </h1>

          </div>
        </div>
      </div>
    </div>
  </header>
  <div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6">
    <!-- -------- START HEADER 4 w/ search book a ticket form ------- -->



  <div class="card card-body  shadow-blur mx-3 mx-md-4 mt-n6">
    <div class="container">
      <div class="row border-radius-md justify-content-center pb-4 p-3 mx-sm-0 mx-1 ">


        <div class="col-lg-3 mt-lg-n2 mt-2">
          <label class="ms-0"></label>
          <div class="input-group input-group-static">
            <span class="input-group-text"><i class="fas fa-search" aria-hidden="true"></i></span>
            <input class="form-control datepicker" placeholder="Search ... " type="text" id="search">

          </div>
        </div>
        <div class="col-lg-3 mt-lg-n2 mt-2">
          <a href="{{route('promotion.create')}}">
            <label>&nbsp;</label>
            <button type="button"  class="btn bg-gradient-primary w-100 mb-0">+ Ajouter promotion </button>
          </a>


        </div>
      </div>
    </div>
  </div>






    <table id="fresh-table" class="table ">
      <thead >

        <th   data-field="name" data-sortable="true">Nom</th>


        <th class="d-flex  justify-content-end action " data-field="actions" data-formatter="operateFormatter" data-events="operateEvents">Actions</th>
      </thead>
      <tbody id="tbody">
        @forelse ($promotion as $value)
        <tr>
          {{-- <td>{{$value ->id}}</td> --}}
          <td>{{$value ->name}}</td>

          <td class="">
            <div class="d-flex flex-row justify-content-end ">
              <a href="{{ route('promotion.edit', $value->token)}}" ><i class="fa fa-pencil " aria-hidden="true"></i></a>

                <form action="{{ route('promotion.destroy', $value->token)}}" method="post">
                    @csrf
                    @method('DELETE')
                    {{-- <button class="btn bg-gradient-secondary w-50  mb-0" type="submit"><i class="fa fa-trash" aria-hidden="true"></i></button> --}}
                  <button ><i class="fa fa-trash" aria-hidden="true"></i></button>
                  </form>
            </div>



          </td>
        </tr>
        @empty

        @endforelse


      </tbody>
    </table>


        {{-- <div class="row justify-space-between py-2">
          <div class="col-lg-4 mx-auto">
            <ul class="pagination pagination-primary m-4">
              <li class="page-item">
                <a class="page-link" href="javascript:;" aria-label="Previous">
                  <span aria-hidden="true"><i class="material-icons" aria-hidden="true">chevron_left</i></span>
                </a>
              </li>
              <li class="page-item active">
                <a class="page-link" href="javascript:;">1</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="javascript:;">2</a>
              </li>

              <li class="page-item">
                <a class="page-link" href="javascript:;" aria-label="Next">
                  <span aria-hidden="true"><i class="material-icons" aria-hidden="true">chevron_right</i></span>
                </a>
              </li>
            </ul>
          </div>
        </div> --}}

  </div>

  <footer class="footer pt-5 mt-5">
    <div class="container">

    </div>
  </footer>



</body>

</html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $('#search').on('keyup',function(){
         $value=$(this).val();
         $.ajax({
             type : 'get',
             url : 'search',

             data:{'key':$value},
             success:function(data){
                 $('#tbody').html(data);
             }
         });
     })
</script>
</body>
</html>

