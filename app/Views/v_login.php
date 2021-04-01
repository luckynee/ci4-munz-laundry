<div class="d-flex justify-content-center align-items-center fullheight">

  <?php echo form_open('auth/login') ?>

  <div class="container a-login text-center">

    <h1><b>Munz</b> Laundry</h1>

    <div class="card shadow p-3 mb-5 bg-body rounded">
      <div class="d-flex flex-column card-body justify-content-center align-items-center">

        <!-- Alert -->
        <!-- Jika data belum diisi -->
        <?php
        $errors = session()->getFlashData('errors');
        if (!empty($errors)) {
        ?>
          <div class="alert alert-danger notype text-center shadow p-3" role="alert">
            <?php foreach ($errors as $key => $value) { ?>
              <li><?= esc($value) ?></li>
            <?php } ?>
            </ul>
          </div>
        <?php } ?>

        <!-- Jika gagal login -->
        <?php if (session()->getFlashData('message')) { ?>
          <div class="alert alert-danger text-center shadow p-3" role="alert">
            <?php echo session()->getFlashData('message'); ?>
          </div>
        <?php } ?>

        <!-- Jika logout sukses -->
        <?php if (session()->getFlashData('logout')) { ?>
          <div class="alert alert-success text-center shadow p-3" role="alert">
            <?php echo session()->getFlashData('logout'); ?>
          </div>
        <?php } ?>
        <!-- /Alert -->

        <div class="input-group my-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
          </div>
          <input name="username" class="form-control a-form-control" placeholder="Username" />
        </div>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1"><i class="fas fa-key"></i></span>
          </div>
          <input name="password" type="password" class="form-control a-form-control" placeholder="Password" />
        </div>
        <button type="submit" class="btn btn-primary w-100">Login</button>
        <p class="mt-3">Didn't have an account ? <a href="./register.html">Register</a></p>
      </div>
    </div>
  </div>

  <?php echo form_close() ?>

</div>