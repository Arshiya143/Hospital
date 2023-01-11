<!DOCTYPE html>
<html>
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
    
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
      <link rel="stylesheet" href="{{url('/css/img2.jpg')}}">

      <title>Hospital Management System</title>

      <!-- Fonts -->
      <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
      <style>
        body{
            background-image:url({{url('images/img2.jpg')}});
            background-repeat: no-repeat;
            background-size: cover;
        }
      </style>  
    </head>
    <body>

    {{--login and register section--}}
    <div class="container">
      <div class="row mt-3">
        <div class="col-sm-1 d-flex justify-content-center ">
          <a class="btn btn-outline-success btn-lg m-3 " href="registration" > REGISTER </a>
        </div>
        <div class="col-sm-1">
          <button type="button" class="btn btn-outline-success btn-lg m-3 dropdown-toggle" data-bs-toggle="dropdown">LOGIN AS</button>
          <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="adminLogin">ADMIN</a></li>
              <li><a class="dropdown-item" href="doctorLogin">DOCTOR</a></li>
              <li><a class="dropdown-item" href="patientLogin">PATIENT</a></li>

        </div>
      </div>
    </div>
    {{--end section--}}
   
    {{--footer section--}}
    <footer class="bg-secondary text-white text-center text-lg-start fixed-bottom">
      <div class="container p-4">
        <div class="row">
          <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
           <p>
            Our  Hospital Management system includes registration of patients, storing their
              details into the system, and also booking their appointments with doctors.
              Our software has the facility to give a unique id for every patient and stores the details
              of every patient and the staff automatically.
            </p>
          </div>
          <div class="col-lg-6 col-md-12 mb-4 mb-md-0 text-dark mt-3">
            <strong>Address: <br>
                    Veeresh Nagar Cross, Sedam Rd, behind MRMC, Kalaburagi, Karnataka 585101
                    Phone: 084722 27252
            </strong>
          </div>
        </div>
      </div>
    </footer>
    {{--end section--}}

  </body>
</html>
