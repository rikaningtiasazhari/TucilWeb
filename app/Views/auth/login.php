  <!-- Alerts -->
  <div class="alert alert-primary" role="alert">
    Silahkan Login Terlebih Dahulu!
  </div>
  <!-- Tutup Alerts -->
<section>
  <!-- Form -->
  <div class="container">
    <center>
      <div class="middle">
        <form>
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
          </div>

          <!-- Button -->
          <div>
            <span style="width:50%; text-align:center;  display: inline-block;"><a class="btn btn-info" href="<?= site_url('auth/index') ?>">Login</a></span><br><br>
            <span style="width:50%; text-align:center;  display: inline-block;"><a class="btn btn-dark" href="<?= site_url('auth/register') ?>">Register</a></span>
          </div>
          <!-- Tutup Button -->

        </form>
      </div>
    </center>
  </div>
</body>
<!-- Tutup Form -->
</section>
