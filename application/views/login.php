<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() . 'public/assets/images/favicon.png' ?>">
    <title>Login SPK Pemilihan Karyawan Terbaik Metode AHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
    <link href="<?= base_url() . 'public/css/style.css' ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<body>
    <div class="row">
        <div class="orange container-fluid col-3"></div>
        <div class="ungu container-fluid col-3 offset-9 position-absolute bottom-0 end-0"></div>
        <div class="merah container-fluid col-3 offset-6"></div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="login container-fluid col-6 offset-6 animate__animated animate__bounce animate__backInDown"></div>
        </div>
        <div class="img row col-8 ">
            <a href='<?php echo base_url() ?>'><img class="col-9 offset-2 animate__animated animate__bounce animate__rubberBand" src="<?php echo base_url() . 'public/assets/images/l-logo.png' ?>"></a></br>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="judul-login col-2 offset-8">
                <p class="fs-1 col animate__animated animate__bounce animate__rubberBand">LOGIN</p>
            </div>
        </div>
        <form action=" <?php echo site_url('login/cek'); ?>" method="post" class="col-4 offset-7">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label animate__animated animate__bounce animate__backInDown">Username</label>
                <input type="text" class="form-control form-control-line animate__animated animate__bounce animate__backInDown" name="username" placeholder="Username" value="<?= set_value('username') ?>">
                <div class="text-danger"><?= form_error('username') ?></div>

            </div>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label animate__animated animate__bounce animate__backInDown">Password</label>
                <input type="password" name="password" class="form-control form-control-line animate__animated animate__bounce animate__backInDown" placeholder="Password" value="<?= set_value('password') ?>">
                <div class="text-danger"><?= form_error('password') ?></div>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input animate__animated animate__bounce animate__backInDown" id="exampleCheck1">
                <label class="form-check-label animate__animated animate__bounce animate__backInDown" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn-login col-12 btn animate__animated animate__bounce animate__rotateInUpRight">LOGIN</button>
        </form>
        <div class="col-sm-12 text-center">
            <?php echo $this->session->flashdata('error'); ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
    <script src="<?= base_url() . 'public/assets/plugins/jquery/jquery.min.js' ?>"></script>
    <script src="<?= base_url() . 'public/assets/plugins/bootstrap/js/tether.min.js' ?>"></script>
    <script src="<?= base_url() . 'public/assets/plugins/bootstrap/js/bootstrap.min.js' ?>"></script>
    <script src="<?= base_url() . 'public/js/waves.js' ?>"></script>
</body>

</html>