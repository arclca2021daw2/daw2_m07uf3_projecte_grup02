<html>
    <head>
        <title>Login</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" 
        crossorigin="anonymous">
        <style>
            h1, h2 {
                text-align: center;
            }
        </style>
    </head>
   <body>
        <form action="/login" method="POST">
            {{csrf_field()}}
            <h1>LOGO</h1>
            <h2>Iniciar sessió</h2>
    
            <div class="form-floating mb-3">
                <input type="text" name="user" class="form-control" id="user" placeholder="Nom d'usuari">
                <label for="user">Nom d'usuari</label>
            </div>
            <div class="form-floating">
                <input type="password" name="passwd" class="form-control" id="passwd" placeholder="Contrasenya">
                <label for="passwd">Contrasenya</label>
            </div>
            <input type="submit" class="btn btn-primary" value="Iniciar sessió">
        </form>
        @if(\Session::has('error'))
            <div class="alert alert-danger">
                <p>{{\Session::get('error')}}</p>
            </div>
        @endif
   </body>  
</html>