<?= $this->extend('layouts/default') ?>

<?= $this->section('content') ?>
    <div class="container">
        <h3>Basic Authentication in CodeIgniter 4</h3>
        <p>
            A project aimed at demonstrating how to build your own authentication system in CodeIgniter 4.<br/>
            Designed and developed by Zack Webster.
        </p>
        <?= anchor('/login', 'Login', 'class="btn btn-primary"') ?>
        <?= anchor('/register', 'Register', 'class="btn btn-primary"') ?>
    </div>
<?= $this->endSection() ?>