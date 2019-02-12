<!DOCTYPE html>
<html>
<head>
    <title>Reset Password | BelgianCarClub</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
</head>

<body>
    <div class="container">
        <br />
        <br />
        <div class="panel panel-default">
            <div class="panel-heading">Reset Password</div>
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
                <form method="post" action="<?php echo site_url('forgot/reset_password'); ?>">
                    <div class="form-group">
                        <label>Enter Email Address</label>
                        <input type="text" name="email" class="form-control" value="<?php echo set_value('email'); ?>" />
                        <span class="text-danger"><?php echo form_error('email'); ?></span>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" value="Reset My Password" class="btn btn-info" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo site_url("login/index"); ?>">Login</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>