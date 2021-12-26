<?= $this->extend('template_dashboard') ?>

<?= $this->section('konten') ?>

<div class="container">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Beranda</h3>
        </div>
        <div class="card-body">
            Halo ini beranda<br />
            Email yang diisikan : <?= $nama ?> <br />
            Password : <?= $password ?>
        </div>
    </div>
</div>

<?= $this->endSection() ?>