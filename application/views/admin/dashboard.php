<?php
defined('BASEPATH') or exit('No direct script access allowed');
if (!$this->session->userdata('admin_data')) {
    redirect('admin/login');
}
?>

<style>
    .row {
        display: flex;
        flex-wrap: wrap;
    }

    .col-lg-3 {
        flex: 1;
        margin: 0 10px; /* Memberikan sedikit margin di antara kotak-kotak */
    }

    .small-box {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        height: 104%; /* Membuat tinggi kotak menjadi 100% agar sama rata */
        text-align: center;
        margin-top: 5;
    }
</style>

<section class="content">
    <div class="container-fluid">
        <p style="font-size:40px; font-family:montserrat; margin-top: 3px; font-weight: lighter;">Selamat Datang Di halaman Dashboard SIMUWEB</p>
        <div class="row">
            <div class="col-lg-3 col-6">
                <div class="small-box bg-info">
                    <div class="inner">
                    <p style="font-size: 30px; font-weight: 600; font-family:roboto; margin: auto;">Mutasi Meninggal Dunia</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-bed"></i> <!-- Menggunakan ikon "bed" untuk kematian -->
                    </div>
                    <a href="<?= base_url('admin/mutasimd') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->  
            <div class="col-lg-3 col-6">
                <div class="small-box bg-success">
                    <div class="inner">
                    <p style="font-size: 30px; font-weight: 600; font-family:roboto; margin: auto;">Mutasi Berpindah Tempat</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-truck-moving"></i> <!-- Menggunakan ikon "truck-moving" untuk berpindah tempat -->
                    </div>
                    <a href="<?= base_url('admin/mutasibt') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <div class="small-box bg-warning">
                    <div class="inner">
                    <p style="font-size: 30px; font-weight: 600; font-family:roboto; margin: auto; ">Mutasi Kelahiran</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-baby"></i> <!-- Menggunakan ikon "baby" untuk kelahiran -->
                    </div>
                    <a href="<?= base_url('admin/mutasikelahiran') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <div class="small-box bg-danger">
                    <div class="inner">
                    <p style="font-size: 30px; font-weight: 600; font-family:roboto; margin: auto;">Daftar Mutasi</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-pie-graph"></i> <!-- Menggunakan ikon "pie-graph" sebagai contoh, sesuaikan dengan ikon yang sesuai -->
                    </div>
                    <a href="<?= base_url('admin/mutasikelahiran') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
        </div>
    </div>
</section>
