@yield('content')
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
   

</head>
<body>
    <header>
            <img src="{{asset('img/logoNome.png')}}" alt="">
            <nav class="navbar">
                <ul>
                    <li><a href="\cadastro">Cadastre-se</a></li>
                    <li><a href="\admin\login">Login</a></li>
                    
                </ul>
            </nav>
    </header>
    <main>
        
        
        <div class="card">
            <div class="logo-img">
                <img src="{{asset('img/logoNome.png')}}" alt="logo">
            </div>
            @if(Route::CurrentRouteName() === 'cadastro')
            <form method="post"  action="{{ route('cadastro') }}">
            @else
            <form method="post"  action="{{ route('admin.login.do') }}">
            @endif

                @csrf
                <fieldset>
                    @if(Route::CurrentRouteName() === 'cadastro')
                    <div class="input-text">
                        <img src="{{asset('img/icons8-usuário-30 (2).png')}}" alt="username">
                        <input name="username" type="text" placeholder="Username" >
                    </div>
                    @endif
                    <div class="input-text">
                        <img src="{{asset('img/icons8-usuário-30 (2).png')}}" alt="user">
                        <input name="user" type="text" placeholder="User" >
                    </div>

               
                    <div class="input-text">
                        <img src="{{asset('img/icons8-padlock-66 (2).png')}}" alt="padlock">
                        <input name="password" type="password" placeholder="Password" >
                    </div>

                    @if(Route::CurrentRouteName() === 'cadastro')
                    <div class="btn">
                        <button type="submit">Create</button>
    
                    </div>
                    @else 
                    <div class="btn">
                        <button type="submit">Sign In</button>
                    </div>
                    @endif

                </fieldset>
            </form>
            @if(Route::CurrentRouteName() !== 'cadastro')
            <div class="options">
                <a href="/cadastro">Create accout</a>
            </div>
            @endif
        </div>

    </main>

</body>

</html>