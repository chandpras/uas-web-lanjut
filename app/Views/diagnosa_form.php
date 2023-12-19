<?= $this->extend('app/layout_user') ?>

<?= $this->section('title') ?>
    Diagnose
<?= $this->endSection() ?>

<?= $this->section('pagetitle') ?>
    Diagnose
<?= $this->endSection() ?>

<?= $this->section('activetitle') ?>
    Diagnose
<?= $this->endSection() ?>

<?= $this->section('dashboard') ?>
    collapsed
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<h1>Form Diagnosa</h1>

    <form action="<?= base_url('diagnosa_result') ?>" method="post">
        <!-- Daftar gejala dalam bentuk checkbox -->
        <?php foreach ($gejala as $key => $value): ?>
            <input type="checkbox" name="gejala[]" value="<?= $value['kode_gejala'] ?>">
            <?= $value['gejala'] ?><br>
        <?php endforeach; ?><br>

        <input type="submit" value="Diagnosa">
    </form>
<?= $this->endSection() ?>
