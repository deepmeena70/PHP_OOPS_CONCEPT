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
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>xyz@mail.com</td>
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
            </tbody>
        </table>
    </div>

</body>

</html>