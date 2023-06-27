<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<?= $this->load->view('template/header', '', TRUE) ?>

<div class=" layer-login container-fluid col-6 position-absolute top-50 start-50 translate-middle animate__animated animate__bounce animate__backInDown">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="judul animate__animated animate__bounce animate__fadeInBottomRight">Users</h1>
            </div>
        </div>
    </div>
    <div class="layer-login-dalam container-fluid col-11 position-absolute top-50 start-50 translate-middle animate__animated animate__bounce animate__backInUp">
        <div class="container-fluid justify-content-center animate__animated animate__bounce animate__fadeInBottomRight">
            <div class="row">
                <div class="col-12">
                    <i class="userku bx bxs-user col-12"></i>
                </div>
            </div>
            <div class="row">
                <div class="col-12 d-flex justify-content-center">
                    <h3>Kevin Arsan</h3>
                </div>
                <div class="col-12 d-flex justify-content-center">
                    <h4>Admin</h4>
                </div>
            </div>
            <div class="container row col-12 text-center justify-content-center ml-2">
                <div class="col-3 text-center">
                    <?= anchor('pengguna/tambah', 'SingUp', 'class="logout col-10 btn"') ?>
                </div>
                <div class="col-4 text-center">
                    <a class="logout col-10 btn" href="<?= site_url('password') ?>" role="button">Password</a>
                </div>
                <div class="col-3 text-center">
                    <a class="logout col-10 btn nav-link" href="<?= site_url('login/logout') ?>" aria-expanded="false"><i class="mdi mdi-account"></i>Logout</a>
                </div>
            </div>
        </div>
    </div>
</div>