<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/sign-in.css">

    <script>
        function validateForm() {
            var nama = document.getElementById("floatingInputNama").value;
            var email = document.getElementById("floatingInputEmail").value;
            var password = document.getElementById("floatingPassword").value;
            var confirmPassword = document.getElementById("floatingConfirmPassword").value;

            if (nama == "" || email == "" || password == "" || confirmPassword == "") {
                alert("Please fill in all fields.");
                return false;
            }

            return true;
        }
    </script>
</head>
<body>
    <main class="form-signin w-100 m-auto">
        <form action="/simpan_userSignUp" method="POST" onsubmit="return validateForm()"> 
            @csrf 
            <h1 class="h3 mb-3 fw-normal">Please sign up</h1>
            <div class="form-floating">
                <input type="nama" class="form-control" id="floatingInputNama" name="nama" placeholder="Nama">
                <label for="floatingInputNama">Nama</label>
            </div>
            <div class="form-floating">
                <input type="email" class="form-control" id="floatingInputEmail" name="email" placeholder="name@example.com">
                <label for="floatingInputEmail">Email address</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingConfirmPassword" name="confirm_password" placeholder="Confirm Password">
                <label for="floatingConfirmPassword">Confirm Password</label>
            </div>
        
            <div class="form-check text-start my-3">
                <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                Remember me
                </label>
            </div>
            <button type="submit" class="btn btn-primary">Sign Up</button>
            <p class="mt-3 mb-3 text-center text-body-secondary">Already have account? <a href="/signIn_pengguna">Sign In</a></p>
        </form>
    </main>
</body>
</html>
