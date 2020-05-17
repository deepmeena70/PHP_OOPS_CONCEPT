<?php foreach($result as $key=>$val): ?>

<tr>
    <th scope="row"><?php echo $val[0] ?></th>
    <td><?php echo $val[1] ?></td>
    <td><?php echo $val[2] ?></td>
    <td><?php echo $val[3] ?></td>
    <td class="col-4 mx-auto">
        <div class="row">
            <a class="ml-3" href="edit.php/?id=<?php echo $val[0]?>"><button class="btn btn-primary" type="">Edit</button></a>
            <a class="ml-3" href="delete.php/?id=<?php echo $val[0]?>"><button class="btn btn-danger" type="">Remove</button></a>
        </div>
    </td>
</tr>

<?php endforeach ?>