<html>
    <head>
        <link rel='stylesheet' href='{{ asset('css/signup.css') }}'>
        <link rel='stylesheet' href='{{ asset('css/contactus.css') }}'>

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
                <a href="{{ route('main') }}">Home</a>
                <a href="{{ route('logout') }}">Log out</a>
              </div>
            </nav>
        <main class= "login">
            <section>
                <h1>Inserisci tutti </br>i campi</h1>
                <form name='new_post' method='post' action="{{ route('PostNuovo') }}">
                    @csrf
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
                    @isset ($error1)
                        <span class='error'>{{$error1}}</span>
                    @endisset
                    </div>
                </form>
            </section>
        </main>
    </body>
</html>