<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title>Data Pegawai</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">

                <!-- Notifikasi menggunakan flash session data -->
                <?php if(session('success')): ?>
                <div class="alert alert-success">
                    <?php echo e(session('success')); ?>

                </div>
                <?php endif; ?>

                <?php if(session('error')): ?>
                <div class="alert alert-error">
                    <?php echo e(session('error')); ?>

                </div>
                <?php endif; ?>

                <div class="card border-0 shadow rounded">
                    <div class="card-body">

                        <table class="table table-bordered mt-1">
                            <thead>
                                <tr>
                                <form action="<?php echo e(route('post.update',$data->id)); ?>" method="post" class= "form-control" placeholder="Nama Pegawai">
                                <?php echo csrf_field(); ?>
                                <div>
                                        <label>Nama</label> <br>
                                        <input type="text" name="nama" value = "<?php echo e($data->nama); ?>" size="80" maxlength="120" />
                                    </div>
                                    <div>
                                        <label>Tanggal Lahir</label> <br>
                                        <input type="date" name="tgllahir"value = "<?php echo e($data->tgllahir); ?>" size="80" maxlength="120" />
                                        </div>
                                    <div>
                                        <label>Alamat</label> <br>
                                        <input type="text" name="alamat" value = "<?php echo e($data->alamat); ?>" size="80" maxlength="120" />
                                        </div>
                                
                                </tr>
                        </table>
                         <!-- <a href="<?php echo e(route('post.create')); ?>" class="btn btn-md btn-success mb-3 float-right"> -->
                            <!-- Simpan Data</a> -->
                            <button class=" btn btn-primary" type="submit"> Simpan data</button>
                            </form>
                            </thead>
                            
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html><?php /**PATH C:\xampp\htdocs\installlaravel\resources\views/pegawai/editdata.blade.php ENDPATH**/ ?>