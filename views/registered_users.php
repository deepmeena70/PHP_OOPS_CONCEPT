<?php include 'header.php'; ?>

<body>

    <div class="container">


        <div class="row">
            <form class ="mt-5 ml-3" method="" action="">
                <button class="btn btn-primary" type="submit">Add User</button>
            </form>
                
            <form class ="mt-5 ml-2" method="" action="">
                <button class="btn btn-danger" type="submit">Remove All</button>
            </form>
        </div>

        <table class="table table-bordered mt-2">
            <thead>
                <tr class="">
                    <th scope="col">#</th>
                    <th scope="col">user</th>
                    <th scope="col">email</th>
                    <th scope="col">action</th>
                </tr>
            </thead>
            <tbody>
                <?php include '_table_body.php'?>
            </tbody>
        </table>
    </div>

</body>

</html>