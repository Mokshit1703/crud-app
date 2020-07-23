<html>
<head>
<title> Crud Application </title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
<div class= "row" style="padding-top: 10px;">
<div class="col-6"><h1> View Users </h1></div>
<div class="col-6">
    <a href="Create" class="btn btn-primary">Create</a>
</div>
</div>
<?php
$success = $this->session->userdata('success');
if($success != ""){
?>
<div class="alert alert-success"><?php echo $success;?></div>
<?php } ?>
<?php
$failure = $this->session->userdata('failure');
if($failure != ""){
?>
<div class="alert alert-failure"><?php echo $failure;?></div>
<?php } ?>
<hr>
<div class="row">
    <div class="col-md-7">
        <table class="table table-striped">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th width="100">Edit</th>
            <th width="100">Delete</th>
        </tr>
        <?php if(!empty($users)) { foreach($users as $user){?>
        <tr>
            <td><?php echo $user['user_id'] ?></td>
            <td><?php echo $user['name'] ?></td>
            <td><?php echo $user['email'] ?></td>
            <td>
                <a href="<?php echo base_url().'index.php/user/edit/'.$user['user_id']?>" class= 'btn btn-primary'> Edit </a>
            </td>
            <td>
                <a href="<?php echo base_url().'index.php/user/delete/'.$user['user_id']?>" class= 'btn btn-danger'> Delete </a>
            </td>
        </tr>
        <?php } } else { ?>
        <tr>
            <td colspan="5">Records not found</td>
        </tr>
        <?php } ?>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>