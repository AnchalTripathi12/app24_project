<form action="selectvadetion.php" method="post">
    name: <input type="text" name="name"/>
    <small style="color:red"><?= isset($_GET['nameerror'])  ? $_GET['nameerror']: ''?></small>
    Email: <input type="text" name="email"/>
    <small style="color:red"><?= isset($_GET['emailerror'])  ? $_GET['emailerror']: ''?></small>
    Number: <input type="text" name="number">
    <small style="color:red"><?= isset($_GET['numerror']) ? $_GET['numerror']: '' ?></small>
   
<select name="country" id="">
    <option value="">--select--</option>
    <option value="hindu">India</option>
    <option value="mushlim">america</option>
    <option value="others">nepal</option>

</select>
<small style="color:red"><?= isset($_GET['countryerror']) ? $_GET['countryerror']: '' ?></small>
<div>
    <lable for="">Gender:</lable>
    <input type="radio" name="gender" value="male">Male
    <input type="radio"  name="gender" value="female">Female
    <small style="color:red"><?= isset($_GET['gendererror']) ? $_GET['gendererror']: '' ?></small>
</div>
<input type="submit" value="validation" name="validate">
</form>
