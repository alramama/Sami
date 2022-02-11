<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add New Employee</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container">
  <h2> New Employee </h2>
  <form method="post" action="Add_new_employee_mysql.php" class="needs-validation" novalidate>
    <div class="form-group">
      <label for="NAME">NAME</label>
      <input type="text" class="form-control" id="NAME" placeholder="Enter NAME" name="NAME" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="Eqama_no">Eqama no</label>
      <input type="number" class="form-control" id="Eqama_no" placeholder="Enter Eqama_no" name="Eqama_no" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="Eqama_Expire_date">Eqama Expire date</label>
      <input type="date" class="form-control" id="Department" placeholder="Enter Eqama Expire date" name="Eqama_Expire_date" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="Birthday">Birthday</label>
      <input type="date" class="form-control" id="Birthday" placeholder="Enter Birthday" name="Birthday" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>

    <div class="form-group">
      <label for="Blood_Group">Blood Group</label>
      <input type="text" class="form-control" id="Blood_Group" placeholder="Enter Blood Group" name="Blood_Group" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>

    <div class="form-group">
      <label for="job title Iqama">Job Title Iqama</label>
      <input type="text" class="form-control" id="job title Iqama" placeholder="Enter Job Title Iqama" name="job_title_Iqama" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
   <div class="form-group">
      <label for="job title office">Job Title Office</label>
      <input type="text" class="form-control" id="job_title_office" placeholder="Enter Job Title Office" name="job_title_office" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <button type="submit" name="save" value="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>
