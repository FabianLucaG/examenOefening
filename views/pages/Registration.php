<?php
$title = 'Registration';

require 'views/layout/header.php'; ?>

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
                <input type="text" class="form-control" placeholder="Enter Lastname" name="lname" required>
            </div>
            
            <div class="form-group  col-8 py-1">
                <input type="date" class="form-control" name="birthday" required>
            </div>

            <div class="form-group  col-8 py-1">
                <input type="tel"  class="form-control"placeholder="Enter Phone number" name="lname" required
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