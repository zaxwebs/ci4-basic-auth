<?php if (session()->has('message')): ?>
	<div class="alert alert-success">
		<?=session('message')?>
	</div>
<?php endif?>

<?php if (session()->has('error')): ?>
	<div class="alert alert-danger">
		<?=session('error')?>
	</div>
<?php endif?>

<?php if (session()->has('errors')): ?>
	<div class="alert alert-danger">
		<?php foreach (session('errors') as $error): ?>
			<li><?=$error?></li>
		<?php endforeach?>
	</div>
<?php endif?>