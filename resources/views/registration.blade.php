<!DOCTYPE html>
<html lang="en">
<head>
  <title>registration</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  
</head>
<body class="bg-dark" >

<div class="container w-50 mt-5 bg-white rounded" >
  <h2 class="text-center p-5">Patient Registration Form </h2>
  <form action="insert" method="post">
  @csrf
    <div class="row px-3">
      <div class="col-lg-6">
        <label for="name"class="text-dark mb-2">Name:</label>
        <input type="textbox" class="form-control " id="name" placeholder="Enter name" name="name" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
      </div>
      <div class="col-lg-6">
        <label for="dob"class="text-dark mb-2 ">DOB:</label>
        <input type="textbox" class="form-control" id="dob" placeholder="Enter DOB" name="dob" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
      </div>
    </div>
    <div class="row px-3 mt-3">
      <div class="col-lg-6">
        <label for="gender"class="text-dark mb-2">GENDER:</label>
        <input type="textbox" class="form-control" id="gender" placeholder="Enter gender" name="gender" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
      </div>
      <div class="col-lg-6">
        <label for="bloodgroup"class="text-dark mb-2">BLOOD GROUP:</label>
        <input type="textbox" class="form-control" id="bloodgroup" placeholder="Enter blood group" name="bloodgroup" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
      </div>
    </div>
    <div class="row px-3 mt-3">
      <div class="col-lg-6">
        <label for="email"class="text-dark mb-2">EMAIL:</label>
        <input type="email" class="form-control" id="email_id" placeholder="Enter email" name="email_id" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
      </div>
      <div class="col-lg-6">
      <label for="mobilenumber"class="text-dark mb-2">MOBILE NUMBER:</label>
      <input type="textbox" class="form-control" id="mobile_number" placeholder="Enter mobile number" name="mobile_number" required>
      <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
      </div>
    </div>
    <div class="row px-3 mt-3">
      <div class="col-lg-6">
        <label for="address" class="text-dark mb-2">ADDRESS:</label>
        <input type="textbox" class="form-control" id="address" placeholder="Enter address" name="address" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
      </div>
    </div>
    <div class="row justify-content-end px-3 mt-3 mb-3">
      <div class="col-lg-6 mb-3">
        <button type="submit" class="btn btn-outline-info">Submit</button>
        <a class="btn btn-outline-info m-3 " href="patientLogin" > ALREADY A USER?LOGIN </a>
      </div>
    </div>
    
  </form>
</div>

</body>
</html>