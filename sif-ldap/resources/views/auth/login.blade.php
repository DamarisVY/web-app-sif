<!DOCTYPE html>
<html lang="es">
<head>
	<title>LDAP -- SIF</title> 
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0"> 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
	<link rel="stylesheet" href="css/login_estilos.css">

    <body class="text-center">

        <div class="container">
 
    </div>
                    <form method="POST" action="{{ route('login') }}" class="formulario">
                        @csrf
                        <h1>Servicio de Autenticación de LDAP</h1>
                        <div class="input-contenedor">
                            <i class="fas fa-envelope icon"></i>
 
                                <input id="username" type="username" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus placeholder="Username">

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                           
                        </div>

                        <div class="input-contenedor">
                        <i class="fas fa-key icon"></i>

                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Contraseña">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        
                        </div>

                       

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="button">
                                    {{ __('Acceder') }}
                                </button>

                                
                            </div>
                        </div>
                    </form>
            
                </div>
            </body>
    </html>
