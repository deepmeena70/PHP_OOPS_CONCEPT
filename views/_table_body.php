<?php foreach($result as $key=>$val): ?>

<tr>
    <th scope="row"><?php echo $val[0] ?></th>
    <td><?php echo $val[1] ?></td>
    <td><?php echo $val[2] ?></td>
    <td class="col-4 mx-auto">
        <div class="row">
            <form class="col-2" method="" action="">
                <button class="btn btn-primary">EDIT</button>
            </form>
            <form class="col-2" method="" action="">
                <button class="btn btn-danger">Remove</button>
            </form>
        </div>
    </td>
</tr>

<?php endforeach ?>