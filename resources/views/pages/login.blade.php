<!DOCTYPE html>
<html>

<head>
    <title>Login Page</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}" />
</head>


<body>
    @include('componanets.navbar')
    <div style="margin-top:100px"></div>
    <div class="login-container">
        <h1>Login</h1>
        <form method="post" action="/login">
            @csrf
            <label for="email">Email</label>
            <input type="text" id="email" name="email" required value="{{ old('email') }}" />
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required />
            <button type="submit" name="submit">Login</button>
        </form>
        <p>Don't have an account? <a href="/signup">Sign up</a></p>
    </div>
    @include('sweetalert::alert')
</body>

</html>
<script>
    // Prevent resubmission the from everytime
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
</script>
