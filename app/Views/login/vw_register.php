<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <style>
        @import "https://use.fontawesome.com/releases/v5.5.0/css/all.css";
        body{
            margin: 0;
            padding: 0;
            font-family: sans-serif;
            background: url(img/bge.jpg) no-repeat;
            background-size: cover;
            
        }
        .login-box{
            width: 280px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            color: white;
        }
        .login-box h1{
            float: left;
            font-size: 40px;
            border-bottom: 6px solid #4caf50;
            margin-bottom: 50px;
            padding: 13px 0;
        }
        .textbox{
            width: 100%;
            overflow: hidden;
            font-size: 20px;
            padding: 8px 0;
            margin: 8px 0;
            border-bottom: 1px solid #4caf50;
        }
        .textbox i{
            width: 26px;
            float: left;
            text-align: center;
        }
        .textbox input{
            border: none;
            outline: none;
            background: none;
            color: white;
            font-size: 18px;
            width: 80%;
            float: left;
            margin: 0 10px;
        }
        .btn{
            width: 100%;
            background: none;
            border: 2px solid #4caf50;
            color: white;
            padding: 5px;
            font-size: 18px;
            cursor: pointer;
            margin: 12px 0;
        }
    </style>
</head>
<body>
    <?php if (!empty(session()->getFlashdata('error'))) : ?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert" style="margin-bottom: 50px; background-color: transparent;color: white">
        <h4>Periksa Entrian Form</h4>
    </hr />
    <?php echo session()->getFlashdata('error'); ?>
    </div>
    <?php endif; ?>
    <div class="login-box">
        <h1>Register</h1>
    <form method="post" action="<?= base_url(); ?>/register/process">
        <?= csrf_field(); ?>
        <div class="textbox">
            <i class="fas fa-envelope"></i>
            <input type="text" class="form-control" id="email" name="email" placeholder="Email">
        </div>
        <div class="textbox">
            <i class="fas fa-user"></i>
            <input type="text" class="form-control" id="username" name="username" placeholder="Username">
        </div>
        <div class="textbox">
            <i class="fas fa-lock"></i>
            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
        </div>
        <div class="textbox">
            <i class="fas fa-lock"></i>
            <input type="password" class="form-control" id="password_conf" name="password_conf" placeholder="Confirm Password">
        </div>
        <div class="textbox">
            <i class="fas fa-user-circle"></i>
            <input type="text" class="form-control" id="name" name="name" placeholder="Nama">
        </div>

        <button type="submit" class="btn btn-primary">Register</button>

    </form>
</div>
</body>
</html>