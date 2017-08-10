<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
?>
<!DOCTYPE html>
<html>

    <head>
        <title>Calendar</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.3.0/css/mdb.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
        <link href="assets/css/styles.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div class="container"> <span class="text-center"> <?php echo $this->session->flashdata('login-fail'); ?></span>
            <div class="col-md-6 offset-md-3">
            <div class="card mt-3">
                <div class="card-block">
                    <!--Header-->
                    <div class="text-center"> 
                        <h3><i class="fa fa-lock"></i> Login:</h3>
                        <hr class="mt-2 mb-2">
                    </div>

                    <!--Body-->
                    <form action="<?= base_url(); ?>/Welcome/admin_check" method="post">
                        <div class="md-form">
                            <i class="fa fa-envelope prefix"></i>
                            <input type="text" id="form2" required class="form-control" name="username" placeholder="Username">
                        </div>

                        <div class="md-form">
                            <i class="fa fa-lock prefix"></i>
                            <input type="password" id="form4" required class="form-control" name="password" placeholder="Password">
                        </div>

                        <div class="text-center">
                            <button class="btn btn-deep-purple" type="submit" name="submit">Login</button>
                        </div>
                    </form>

                </div>

                </div>

            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.3.0/js/mdb.min.js"></script>


    </body>

</html>