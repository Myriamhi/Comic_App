

<?php $__env->startSection('title', 'Personnages'); ?>

<?php $__env->startSection('content'); ?>
<form action="/editCharacter" method="POST" class="formAjout">
    <?php echo csrf_field(); ?>
    <input type="hidden" name="id" value="<?php echo e($character->id); ?>">
    <div>
        <label for="name">Nom: </label>
        <input type="text" name="name" value="<?php echo e($character->name); ?>" placeholder="Nom">
    </div>
    <div>
        <label for="cartoonists">Dessinateur: </label>
        
        <select name="cartoonist_id" id="cartoonists">
            <?php $__currentLoopData = $cartoonists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cartoonist): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($cartoonist->id); ?>"><?php echo e($cartoonist->name); ?></option> 
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>;
        </select>
    </div>
    <div>
        <label for="creation_year">Année: </label>
        <input type="text" name="creation_year" value="<?php echo e($character->creation_year); ?>"placeholder="Année de création">
    </div>
    <div>
        <label for="comic">BD: </label>
        <input type="text" name="comic" value="<?php echo e($character->comic); ?>" placeholder="BD">
    </div>
    <div>
        <button type="submit">Modifier</button>
    </div>
</form>

    
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH T:\laragon\www\AnimeCharacters\resources\views/editCharacter.blade.php ENDPATH**/ ?>