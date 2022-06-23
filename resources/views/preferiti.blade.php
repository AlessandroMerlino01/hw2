<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>hw2-preferiti</title>
    <link rel="stylesheet" href='{{ asset('css/home.css') }}' />
    <script src="{{ asset('js/load_preferiti.js') }}" defer="true"></script>
    <script src="{{ asset('js/preferiti.js') }}" defer="true"></script>
    <script type="text/javascript">
      const BASE_URL = "{{url('/')}}";
      const LOAD_CONTENUTI_ROUTE = "/load_home";
      const CHECK_PREFERITI_ROUTE = "/check_preferiti";
      const CHECK_USER = "/check_user";
      const CSRF_TOKEN = '{{csrf_token() }}'
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
          {{ 'Benvenuto '.$user['username'] }} 
           </div>
          <div id="links">
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('logout') }}">Logout</a>
          </div>
        </nav>
    </header>
    
    <section>
      <div id="main">
        <h1>Non hai post preferiti</h1>
      </div> 
    </section>

    <footer>
      <p>Contatti: <br>
        info.watchblog@watchblog.com<br>
        +39 123 4567890<br>
        Alessandro Merlino 1000001212</p>
    </footer>
</body>
</html>