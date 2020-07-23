<html>
<head>
<title> Crud Application </title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
<h1> Create Users </h1>
<form method="post" name="Create User" action = 'http://localhost/curd/index.php/User/Create'>
<hr>
  <div class="form-group col-md-6">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" aria-describedby="name" name="name" value= "<?php echo set_value('name');?>">
    <?php echo form_error('name');?>
    
    
  </div>
  <hr>
  <div class="form-group col-md-6">
    <label for="email">Email address</label>
    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" value= "<?php echo set_value('email');?>">
    <?php echo form_error('email');?>
    
    
  </div>
  
  <hr>
  <button type="submit" class="btn btn-primary">Create</button>
  <button type="reset" class="btn btn-secondary" onclick="window.location.href='index'">Cancle</button>
</form>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>