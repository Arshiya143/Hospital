<!DOCTYPE html>
<html lang="en">
<head>
  <title>patient login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="bg-dark">

<div class="container w-50 mt-5 bg-white rounded">
  <h2 class="text-center p-3">Patient Login </h2>
  <form action="/action_page.php">
    <div class="mb-3 mt-3">
      <div class="row px-3">
       <div class="col-lg-6">
         <label for="username"class="text-dark mb-2">USERNAME:</label>
         <input type="textbox" class="form-control" id="pusername" placeholder="Enter username" name="pusername" required>
         <div class="valid-feedback">Valid.</div>
         <div class="invalid-feedback">Please fill out this field.</div>
        </div>
      </div>
    </div>
    <div class="mb-3">
         <div class="row px-3">
            <div class="col-lg-6">
               <label for="pwd"class="text-dark mb-2">Password:</label>
               <input type="password" class="form-control" id="ppwd" placeholder="Enter password" name="pswdp" required>
               <div class="valid-feedback">Valid.</div>
               <div class="invalid-feedback">Please fill out this field.</div>
             </div>
           </div>
    </div>
    <div class="row justify-content-start px-3 mt-3 mb-3">
      <div class="col-lg-6 mb-3">
    <button type="submit" class="btn btn-outline-info">Submit</button>
    <a class="btn btn-outline-info  m-3 " href="registration" >  NEW USER?REGISTER. </a>
</div>
</div>
  </form>
</div>

</body>
</html>
