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
                <form method="post" action="<?php echo site_url('forgot/update_password'); ?>">
                    <div class="form-group">
                        <input type="hidden" value="<?php if (isset($email_hash)) { $email_hash = $email_hash; } else { $email_hash = ''; } echo set_value('email_hash', $email_hash); ?>" name="email_hash"/>
                        <input type="hidden" value="<?php if (isset($email_code)) { $email_code = $email_code; } else { $email_code = ''; } echo set_value('email_code', $email_code); ?>" name="email_code"/>
                        <label>Email Address</label>
                        <input type="text" name="email" class="form-control" value="<?php if (isset($email)) { $email = $email; } else { $email = ''; } echo set_value('email', $email); ?>"/>
                    </div>
                    <div class="form-group">
                        <label>New Password</label>
                        <input type="password" name="password" class="form-control" value="<?php echo set_value('password'); ?>" />
                        <span class="text-danger"><?php echo form_error('password'); ?></span>
                    </div>
                    <div class="form-group">
                        <label>Confirm New Password</label>
                        <input type="password" name="password_conf" class="form-control" value="<?php echo set_value('password_conf'); ?>" />
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" value="Update My Password" class="btn btn-info"/>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>