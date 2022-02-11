<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add EXPENSE_CLAIM</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Form EXPENSE CLAIM </h2>
  <form method="post" action="Insert_Expence.php" class="needs-validation" novalidate>
    <div class="form-group">
      <label for="Date">Date</label>
      <input type="date" class="form-control" id="Date" placeholder="Enter Date" name="Date" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="Name">Name</label>
      <input type="text" class="form-control" id="Name" placeholder="Enter Name" name="Name" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="Department">Department</label>
      <input type="text" class="form-control" id="Department" placeholder="Enter Department" name="Department" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="Project_Name">Project_Name</label>
      <input type="text" class="form-control" id="Project_Name" placeholder="Enter Project_Name" name="Project_Name" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>

    <div class="form-group">
      <label for="Location">Location</label>
      <input type="text" class="form-control" id="Location" placeholder="Enter Location" name="Location" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>

    <div class="form-group">
      <label for="AX_Project">AX_Project</label>
      <input type="text" class="form-control" id="AX_Project" placeholder="Enter AX_Project" name="AX_Project" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
   <div class="form-group">
      <label for="Total_Expenses">Total_Expenses</label>
      <input type="text" class="form-control" id="Total_Expenses" placeholder="Enter Total_Expenses" name="Total_Expenses" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <button type="submit" name="save" value="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>
