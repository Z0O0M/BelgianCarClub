<!DOCTYPE html>
<html>
<head>
 <title>Register | BelgianCarClub</title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
</head>

<body>
    <div class="container">
    <br />
    <br />
    <div class="panel panel-default">
        <div class="panel-heading">Register</div>
            <div class="panel-body">
                <?php
                if($this->session->flashdata('message'))
                {
                    echo '
                    <div class="alert '.$this->session->flashdata("alert").'">
                        '.$this->session->flashdata("message").'
                    </div>
                    ';
                }
                ?>
                <form method="post" action="<?php echo site_url('register/validation'); ?>">
                    <div class="form-group">
                        <label>Enter Your First Name</label>
                        <input type="text" name="user_first_name" class="form-control" value="<?php echo set_value('user_first_name'); ?>" />
                        <span class="text-danger"><?php echo form_error('user_first_name'); ?></span>
                    </div>
                    <div class="form-group">
                        <label>Enter Your Last Name</label>
                        <input type="text" name="user_last_name" class="form-control" value="<?php echo set_value('user_last_name'); ?>" />
                        <span class="text-danger"><?php echo form_error('user_last_name'); ?></span>
                    </div>
                    <div class="form-group">
                        <label>Enter Your Valid Email Address</label>
                        <input type="text" name="user_email" class="form-control" value="<?php echo set_value('user_email'); ?>" />
                        <span class="text-danger"><?php echo form_error('user_email'); ?></span>
                    </div>
                    <div class="form-group">
                        <label>Enter Password</label>
                        <input type="password" name="user_password" class="form-control" value="<?php echo set_value('user_password'); ?>" />
                        <span class="text-danger"><?php echo form_error('user_password'); ?></span>
                    </div>
                    <div class="form-group">
                        <label>Confirm Password</label>
                        <input type="password" name="user_confirm_password" class="form-control" value="<?php echo set_value('user_confirm_password'); ?>" />
                    </div>
                    <div class="form-group">
                        <input type="submit" name="register" value="Register" class="btn btn-info" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo site_url("login/index"); ?>">Login</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>