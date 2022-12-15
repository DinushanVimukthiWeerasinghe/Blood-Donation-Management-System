<link rel="stylesheet" href="/public/styles/hospital/login.css">
<img src="/public/images/hospital/Cover-RGB-01.png" alt="Logo" class="logo">
<form action="/hospital/login" method="post">
    <h3>Login</h3>

    <label for="username">Username</label>
    <input type="email" placeholder="Email" id="email" name="email" required>

    <label for="password">Password</label>
    <input type="password" placeholder="Password" id="password" name="password" required>

    <input type="submit" value="Log In" class="button">
</form>