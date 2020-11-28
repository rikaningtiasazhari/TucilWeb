  <div class="main">
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
          <div id="login">

            <form action="javascript:void(0);" method="get">

              <fieldset class="clearfix">

                <p><span class="fa fa-user"></span><input type="text" Placeholder="Username" required></p>
                <p><span class="fa fa-user"></span><input type="text" Placeholder="First Name" required></p>
                <p><span class="fa fa-user"></span><input type="text" Placeholder="Last Name" required></p>
                <p><span class="fa fa-user"></span><input type="text" Placeholder="Email" required></p>
                <p><span class="fa fa-user"></span><input type="text" Placeholder="Password" required></p>

                <!-- Button -->
                <div>
                  <span style="width:50%; text-align:right;  display: inline-block;"><a class="btn btn-dark" href="<?= site_url('auth/index') ?>">Sign Up</a></span>
                </div>
                <!-- Tutup Button -->

              </fieldset>
              <div class="clearfix"></div>
            </form>

            <div class="clearfix"></div>
          </div>

        </div>

      </center>
      <!-- Tutup Form -->
</section>
    </div>
  </div>