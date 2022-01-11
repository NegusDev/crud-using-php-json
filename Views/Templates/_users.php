<div class="container my-4 shadow-lg">
    <div class="row justify-content-center">
        <div class="col-12 my-2 mx-auto">
        <div class="row">
                    <div class="col-lg-3">
                        <h5 class="my-2">Manage Product</h5>
                    </div>
                </div>
                <hr class="m-0">
                <div class="row d-flex justify-content-end px-4 py-1">
                    <div class="col-lg-3">
                        <a href="create.php" class="px-3 border-end border-start text-black btn btn-primary"
                           >Add New Users</a>
                    </div>
                </div>

        <table class="table table-striped table-default  table-bordered">
            <thead class="thead-danger">
                <tr>
                    <th>Name</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Website</th>
                    <th>Action</th>
                </tr>
            </thead>
            <?=
            $page['content'];
            ?> 
        </table>
        </div>
    </div>

</div>