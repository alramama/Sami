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
  <h2>Form EXPENSE CLAIM </h2>
  <form action="uploads.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label for="NAME">NAME</label>
      <input type="text" class="form-control" id="NAME" placeholder="Enter NAME" name="NAME" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="Emp_No">Emp_No</label>
      <input type="Number" class="form-control" id="Emp_No" placeholder="Enter Emp_No" name="Emp_No" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="Date">Date</label>
      <input type="text" class="form-control" id="Date" placeholder="Enter Date" name="Date" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="Amount_Received">Amount_Received</label>
      <input type="text" class="form-control" id="Amount_Received" placeholder="Enter Amount_Received" name="Amount_Received" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="Project">Project</label>
      <input type="text" class="form-control" id="Project" placeholder="Enter Project" name="Project" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
   <div class="form-group">
      <label for="Transfer_sleep">Transfer_sleep</label>
      <input type="file" class="form-control" id="Transfer_sleep" placeholder="Enter Transfer_sleep" name="Transfer_sleep" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <button type="submit" name="save" value="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
</body>
</html>

<br/>
<div class="container">
    <div class="row">
        <div class="col-xs-8 col-xs-offset-2 well">
        <form action="uploads.php" method="post" enctype="multipart/form-data">
            <legend>Select File to Upload:</legend>
            <div class="form-group">
                <input type="file" name="file1" />
            </div>
            <div class="form-group">
                <input type="submit" name="submit" value="Upload" class="btn btn-info"/>
            </div>
            <?php if(isset($_GET['st'])) { ?>
                <div class="alert alert-danger text-center">
                <?php if ($_GET['st'] == 'success') {
                        echo "File Uploaded Successfully!";
                    }
                    else
                    {
                        echo 'Invalid File Extension!';
                    } ?>
                </div>
            <?php } ?>
        </form>
        </div>
    </div>
