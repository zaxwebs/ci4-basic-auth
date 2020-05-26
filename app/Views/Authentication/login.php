<?= $this->extend('layouts/default') ?>

<?= $this->section('content') ?>
    <div class="container">
        <h3>Login</h3>
				<div class="row">
					<div class="col-md-5">
						<?= form_open('/login') ?>
						<input type="text" class="form-control mb-2" placeholder="Enter your email">
						<input type="password" class="form-control mb-2" placeholder="Set a password">
						<input type="submit" class="btn btn-primary" value="Login">
						</form>
					</div>
				</div>
        
    </div>
<?= $this->endSection() ?>