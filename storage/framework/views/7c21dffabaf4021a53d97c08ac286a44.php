

<?php $__env->startSection('content'); ?>
<main>
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <div class="album py-5 bg-light">
        <div class="container">
            <form action="<?php echo e(route('subirFoto')); ?>" method="POST" enctype="multipart/form-data" class="row g-3">
                <?php echo csrf_field(); ?>
                <label for="staticEmail2">Subir Una foto</label>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Descripcion</label>
                    <input type="text" class="form-control" name="descripcion" placeholder="Agregue una descripcion">
                </div>
                <div class="col-auto">
                    <input class="form-control" type="file" name="foto">
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary mb-3">Subir</button>
                </div>
            </form>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <?php $__currentLoopData = $fotos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $foto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col">
                    <div class="card shadow-sm">
                        <img height="200" src="/foto/<?php echo e($foto->ruta); ?>" alt="Imagen">
                        <div class="card-body">
                            <p class="card-text"><?php echo e($foto->descripcion); ?></p>
                            <div class="d-flex justify-content-between align-items-center">
                                <form method="POST" action="<?php echo e(route('eliminarFoto')); ?>">
                                    <?php echo csrf_field(); ?>
                                    <div class="btn-group">
                                        <input type="hidden" name="id_foto" value="<?php echo e($foto->id); ?>">
                                        <button type="submit" class="btn btn-sm btn-outline-secondary">Eliminar</button>
                                    </div>
                                </form>
                                <small class="text-muted"><?php echo e($foto->created_at); ?></small>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>

</main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\LAB11\resources\views/fotos/fotos.blade.php ENDPATH**/ ?>