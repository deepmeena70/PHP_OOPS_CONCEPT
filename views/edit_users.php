<?php foreach($result as $key=>$val): ?>
<tr>
    <form action="/update.php" method="GET">
        <input type="hidden" name="id" value="<?php echo $val[0]?>">
        <input type="text" name="username" value="<?php echo$val[1] ?>">                
        <input type="email" name="email" value="<?php echo$val[2] ?>">                
        <input type="password" name="password" value="<?php echo$val[3] ?>"> 
        <input type="submit" name="" value="Update">               
    </form>
</tr>
<?php endforeach?>
