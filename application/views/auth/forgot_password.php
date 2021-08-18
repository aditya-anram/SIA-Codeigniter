<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-lg-5">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">

                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center mb-3">
                                <img src="<?= base_url('assets\img\favicon\logo.png'); ?>" width="20%">
                                </div>
                                <div class="text-center">
                                    <h4 class="h6 text-gray-900 mb-2"><?= $page; ?></h4>
                                </div>
                                <div class="text-center">
                                    <h4 class="h6 font-weight-bold text-gray-900 mb-2"><?= $sub_page; ?></h4>
                                </div>
                                <!-- flashdata -->
                                <?= $this->session->flashdata('pesan'); ?>
                                <form class="user" method="post" action="<?= base_url('auth/forgotpassword'); ?>">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="email" name="email" value="<?= set_value('email'); ?>" placeholder="Email...">
                                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>



                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Reset Password
                                    </button>


                                </form>
                                <hr>

                                <div class="text-center">
                                    <a class="small" href="<?= base_url('auth'); ?>">Kembali ke Login</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>