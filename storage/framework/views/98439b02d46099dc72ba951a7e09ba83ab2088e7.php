<html>
    <head>
        <link rel='stylesheet' href='<?php echo e(asset('css/signup.css')); ?>'>
        <link rel='stylesheet' href='<?php echo e(asset('css/contactus.css')); ?>'>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Poppins:wght@100&family=Roboto:wght@100&display=swap" rel="stylesheet">

        <title>hw1-contactus</title>
    </head>
    <body>
        <header>
        <nav>
              <div id="logo">
                Watch blog
              </div>
              <div id="benvenuto">
                    Benvenuto ALessandro
               </div>
              <div id="links">
                <a href="<?php echo e(route('main')); ?>">Home</a>
                <a href="<?php echo e(route('logout')); ?>">Log out</a>
              </div>
            </nav>
        <main class= "login">
            <section>
                <h1>Inserisci tutti </br>i campi</h1>
                <form name='new_post' method='post' action="<?php echo e(route('PostNuovo')); ?>">
                    <?php echo csrf_field(); ?>
                    <div class="immagine">
                        <div><label for='foto'>Foto</label></div>
                        <div><input type='text' name='foto' value="./images/"></div>
                    </div>
                    <div class="testo">
                        <div><label for='titolo'>Titolo</label></div>
                        <div><input type='text' name='titolo'></div>
                    </div>
                    <div class="testo">
                        <div><label for='descrizione'>Descrizione</label></div>
                        <div><input type='text' name='descrizione'></div>
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
</html><?php /**PATH C:\xampp\htdocs\hw2\resources\views/Post.blade.php ENDPATH**/ ?>