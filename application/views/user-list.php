<?php
$dis= ''; $i=0;
foreach($info as $key => $val){ $i++;
  $username = $val['username']; $url = $val['file'];	
  $dis.= '<tr><td>'.$i.'</td><td>'.$username.'</td><td>'.$url.'</td></tr>';
}
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
<title>Calendar</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<link href="../assets/css/styles.css" rel="stylesheet" type="text/css" />


</head>
<body>
<nav class="navbar navbar-toggleable-md sticky-top navbar-light bg-faded">
<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<a class="navbar-brand" href="#">Admin</a>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav ml-auto">
<li><a href="<?= base_url()?>/welcome/admin_home" class="btn btn-deep-purple">Create User</a></li>
<li><a href="<?= base_url()?>/admin/viewuser" class="btn btn-deep-purple">View All Users</a></li>
<li><a href="<?= base_url()?>/admin/logout" class="btn btn-primary">Logout</a></li></ul>

</div>
</nav>
<div class="container">
<table class="table table-striped mt-3" id="viewtable">
<thead>
<tr>
<th>#</th>
<th>Username</th>
<th>Url</th>
</tr>
</thead>
<tbody>
<?= $dis; ?>
</tbody>
</table>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<script src="../assets/datatables/media/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="../assets/datatables/media/js/dataTables.bootstrap4.min.js" type="text/javascript"></script>
<script>
$(document).ready(function () {
$('#viewtable').DataTable();
});
</script>
</body>
</html>
