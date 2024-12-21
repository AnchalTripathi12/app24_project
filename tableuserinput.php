<form action="" method="post">
    <input type="text" name="number">
    <input type="submit">
</form>

<table border='1' cellspacing=0 cellpadding=0 style="border:red">
    <tr>
        <th>Table</th>
    </tr>
    <?php

$num=$_POST['number'];
for($i=1;$i<=10;$i++){   
?>
<tr>
    <td>
        <?= $num*$i;?>
    </td>
</tr>
<?php }?>
</table>

