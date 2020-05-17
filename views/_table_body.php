<?php foreach($result as $key=>$val): ?>

<tr id="<?php echo $val[0]?>">
    <th scope="row"><?php echo $val[0] ?></th>
    <td><?php echo $val[1] ?></td>
    <td><?php echo $val[2] ?></td>
    <td><?php echo $val[3] ?></td>
    <td class="col-4 mx-auto">
        <div class="row">

            <button id="edit" class="btn btn-primary ml-3" onclick="edit(<?php echo $val[0] ?>)">Edit</button>
            <button id="remove" class="btn btn-danger ml-2" onclick="remove(<?php echo $val[0] ?>)">Remove</button>

            
            <!-- <a class="ml-3" href="edit.php/?id=<?php echo $val[0]?>"><button class="btn btn-primary" type="">Edit</button></a>
            <a class="ml-3" href="delete.php/?id=<?php echo $val[0]?>"><button class="btn btn-danger" type="">Remove</button></a> -->
        </div>
    </td>
</tr>

<?php endforeach ?>