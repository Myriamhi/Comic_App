

<?php $__env->startSection('title', 'Dessinateurs'); ?>

<?php $__env->startSection('content'); ?>

<form action="/editCartoonist" method="POST" class="formAjout">
    <?php echo csrf_field(); ?>
    <input type="hidden" name="id" value="<?php echo e($cartoonist->id); ?>">
    <div>
        <label for="name">Nom: </label>
        <input type="text" name="name" value="<?php echo e($cartoonist->name); ?>" placeholder="Nom">
    </div>
    <div>
        <label for="birth_year">Année: </label>
        <input type="text" name="birth_year" value="<?php echo e($cartoonist->birth_year); ?>"  placeholder="Année de naissance">
    </div>
    <div>
        <label for="nationality">Nationalité: </label>
        <input type="text" name="nationality" value="<?php echo e($cartoonist->nationality); ?>" placeholder="Nationalité">
    </div>
    <div>
        <button type="submit">Modifier</button>
    </div>
</form>

    
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH T:\laragon\www\AnimeCharacters\resources\views/editCartoonist.blade.php ENDPATH**/ ?>