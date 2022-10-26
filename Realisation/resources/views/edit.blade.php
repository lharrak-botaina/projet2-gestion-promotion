
<!DOCTYPE html>
<html lang="en" itemscope itemtype="">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets/img/apple-icon.png')}}">
  <!-- <link rel="icon" type="image/png" href="../assets/img/favicon.png"> -->
  <title>
    Material Kit 2 by Creative Tim
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="{{asset('assets/css/nucleo-icons.css')}}" rel="stylesheet" />
  <link href="{{asset('assets/css/nucleo-svg.css')}}" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="{{asset('assets/css/material-kit.css?v=3.0.4')}}" rel="stylesheet" />
</head>

<!DOCTYPE html>
<html lang="en" itemscope itemtype="">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets/img/apple-icon.png')}}">
  <!-- <link rel="icon" type="image/png" href="../assets/img/favicon.png"> -->
  <title>
    Material Kit 2 by Creative Tim
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="{{asset('assets/css/nucleo-icons.css')}}" rel="stylesheet" />
  <link href="{{asset('assets/css/nucleo-svg.css')}}" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="{{asset('assets/css/material-kit.css?v=3.0.4')}}" rel="stylesheet" />
</head>

<body class="presentation-page bg-gray-200">
  <!-- Navbar -->
  <div class="container position-sticky z-index-sticky top-0">
    <div class="row">
      <div class="col-12">
        <nav class="navbar navbar-expand-lg  blur border-radius-xl top-0 z-index-fixed shadow position-absolute my-3 py-2 start-0 end-0 mx-4">


            <img class="logo" src="{{asset('assets/img/B.png')}}" alt="">




      </nav>
        <!-- End Navbar -->
      </div>
    </div>
  </div>
  <header class="header-2">
    <div class="page-header min-vh-75 relative" style="background-image: url('{{asset('assets/img/bg2.png')}}">
      <span class="mask bg-gradient-primary opacity-4"></span>
      <div class="container">
        <div class="row">
          <div class="col-lg-7 text-center mx-auto">
            <h1 class="text-white pt-3 mt-n5">Modifier promotion</h1>
            {{-- <p class="lead text-white mt-3">Free & Open Source Web UI Kit built over Bootstrap 5. <br /> Join over 1.6 million developers around the world. </p> --}}
          </div>
        </div>
      </div>
    </div>
  </header>
  <div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6">
    <!-- -------- START HEADER 4 w/ search book a ticket form ------- -->
<header>


  <div class="card card-body  shadow-blur mx-3 mx-md-4 mt-n6 justify-content-center">
    <div class="container">
      <div class="row border-radius-md d-flex  pb-4 p-3 mx-sm-0 mx-1 ">

        <input type="hidden" id="token" value="{{$promotion->token}}">
        <form action="{{ route('promotion.update',$promotion->token) }}" role="form" id="contact-form"  method="post" autocomplete="off">
            @csrf
            @method('PUT')


            <div class="card-body">
              <div class="row">
                <div class="mb-4">
                  <div class="input-group input-group-dynamic mb-4">

                    <input  value="{{$promotion->name}}"  name="name" placeholder="Nom de promotion" class="form-control"  type="text" >
                  </div>
                </div>

              </div>




            </div>
            <div class="d-flex justify-content-between mr-7">


                <a class="lien-btn" href="{{route('student.create',$promotion->token)}}">
                <button type="button"  class="btn bg-gradient-primary w-50"> Ajouter apprenant </button>
                </a>

                    <a class="lien-btn lien2">
                    <button type="submit"  class="btn bg-gradient-primary w-50 "> Modifier </button>
                    </a>

        </div>

          </form>
        {{-- <div class="col-lg-3 mt-lg-n2 mt-2 input-group ">

          <span class="input-group-btn">
          <a >
            <button type="button"  class="btn bg-gradient-primary w-100 mb-0"> Modifier </button>
          </a>
          </span>
          <input  name="name" placeholder="Nom de promotion" class="form-control name-input "  type="text" >
        </div> --}}
      </div>
    </div>
  </div>
</header>
<section>
    <div class="container p">
      <div class="row">
        <div class="col-lg-7 mx-auto d-flex justify-content-end pb-5">
          {{-- <h3 class="text-center">Modifier le formulaire </h3> --}}
          <div class="col-lg-3 mt-lg-n2 mt-2">
            <label class="ms-0"></label>
            <div class="input-group input-group-static">
              <span class="input-group-text"><i class="fas fa-search" aria-hidden="true"></i></span>
              <input class="form-control datepicker student-search" placeholder="Search ... " type="text" id="search">

            </div>
          </div>

        </div>
      </div>
    </div>
  </section>
  <section>


    <table  class="table ">
        <thead >

          <th   data-field="name" data-sortable="true">Nom</th>

          <th   data-field="name" data-sortable="true">Premon</th>
          <th   data-field="name" data-sortable="true">Email</th>


          <th class="d-flex  justify-content-end action " data-field="actions" data-formatter="operateFormatter" data-events="operateEvents">Actions</th>
        </thead>
        <tbody id="tbody">
            @foreach ($studentPromotion as $student )
          <tr>
            {{-- <td>{{$value ->id}}</td> --}}
            <td>{{$student->last_name}}</td>
            <td>{{$student->first_name}}</td>
            <td>{{$student->email}}</td>


            <td class="">
                <div class="d-flex flex-row justify-content-end ">
                    <a href="{{route('student.edit',$student->id)}}" ><i class="fa fa-pencil " aria-hidden="true"></i></a>

                      <form action="{{route('student.destroy',$student->id)}}" method="POST">
                          @csrf
                          @method('DELETE')
                          {{-- <button class="btn bg-gradient-secondary w-50  mb-0" type="submit"><i class="fa fa-trash" aria-hidden="true"></i></button> --}}
                        <button type="submit" id="trash-btn"><i class="fa fa-trash" aria-hidden="true"></i></button>
                        </form>
                  </div>




            </td>
          </tr>


          @endforeach
        </tbody>
      </table>
  </section>



  {{-- <div>
      @foreach ($studentPromotion as $student )
      <h2>{{$student->first_name}}</h2>
      <a href="{{route('student.edit',$student->id)}}">edit</a>
      <form action="{{route('student.destroy',$student->id)}}" method="POST">
          @csrf
          @method('DELETE')
         <button type="submit">delete</button>
      </form>
      @endforeach
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
        $token=$('#token').val();
         $.ajax({
             type : 'get',
             url : '/search',

             data:{'key':$value, 'token':$token},
             success:function(data){
                 $('#tbody').html(data);
             }
         });
     })
</script>







<script>


//   $('#search').on('keyup',function(){
//       $value=$(this).val();
//       $token=$('#token').val();
//           $.ajax({
//           type : 'get',
//           url : '/student/searchStudent',
//           data:{'key':$value, 'token':$token},
//           success:function(data){
//           $('#div').html(data);
//       }})
//   })
// </script>
