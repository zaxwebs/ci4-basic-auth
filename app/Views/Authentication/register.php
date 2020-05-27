<?=$this->extend('layouts/default')?>

<?=$this->section('content')?>
    <div class="container">
        <h3>Become a Member</h3>
				<div class="row">
					<div class="col-md-5">
						<?=form_open('/register')?>
						<?=$this->include('Authentication/_messages')?>
						<input name="email" type="text" class="form-control mb-2" placeholder="Enter your email" value="<?=old('email')?>">
						<input name="password" type="password" class="form-control mb-2" placeholder="Set a password">
						<input name="password_confirm" type="password" class="form-control mb-2" placeholder="Retype the password">
						<input type="submit" class="btn btn-primary" value="Signup">
						</form>
					</div>
				</div>
    </div>
<?=$this->endSection()?>