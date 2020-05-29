<?php if (session()->has('success')): ?>
	<div class="alert alert-success">
		<?=session('success')?>
	</div>
<?php endif?>

<?php if (session()->has('error')): ?>
	<div class="alert alert-danger">
		<?=session('error')?>
	</div>
<?php endif?>

<?php if (session()->has('errors')) {
    echo '<div class="alert alert-danger">';
    if (count(session('errors')) === 1) {
        echo array_values(session('errors'))[0];
    } else {
        foreach (session('errors') as $error) {
            echo '<li>' . $error . '</li>';
        }
    }
    echo '</div>';
}
