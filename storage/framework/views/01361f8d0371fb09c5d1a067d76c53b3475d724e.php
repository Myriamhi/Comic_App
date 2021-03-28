

<?php $__env->startSection('title', 'Personnages'); ?>

<?php $__env->startSection('content'); ?>
<table>
    <tr>
        <th>#</th> 
        <th>Personnage</th>
        <th>Dessinateur</th>
        <th>BD</th>
        <th>Année</th>
        <th>Supprimer</th>
        <th>Editer</th>
    </tr>
    <?php $__currentLoopData = $characters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $character): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    
    <tr>
        <td ><?php echo e($character->id); ?></td>
        <td><a href="/character/<?php echo e($character->id); ?>"><?php echo e($character->name); ?></a></td>
        <td><?php echo e($character->cartoonist->name); ?></td>
        <td><?php echo e($character->comic); ?></td>
        <td><?php echo e($character->creation_year); ?></td>
        <td>
            <form action="/deleteCharacter" method="POST">
                <?php echo csrf_field(); ?>
                <input type="hidden" name="id" value="<?php echo e($character->id); ?>"> 
                <input type="submit" class="delete" value="X">
            </form>
        </td>
        <td>
            <a href="/editCharacter/<?php echo e($character->id); ?>" class="edit"><i class="fa fa-refresh"></i></a>
        </td>
    </tr>
   
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>

    
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH T:\laragon\www\AnimeCharacters\resources\views/list.blade.php ENDPATH**/ ?>