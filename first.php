<form method="post">
Name:<input type="text" name="txt"><br>
Email:<input type="email" name="email"><br>
Password:<input type="password" name="pwd"><br>
Phonenumber:<input type="number" name="phone"><br>
DOB:<input type="date" name="dob"><br>
favColor:<input type="color" name="color"><br>
select country :<select name="country">
    <option>IND</option>
    <option>USA</option>
    <option>Others</option>
    </select><br>
    Address:<textarea name="addr"></textarea><br>
<input type="submit" name="submit">
</form>

<?php

if(isset($_POST["submit"])){
    $name=$_POST['txt'];
    $email=$_POST['email'];
    $password=$_POST['pwd'];
    $dob=$_POST['dob'];
    $color=$_POST['color'];
    $country=$_POST['country'];
    $addr=$_POST['addr'];


    echo "name: ".$name."<br> Email: ".$email."<br> Password: ".$password."<br> DOB: ".$dob."<br> color: ".$color."<br> Country: ".$country."<br> address: ".$addr;
}

?>