<?=$this->extend('layouts/default')?>

<?=$this->section('content')?>
    <div class="container">
        <?=$this->include('Authentication/_messages')?>
        <h3>Restricted Zone</h3>
        <p>
            This page should only be accessible to logged in users.
        </p>
    </div>
<?=$this->endSection()?>