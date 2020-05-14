<?php include 'header.php'; ?>

<body>

    <div class="container">


        <table class="table table-bordered mt-5">
            <thead>
                <tr class="">
                    <th scope="col">#</th>
                    <th scope="col">user</th>
                    <th scope="col">email</th>
                    <th scop="col">password</th>
                    <th scope="col">action</th>
                </tr>
            </thead>
            <tbody>
                <?php include '_table_body.php'?>
            </tbody>
        </table>
        
        <div class="row">
            <div class="col">
                <?php include 'add_user.php'?>
            </div>
        </div>
        
    </div>

</body>

</html>