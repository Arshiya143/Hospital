<!DOCTYPE html>
<html lang="en">
<head>
  <title>make appointment</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  
</head>
<body class="bg-secondary" >

<div class="container mt-3 ">
  <h2>Make Appointment</h2>
  <form action="/action_page.php">
    <div class="mb-3 mt-3">
      <label for="selectdepartment"class="text-white">Select Department:</label>
      <input type="textbox" class="form-control" id="selectdepartment"  name="selectdepartment" required>
      <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="mb-3">
      <label for="selectdoctorname"class="text-white">Select Doctor Name:</label>
      <input type="textbox" class="form-control" id="selectdoctorname"  name="selectdoctorname" required>
      <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="mb-3">
      <label for="consultantfee"class="text-white">Consultant Fee:</label>
      <input type="textbox" class="form-control" id="consultantfee"  name="consultantfee">
      </div>
    <div class="mb-3">
      <label for="date"class="text-white">Date:</label>
      <input type="textbox" class="form-control" id="date" name="date" required>
      <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="mb-3">
      <label for="time"class="text-white">Time:</label>
      <input type="textbox" class="form-control" id="time"  name="time" required>
      <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    
    <button type="submit" class="btn btn-outline-info">Book Appointment</button>
    <button type="submit" class="btn btn-outline-info">Edit Appointment</button>
  </form>
</div>

</body>
</html>
