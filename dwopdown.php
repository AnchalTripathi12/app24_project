<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dropdon</title>
</head>
<body>
    <select name="" id="">
        <option value="">--select country--</option>
            <?php
            $name =["India","America","Pakistan","Chhina","Bhutan","Nepal"];

            foreach($name as $val){
               
            
            ?>
             <!-- <option value =''><?php echo $val; ?></option> -->
             <option value =""><?= $val ?></option>

             <?php
             }
             ?>
    </select>
</body>
</html>