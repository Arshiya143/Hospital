<!DOCTYPE html>
<html lang="en">
<head>
  <title>registration</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <meta name="csrf-token" content="{{ csrf_token() }}" />
</head>
<body class="bg-dark" >

<!-- <div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 280px;"> -->
<div class="d-flex align-items-start">
  <div class="nav flex-column nav-pills mt-5 p-5 w-25" id="v-pills-tab" role="tablist" aria-orientation="vertical">
    <button class="nav-link active mb-4" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Profile</button>
    <button class="nav-link mb-4" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Add Doctor</button>
    <button class="nav-link mb-4" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false" >UpdateDetails</button>
    <button class="nav-link mb-4" id="v-pills-payment-tab" data-bs-toggle="pill" data-bs-target="#v-pills-payment" type="button" role="tab" aria-controls="v-pills-payment" aria-selected="false">PaymentRequest</button>
    <button class="nav-link mb-4" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Records</button>
    <button class="nav-link mb-4" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Log Out</button> 
  </div>
  <div class="tab-content w-50" id="v-pills-tabContent">
    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">...</div>
    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab" tabindex="0">
      <div class="container w-100 mt-5 ml-5 bg-white rounded ">
        <h2 class="text-center p-4">Add Doctor</h2>
        <form action="insert" method="post">
          @csrf
          <div class="row px-3 py-2 mt-3">
            <div class="col-lg-6">
              <label for="name"class="text-dark">Name:</label>
              <input type="textbox" class="form-control" id="name" name="name" >
            </div>       
            <div class="col-lg-6">
              <label for="age"class="text-dark">Age:</label>
              <input type="textbox" class="form-control" id="age"  name="age" >
            </div>
          </div>
          <div class="row px-3 py-2 mt-3">
            <div class="col-lg-6">
              <label for="gender"class="text-dark">Gender:</label>
              <input type="textbox" class="form-control" id="gender" name="gender" >
            </div>
            <div class="col-lg-6">
                <label for="specialization"class="text-dark ">Specialization:</label>
                <select class="form-select" aria-label="Default select example" id="specialization"  name="specialization">
                <option selected></option>
                  <option value="1">Cardiologist</option>
                  <option value="2">Opthalmologist</option>
                  <option value="3">Dermatologist</option>
                  <option value="4">Orthopedics</option>
                  <option value="5">Pediatrics</option>
                </select>
              </div>
          </div>
          <div class="row px-3 py-2 mt-3">
            <div class="col-lg-6">
              <label for="experience"class="text-dark">Experience:</label>
              <input type="textbox" class="form-control" id="experience" name="experience" >
            </div>
            <div class="col-lg-6">
              <label for="mobilenumber"class="text-dark">Mobile Number:</label>
              <input type="textbox" class="form-control" id="mobilenumber"  name="mobilenumber" >
            </div>
          </div>
          <div class="row px-3 py-2 mt-3">
            <div class="col-lg-6">
              <label for="languagespoken" class="text-dark">Language Spoken:</label>
              <input type="textbox" class="form-control" id="languagespoken"  name="languagespoken" >
            </div>
            <div class="col-lg-6">
                <label for="schedule" class="text-dark">Schedule:</label>
                <input type="textbox" class="form-control" id="dschedule"  name="dschedule" >
            </div>
          </div>
          <div class="row px-3 py-2 mt-3">
            <div class="col-lg-12 mb-3">
                <button type="submit" class="btn btn-outline-info w-100 align-items-center">Add Doctor</button>  
            </div>
          </div>
        </div>
      </form>
    </div>
    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab" tabindex="0">
      <div class="container bg-light w-100 mt-5 p-5 rounded search_result">
        <!-- <form action="search" method="get">
        @csrf -->
        <div class="row">
          <div class="input-group align-items-start">
            <label class="form-label mt-2" for="form1">Enter Doctor ID: &nbsp; &nbsp;</label>
            <div class="form-outline">
              <input type="search" id="form1" class="form-control" placeholder="Search by Doctor ID" name="search"/>
            </div>
            <button type="button" class="btn btn-info" onclick="getMessage()">
              <i class="fa fa-search"></i>
            </button>
          </div>
        </div>
        <!-- </form> -->
      </div>
    </div>
    <!-- <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab" tabindex="0">...</div>
    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab" tabindex="0">...</div> -->
  </div>
</div>
  <!-- </div> -->
  <script>
  $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
         function getMessage(){
          var search = $('#form1').val();
            $.ajax({
               type:'GET',
               url:'search',
               dataType: 'json',
               data:
               {
                  "id" : search
               },
               success: function(data) {
                $(".doctor_info").empty();
                $(".search_result").append("<div class='row doctor_info'><p class='text-center mt-3 text-decoration-underline'><strong>Doctor ID:   </strong>"
                +data[0][0].d_id+
                "</p><p><strong>Name:   </strong>"
                +data[0][0].name+
                "</p><p><strong>Age:   </strong>"
                +data[0][0].age+
                "</p><p><strong>Gender:   </strong>"
                +data[0][0].gender+
                "</p><p><strong>Specialization:   </strong>"
                +data[0][0].specialization+
                "</p><p><strong>Experience:   </strong>"
                +data[0][0].experience+
                "</p><p><strong>Language Spoken:   </strong>"
                +data[0][0].languagespoken+
                "</p><p><strong>Mobile Number:   </strong>"
                +data[0][0].mobilenumber+
                "</p><p><strong>Schedule:   </strong>"
                +data[0][0].dschedule+
                "</p></div>");
                }
            });
         }
      </script>
</body>
</html>