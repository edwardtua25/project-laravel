<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>R E G I S T E R</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <div class="login-box2">
        <h2>W E L C O M E</h2>
        <img src="images/Logo_ElTona.jpeg" class="logo">
        <br><br><br><br><br>
        <form action="/register" method="post">
            @csrf
            <input type="text" name="name" placeholder="Nama..." class="form-control reunded-top @error('name') is-invalid @enderror" required>
            @error('name')
            <div class="invalid-feedback">{{ $message }}</div> @enderror
            <br>
            <input type="text" name="username" placeholder="username..." class="form-control reunded-top @error('username') is-invalid @enderror" required>
            @error('username')
            <div class="invalid-feedback">{{ $message }}</div> @enderror
            <br>
            {{-- <input type="text" name="nomor" placeholder="no.hp..." class="form-control reunded-top @error('nomor') is-invalid @enderror" required>
            @error('nomor')
            <div class="invalid-feedback">{{ $message }}</div> @enderror
            <br> --}}
            <input type="email" name="email" placeholder="email.." class="form-control reunded-top @error('email') is-invalid @enderror" required>
            @error('email')
            <div class="invalid-feedback">{{ $message }}</div> @enderror
            <br>
            <input type="password" name="password" placeholder="Password.." class="form-control reunded-top @error('password') is-invalid @enderror" required>
            @error('password')
            <div class="invalid-feedback">{{ $message }}</div> @enderror
            
         

      
            <input type="submit" name="submit" value="Daftar"> <p>Already Have account <a href="/login">Login!</a></p>
            
        </form>
    </div>
</body>
</html>