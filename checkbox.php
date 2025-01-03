<!-- <form action="checkbox1.php" method="post"> -->
<form action="checkbox1.php" method="post">
    Select Qualification :
        <input type="checkbox" name="subject[]" value="math">Math<br>
        <input type="checkbox" name="subject[]" value="phy">Physics<br>
        <input type="checkbox" name="subject[]" value="che">Chemistry<br>
        <input type="checkbox" name="subject[]" value="hindi">Hindi<br>
        <small style="color:red"><?= isset($_GET['checkerror']) ? $_GET['checkerror']: '' ?></small><br> 
        <input type="submit" name="validatecheck">     
</form>

