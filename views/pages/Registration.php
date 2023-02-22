<?php
// require 'view/header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
    <form action='' method="POST">
        <div class="row py-5 d-flex justify-content-center">

            <div class="form-group  col-8 py-1">
                <input type="text" class="form-control" placeholder="Enter Username" name="uname" required>
            </div>


            <div class="form-group  col-8 py-1">
                <input type="text" class="form-control" placeholder="Enter password" name="psw" required>
            </div>

            <div class="form-group  col-8 py-1">
                <input type="text" class="form-control" placeholder="Enter Email" name="email" required>
            </div>

            <div class="form-group  col-8 py-1">
                <input type="text" class="form-control" placeholder="Enter Firstname" name="fname" required>
            </div>

            <div class="form-group  col-8 py-1">
                <input type="text" class="form-control" placeholder="Enter Username" name="lname" required>
            </div>
            
            <div class="form-group  col-8 py-1">
                <input type="date" class="form-control" name="birthday" required>
            </div>

            <div class="form-group  col-8 py-1">
                <input type="tel"  class="form-control"placeholder="Enter Username" name="lname" required
                    pattern="[0-9]{2}-[0-9]{8}">
            </div>

            <div class="form-check col-7">
                <input class="form-check-input" type="checkbox" value="" id="buyer">
                <label class="form-check-label" for="buyer">
                    I will be a buyer
                </label>
            </div>
            
            <div class="form-check col-7">
                <input class="form-check-input" type="checkbox" value="" id="seller">
                <label class="form-check-label" for="seller">
                    I will be a seller
                </label>
            </div>
            
            <div class="form-check col-7">
                <input class="form-check-input" type="checkbox" value="" id="news">
                <label class="form-check-label" for="news">
                    Subscribe to news
                </label>
            </div>  
            
        <div class="col-8">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
</body>