

<?php $__env->startSection('title', 'hw2-login'); ?>

<?php $__env->startSection('section'); ?>
<h1>Benvenuto!</h1>
            <form name='login' method='post' action="<?php echo e(route('login')); ?>">
                <?php echo csrf_field(); ?>
                <div class="username">
                    <div><label for='username'>Nome utente</label></div>
                    <div><input type='text' name='username'></div>
                </div>
                <div class="password">
                    <div><label for='password'>Password</label></div>
                    <div><input type='password' name='password'></div>
                </div>
                <div>
                    <input type='submit' value="Accedi">
                </div>
                <div>
                <?php if(isset($error)): ?>
                    <span class='error'><?php echo e($error); ?></span>
                <?php endif; ?>
                </div>
            </form>
            <div class="signup">Non hai un account? <a href="<?php echo e(route('register')); ?>">Iscriviti</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.signup-in', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hw2\resources\views/login.blade.php ENDPATH**/ ?>