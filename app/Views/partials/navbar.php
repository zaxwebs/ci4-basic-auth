<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top mb-2">
    <div class="container">
			<?= anchor('/', config('Brand')->brandName, 'class="navbar-brand"') ?>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
					<?= anchor('/', 'Home', 'class="nav-link"') ?>
          </li>
          <li class="nav-item">
						<?= anchor('/login', 'Login', 'class="nav-link"') ?>
          </li>
          <li class="nav-item">
						<?= anchor('/register', 'Register', 'class="nav-link"') ?>
          </li>
        </ul>
      </div>
    </div>
  </nav>