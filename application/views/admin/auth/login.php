<style>
    h1,
    label {
        font-family: Georgia, 'Times New Roman', Times, serif;
    }

    label {
        color: black;
        font-size: 15px;
        margin-left: 10px;
    }
</style>

<body>
    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card o-hidden border-2 shadow-lg my-5" style="background-color: rgba(255, 255, 255, 0.5);">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4"><strong>LOGIN</strong></h1>
                                    </div>
                                    <?= $this->session->flashdata('message'); ?>

                                    <form class="admin" method="POST" action="<?= base_url('admin/login'); ?>">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="text" class="form-control form-control-admin" id="email"
                                                name="email" placeholder="Masukkan Email"
                                                value="<?= set_value('email'); ?>">
                                            <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input type="password" class="form-control form-control-admin" id="password"
                                                name="password" placeholder="Masukkan Kata Sandi">
                                            <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <button type="submit" class="btn btn-success btn-admin btn-block"
                                            style="color:black; font-size:15px;">
                                            <strong>LOGIN</strong>
                                        </button>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" style="color:black;"
                                            href="<?= base_url('admin/registration'); ?>">Daftar Akun !</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>