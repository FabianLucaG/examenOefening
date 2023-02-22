<?php
    include 'views/layout/header.php';
?>


<form class="form-signin" method="post" action="?con=auth&op=login">
    <img class="mb-4" src="https://via.placeholder.com/100.png/09f/fff" alt="placeholder" width="72" height="72">

    <input type="text" name="email" class="form-control" placeholder="Email" required autofocus>

    <input type="password" name="password" class="form-control" placeholder="Passwords" required autofocus>

    <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>

</form>

<a href="https://www.facebook.com/login/" class="btn btn-primary">Login with Facebook</a>
<a href="?con=auth&op=registration">Registration</a>

<?php
    include 'views/layout/footer.php';
?>