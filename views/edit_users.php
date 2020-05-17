<?php foreach($result as $key=>$val):?>


    <tr>
        <form id="edituser">
            <th scope="row">
                <input type="" name="id" value="<?php echo $val[0]?>" readonly> 
            </th>
            <td>
                <input type="text" name="username" value="<?php echo $val[1] ?>">
            </td>
            <td>
                <input type="email" name="email" value="<?php echo $val[2] ?>"> 
            </td>
            <td class="col-4 mx-auto">
                <input type="password" name="password" value="<?php echo $val[3] ?>">
            </td>
            <td>
                <input id="submit" class="btn btn-primary" type="submit" value="Update">
            </td>
        </form>
    </tr>

<!-- <form action="/update.php" method="get">

<input type="text" name="id" value="<?php echo $val[0]?>">
<input type="text" name="username" value="<?php echo $val[1]?>">
<input type="email" name="email" value="<?php echo $val[2]?>">
<input type="password" name="password" value="<?php echo $val[3]?>">
<input type="submit" value="submit">
    
</form> -->






<?php endforeach?>







    
        
                        
                      
         
                       
    
