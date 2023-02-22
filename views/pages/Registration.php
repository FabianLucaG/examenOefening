<?php
require 'view/header.php'; ?>

<form action='' method="POST">
    <div class="row">
        <div class="col-6">
            <label for="uname">
                <b>Username</b>
            </label>
        </div>

        <div class="col-6">
            <input type="text" placeholder="Enter Username" name="uname" style="width: 50%;" required>
        </div>

        <div class="col-6">
            <label for="psw">
                <b>Password</b>
            </label>
        </div>

        <div class="col-6">
            <input type="text" placeholder="Enter password" name="psw" style="width: 50%;" required>
        </div>

        <div class="col-6">
            <label for="email">
                <b>Email</b>
            </label>
        </div>

        <div class="col-6">
            <input type="text" placeholder="Enter Email" name="email" style="width: 50%;" required>
        </div>

        <div class="col-6">
            <label for="fname">
                <b>Firstname</b>
            </label>
        </div>

        <div class="col-6">
            <input type="text" placeholder="Enter Firstname" name="fname" style="width: 50%;" required>
        </div>

        <div class="col-6">
            <label for="lname">
                <b>Lastname</b>
            </label>
        </div>

        <div class="col-6">
            <input type="text" placeholder="Enter Username" name="lname" style="width: 50%;" required>
        </div>

        <div class="col-6">
            <label for="birthday">
                <b>Birthday</b>
            </label>
        </div>

        <div class="col-6">
            <input type="date" name="birthday" style="width: 50%;" required>
        </div>

        <div class="col-6">
            <label for="lname">
                <b>Phone</b>
            </label>
        </div>

        <div class="col-6">
            <input type="tel" placeholder="Enter Username" name="lname" style="width: 50%;" required
                pattern="[0-9]{2}-[0-9]{8}">
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
            <label class="form-check-label" for="defaultCheck1">
                I am a buyer
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
            <label class="form-check-label" for="defaultCheck1">
                I am a seller
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
            <label class="form-check-label" for="defaultCheck1">
                Subscribe to news
            </label>
        </div>
    </div>

    <button type="submit">Registreer</button>
</form>

<?php require 'view/components/footer.php'; ?>