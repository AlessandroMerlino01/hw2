@extends('layouts.signup-in')

@section('title', 'hw2-signup')

@section('script')
<script src='{{ asset('js/signup.js') }}' defer></script>
<script type="text/javascript">
    const REGISTER_ROUTE = "/register";
    const BASE_URL = "{{url('/')}}";
</script>

@endsection

@section('section')
<h1>Inserisci i tuoi dati</h1>
            <form name='signup' method='post' enctype="multipart/form-data" autocomplete="off" action="{{ route('newAccount') }}">
            @csrf
                <div class="names">
                    <div class="name">
                        <div><label for='name'>Nome</label></div>
                        <div><input type='text' name='name' placeholder='-Mario' ></div>
                        <span>Campo obligatorio</span> 
                    </div>
                    <div class="surname">
                        <div><label for='surname'>Cognome</label></div>
                        <div><input type='text' name='surname' placeholder='-Rossi' ></div>
                        <span>Campo obligatorio</span>
                    </div>
                </div>
                <div class="username">
                    <div><label for='username'>Nome utente</label></div>
                    <div><input type='text' name='username' placeholder='-supermariobross99'></div>
                    <span>&nbsp;</span>
                </div>
                <div class="email">
                    <div><label for='email'>Email</label></div>
                    <div><input type='text' name='email' placeholder='-supermario@gmail.com'></div>
                    <span>&nbsp;</span>
                </div>
                <div class="password">
                    <div><label for='password'>Password</label></div>
                    <div><input type='password' name='password'></div>
                    <span>La password deve contenere un numero e un simbolo</span>
                </div>
                <div class="confirm_password">
                    <div><label for='confirm_password'>Conferma Password</label></div>
                    <div><input type='password' name='confirm_password'></div>
                    <span>Le password non coincidono</span>
                </div>
                <div class="allow"> 
                    <div><input type='checkbox' name='allow' value="1" {{ (! empty(old('allow')) ? 'checked' : '') }}></div>
                    <div><label for='allow'>Acconsento al trattamento dei dati personali</label></div>
                </div>
                <div class="submit">
                    <input type='submit' value="Registrati" id="submit" {{-- disabled --}}>
                </div>
            </form>
            <div class="signup">Hai gi?? creato un account? <a href="{{ route('login') }}">Accedi</a>
@endsection


