<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 echo $this->session->flashdata('add_ics');
?>

<!DOCTYPE html>
<html>

    <head>
        <title>Calendar</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        <link href="../assets/css/styles.css" rel="stylesheet" type="text/css" />


    </head>

    <body><?php  ?>

        <nav class="navbar navbar-toggleable-md sticky-top navbar-light bg-faded">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#">Admin</a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
					<li><a href="<?= base_url()?>/welcome/admin_home" class="btn btn-deep-purple">Create User</a></li>
                    <li><a href="<?= base_url()?>/admin/viewuser" class="btn btn-deep-purple">View All Users</a></li>
                    <li><a href="<?= base_url()?>/admin/logout" class="btn btn-primary">Logout</a></li>
                </ul>

            </div>
        </nav>
        <div class="container">
		<span style="color:red;" id="userexist"></span>
            <form method="post" action="<?=base_url()?>/Admin/add_ics" class="mt-3">
                  <div class="form-group row">
                    <label for="example-text-input" class="col-2 col-form-label">Username</label>
                    <div class="col-10">
                        <input class="form-control" required type="text" value="" name="username" id="username">
                    </div> 
                </div>
                                    <div class="form-group row">
                        <label for="example-text-input" class="col-2 col-form-label">Password</label>
                        <div class="col-10">
                            <input class="form-control" required type="password" value="" name="password" id="example-text-input">
                        </div>
                    </div>
                                <div class="form-group row">
                    <label for="example-text-input" class="col-2 col-form-label">URL</label>
                    <div class="col-10">
                        <input class="form-control" required type="text" name="url" value="" id="example-text-input">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary float-right" name="submit" value="submit">Submit</button> 
            </form>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<script>
		$(document).ready(function(){
			$("#username").val('');
	$("#username").keyup(function(){
      var user = $(this).val();
      $.ajax({
		url:'<?=base_url()?>Users/user_exist',  
		method:'post',
        data:{'username':user},
        success:function(data){
			if(data != 0){
				$("#userexist").html('Username "'+$("#username").val()+' "already there');
				$("#username").val('');

			}
		},
        error:function(data){
			alert('Ajax to user check failed');
			alert('Ajax to user check failed');
		}  		
	  }) 
	
	})
})
</script>
    </body>

</html>