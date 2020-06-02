<?=$this->extend('layouts/default')?>

<?=$this->section('content')?>
    <div class="container">
        <?=$this->include('Authentication/_messages')?>
        <h3>Basic Authentication in CodeIgniter 4</h3>
        <p>
            A project aimed at demonstrating how to build your own authentication system in CodeIgniter 4.<br/>
            Designed and developed by Zack Webster.
        </p>
<?php
if (!service('auth')->logged()) {
    echo anchor('/login', 'Login', 'class="btn btn-primary"') . ' ' . anchor('/register', 'Register', 'class="btn btn-primary"') . '<br/>';
} else {
    echo anchor('/logout', 'Logout', 'class="btn btn-primary"') . '<br/>';
}
?>
    </div>
<?=$this->endSection()?>