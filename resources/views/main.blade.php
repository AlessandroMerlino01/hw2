<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>hw2-main</title>
    <link rel="stylesheet" href='{{ asset('css/home.css') }}' />
    <script src="{{ asset('js/load_main.js') }}" defer="true"></script>
    <script src='{{ asset('js/main.js') }}' defer="true"></script>
    <script type="text/javascript">
      const BASE_URL = "{{url('/')}}";
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
             Ciao Alessandro
           </div>
          <div id="links">
            <a href="{{ route('Post') }}">Inserisci post</a>
            <a href="{{ route('logout') }}">Logout</a>
          </div>
        </nav>
    </header>
    
    <section>
      <div id="main">
      </div>
      
    </section>

</body>
</html>