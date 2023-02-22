<?php
    include 'views/layout/header.php';
?>


<form class="form-signin">
    <img class="mb-4" src="https://via.placeholder.com/100.png/09f/fff" alt="placeholder" width="72" height="72">

    <input type="text" id="username" class="form-control" placeholder="Login" required="" autofocus="">

    <input type="password" id="psw" class="form-control" placeholder="Password" required="">

    <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>

</form>

<a href="https://www.facebook.com/login/" class="btn btn-primary">Login with Facebook</a>
<a href="index.php?con=auth&op=registration">Registration</a>

<?php
    include 'views/layout/footer.php';
?>