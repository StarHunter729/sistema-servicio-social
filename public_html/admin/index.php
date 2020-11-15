<html>
    <head>
        <Title>Admin Login</Title>
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container"> 
            <div class="row">
                <div class="col-md-6">
                    <h2>Login</h2>
                    <form action="login.php"  method="post">
                        <div class="form-group">
                            <label>Email</label> 
                            <input type="text" name="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Contraseña</label>
                            <input type="password" name="pass" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
