
<form action="" method="post">
<div>
<select name="country" id="">
        <option value="">--select--</option>
        <option value="india">India</option>
        <option value="nepal">Nepal</option>
        <option value="china">China</option>
        <option value="america">America</option>

</select>
</div>
<div>
    <lable for="">Gender:</lable>
    <input type="radio" name="gender" value="male">Male
    <input type="radio"  name="gender" value="female">Female
</div>
<input type="date" name="date">
<input type="range" name="range" value=0>
<textarea name="text" id=""></textarea>
<input type="search">
<input type="color" name="color">
<input type="submit">
</form>

<?php
echo "<pre>";
    print_r($_POST);

?>
<div style="height:100px; width:100px; background:<?= $_POST['color']?>"></div>