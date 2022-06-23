<html>
    <head>
        <link rel='stylesheet' href='<?php echo e(asset('css/signup.css')); ?>'>
        <link rel='stylesheet' href='<?php echo e(asset('css/contactus.css')); ?>''>
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Poppins:wght@100&family=Roboto:wght@100&display=swap" rel="stylesheet">

        <title>hw2-contactus</title>
    </head>
    <body>
        <header>
        <nav>
              <div id="logo">
                Watch blog
              </div>
              <div id="benvenuto">
              <?php echo e('Benvenuto '.$user['username']); ?> 
               </div>
              <div id="links">
                <a href="<?php echo e(route('home')); ?>">Home</a>
                <a href="<?php echo e(route('logout')); ?>">Logout</a>
              </div>
            </nav>
        <main class= "login">
            <section>
                <h1>Lavora con noi</h1>
                <form name='contactus' method='post' action="<?php echo e(route('contactusInvio')); ?>">
                    <?php echo csrf_field(); ?>
                    <div class="email">
                        <div><label for='email'>email</label></div>
                        <div><input type='text' name='email' value= <?php echo e($user['email']); ?> ></div>
                    </div>
                    <div class="testo">
                        <div><label for='testo'>Testo</label></div>
                        <div><input type='text' name='testo'></div>
                    </div>
                    <div>
                        <input type='submit' value="Invia">
                    </div>
                    <div>
                    <?php if(isset($error1)): ?>
                        <span class='error'><?php echo e($error1); ?></span>
                    <?php endif; ?>
                    </div>
                </form>
            </section>
        </main>
    </body>
</html><?php /**PATH C:\xampp\htdocs\hw2\resources\views/contactus.blade.php ENDPATH**/ ?>