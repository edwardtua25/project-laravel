
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>L O G I N</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
   
    <div class="login-box1" >
        <h2>W E L C O M E</h2>
        
        <img src="images/Logo_ElTona.jpeg" class="logo">
        <br><br><br><br>
        @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close white" data-bs-dismiss="alert" aria-label="Close">
            </button>
        </div>@endif
        <br>
        @if(session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('loginError') }}
           
        </div>@endif <br>
        <form action="login" method="post">
            @csrf
            <input type="email" name="email" placeholder="email..." class="form-control @error('email') in-invalid @enderror" autofocus required>
            @error('email')
            <div class="invalid-feedback">
                {{ $message }}
            </div> 
            @enderror
            <br>
            <input type="password" name="password" placeholder="Password">

            <input type="submit" name="submit" value="Login" style="position:center;">
            <p>Belum mempunyai akun? <a href="register">Daftar sekarang!</a></p>
        </form>
    </div>
</body>
</html>