

<?php $__env->startSection('title', 'Personnages'); ?>

<?php $__env->startSection('content'); ?>
<table>
    <tr>
        <th>#</th> 
        <th>Dessinateur</th>
        <th>Année de naissance</th>
        <th>Nationalité</th>
        <th>Supprimer</th>
        <th>Editer</th>
    </tr>
    <?php $__currentLoopData = $cartoonists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cartoonist): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    
    <tr>
        <td ><?php echo e($cartoonist->id); ?></td>
        <td><?php echo e($cartoonist->name); ?></td>
        <td><?php echo e($cartoonist->birth_year); ?></td>
        <td><?php echo e($cartoonist->nationality); ?></td>
        <td>
            <form action="/deleteCartoonist" method="POST">
                <?php echo csrf_field(); ?>
                <input type="hidden" name="id" value="<?php echo e($cartoonist->id); ?>"> 
                <input type="submit" class="delete" value="X">
            </form>
        </td>
        <td>
            <a href="/editCartoonist/<?php echo e($cartoonist->id); ?>" class="edit"><i class="fa fa-refresh"></i></a>
        </td>
    </tr>
   
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>

    
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH T:\laragon\www\AnimeCharacters\resources\views/listCartoonist.blade.php ENDPATH**/ ?>