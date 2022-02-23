<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add cash_advance</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container">
  <h2>Biding>
  <form action="uploads.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label for="Bid_name">Bid_name</label>
      <input type="text" class="form-control" id="Bid_name" placeholder="Enter Bid_name" name="Bid_name" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="Bid_No">Bid_No</label>
      <input type="text" class="form-control" id="Bid_No" placeholder="Enter Bid_No" name="Bid_No" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="Reference_number">Reference_number</label>
      <input type="text" class="form-control" id="Reference_number" placeholder="Enter Reference_number" name="Reference_number" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="Duration_of_contract">Duration_of_contract</label>
      <input type="text" class="form-control" id="Duration_of_contract" placeholder="Enter Duration_of_contract" name="Duration_of_contract" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
   <div class="form-group">
      <label for="End_user">End_user</label>
      <input type="text" class="form-control" id="End_user" placeholder="Enter End_user" name="End_user" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="Last_date_inquiries">Last_date_inquiries</label>
      <input type="date" class="form-control" id="Last_date_inquiries" placeholder="Enter Last_date_inquiries" name="Last_date_inquiries" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
   <div class="form-group">
      <label for="Deadline">Deadline</label>
      <input type="date" class="form-control" id="Deadline" placeholder="Enter Deadline" name="Deadline" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
   <div class="form-group">
      <label for="Bid_opening_date ">Bid_opening_date</label>
      <input type="date" class="form-control" id="Bid_opening_date " placeholder="Enter Bid_opening_date " name="Bid_opening_date" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="Expected_award_Date ">Expected_award_Date</label>
      <input type="date" class="form-control" id="Expected_award_Date " placeholder="Enter Expected_award_Date " name="Expected_award_Date" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
   <div class="form-group">
      <label for="filename ">filename</label>
      <input type="file" class="form-control" id="Bid_opening_date " placeholder="Enter Bid_opening_date " name="file1" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <input type="submit" name="submit" value="Upload" class="btn btn-primary">Submit</button>
  </form>
</div>
<?php if(isset($_GET['st'])) { ?>
<div class="alert alert-danger text-center">
<?php if ($_GET['st'] == 'success') 
{
  echo "File Uploaded Successfully!";
}
else
  {
  echo 'Invalid File Extension!';
  } ?>
  </div>
  <?php } ?>

</body>
</html>

