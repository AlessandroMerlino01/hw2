<html>
<!--?php 
         require_once 'dbconfig.php';
        // Carico le informazioni dell'utente loggato
        $conn = mysqli_connect($dbconfig['host'], $dbconfig['user'], $dbconfig['password'], $dbconfig['name']);
        $userid = mysqli_real_escape_string($conn, $userid);
        $query1 = "SELECT * FROM users WHERE id = $userid";
        $res_1 = mysqli_query($conn, $query1);
        $userinfo = mysqli_fetch_assoc($res_1);    
    ?>-->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HW2-home</title>
    <link rel="stylesheet" href='<?php echo e(asset('css/home.css')); ?>'> />
    <script src="<?php echo e(asset('js/load_home.js')); ?>" defer="true"></script>
    <script src='<?php echo e(asset('js/home.js')); ?>' defer="true"></script>
    <script type="text/javascript">
      const BASE_URL = "<?php echo e(url('/')); ?>";
      const LOAD_CONTENUTI_ROUTE = "/load_home";
      const CHECK_PREFERITI_ROUTE = "/check_preferiti";
      const CHECK_USER = "/check_user";
      const CSRF_TOKEN = '<?php echo e(csrf_token()); ?>'
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Poppins:wght@100&family=Roboto:wght@100&display=swap" rel="stylesheet">

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
            <a href="<?php echo e(route('preferiti')); ?>">Preferiti</a>
            <a href="<?php echo e(route('contactus')); ?>">Contattaci</a>
            <a href="<?php echo e(route('logout')); ?>">Logout</a>
          </div>
        </nav>
  
        <h1>
          <strong>Il blog di orologi più seguito
          </strong><br/>
          <a class="button" href="<?php echo e(route('contactus')); ?>">Collabora con noi</a>
        </h1>
    </header>
    
    <section>
      <div id="main">
        <h1>Leggi i nostri post:</h1>
      </div>
      
    </section>
    
    <div id="api">
      <form name ='search_img' id='search_img'>			
		  	<a class="button">Vedi foto di orologi</a>			
        <article id="album-view"></article>     
		  </form>

      <div id="spotify">
        <a class="button">Vedi Podcast di orologi</a>
        <article id="playlist-view"></article>  
      </div>
      <a href="https://pixabay.com/">
      <img class="foto" src="./images/pixabay.png">
      </a>
    </div>



    <footer>
      <p>Contatti: <br>
        info.watchblog@watchblog.com<br>
        +39 123 4567890<br>
        Alessandro Merlino 1000001212</p>
    </footer>
</body>
</html><?php /**PATH C:\xampp\htdocs\hw2\resources\views/home.blade.php ENDPATH**/ ?>