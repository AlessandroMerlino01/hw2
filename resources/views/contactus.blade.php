<html>
    <head>
        <link rel='stylesheet' href='{{ asset('css/signup.css') }}'>
        <link rel='stylesheet' href='{{ asset('css/contactus.css') }}''>
        
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
              {{ 'Benvenuto '.$user['username'] }} 
               </div>
              <div id="links">
                <a href="{{ route('home') }}">Home</a>
                <a href="{{ route('logout') }}">Logout</a>
              </div>
            </nav>
        <main class= "login">
            <section>
                <h1>Lavora con noi</h1>
                <form name='contactus' method='post' action="{{ route('contactusInvio') }}">
                    @csrf
                    <div class="email">
                        <div><label for='email'>email</label></div>
                        <div><input type='text' name='email' value= {{$user['email']}} ></div>
                    </div>
                    <div class="testo">
                        <div><label for='testo'>Testo</label></div>
                        <div><input type='text' name='testo'></div>
                    </div>
                    <div>
                        <input type='submit' value="Invia">
                    </div>
                    <div>
                    @isset ($error1)
                        <span class='error'>{{$error1}}</span>
                    @endisset
                    </div>
                </form>
            </section>
        </main>
    </body>
</html>