<?= $this->extend('app/layout') ?>

<?= $this->section('title') ?>
    Diagnose Result
<?= $this->endSection() ?>

<?= $this->section('pagetitle') ?>
    Diagnose Result
<?= $this->endSection() ?>

<?= $this->section('activetitle') ?>
    Diagnose
<?= $this->endSection() ?>

<?= $this->section('dashboard') ?>
    collapsed
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <h1>Hasil Diagnosa</h1>

    <?php if (!empty($penyakit)): ?>
        <p>Anda didiagnosis menderita:</p>
        <ul>
            <?php foreach ($penyakit as $item): ?>
                <li><?= $item['jenis_penyakit'] ?></li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>Tidak ada hasil diagnosa yang ditemukan.</p>
    <?php endif; ?>
    <a href="<?= base_url('diagnosa_form') ?>">Kembali ke Form Diagnosa</a>
<?= $this->endSection() ?>