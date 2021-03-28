

<?php $__env->startSection('title', 'Dessinateurs'); ?>

<?php $__env->startSection('content'); ?>

<form action="/addCartoonist" method="POST" class="formAjout">
    <?php echo csrf_field(); ?>
    <h4>Nouveau déssinateur</h4>
    <div>
        <label for="name">Nom: </label>
        <input type="text" name="name" placeholder="Nom">
    </div>
    <div>
        <label for="birth_year">Année: </label>
        <input type="text" name="birth_year" placeholder="Année de naissance">
    </div>
    <div>
        <label for="nationality">Nationalité: </label>
        <input type="text" name="nationality" placeholder="Nationalité">
    </div>
    <div>
        <button type="submit">Ajouter</button>
    </div>
</form>

    
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH T:\laragon\www\AnimeCharacters\resources\views/addCartoonist.blade.php ENDPATH**/ ?>