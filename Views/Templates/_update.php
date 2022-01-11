<section class="mt-5 ">
    <div class="container bg-light">
        <div class="row">
            <div class="col-lg-3">
                <h5 class="my-2">Update User</h5>
            </div>
        </div>
        <hr class="m-0">
        <div class="row justify-content-center my-3">
            <div class="col-12 col-md-6 bg-light my-3">
                <form action="" method="post" class="p-3 border" enctype="multipart/form-data">
                            <input type="hidden" class="form-control" name="user_id"
                                   value="<?= $user['user_id'] ?>">
                       
                    <div class="py-2">
                        <div class="input-group mb-2">
                            <input type="text" class="form-control" name="name"
                                   value="<?= $user['name'] ?>">
                        </div>
                    </div>
                    <div class="pt-2">
                        <div class="input-group mb-2">
                            <input type="text" class="form-control" name="username"
                                   value="<?= $user['username'] ?>">
                        </div>
                    </div>
                    <div class="pt-2">
                        <div class="input-group mb-2">
                            <input type="email" class="form-control" name="email"
                                   value="<?= $user['email'] ?>">
                        </div>
                    </div>
                    <div class="pt-2">
                        <div class="input-group mb-2">
                            <input type="tel" class="form-control" name="phone"
                                   value="<?= $user['phone'] ?>">
                        </div>
                    </div>
                    <div class="pt-2">
                        <div class="input-group mb-2">
                            <input type="text" class="form-control" name="web"
                                   value="<?= $user['website'] ?>">
                        </div>
                    </div>
                    <div class="pt-2">
                        <div class="input-group mb-2">
                            <input type="file" class="form-control" name="image">
                        </div>
                    </div>
                    

                    <button  class="form-control submit btn btn-success w-25 my-3">update</button>

                </form>

            </div>
        </div>

    </div>

</section>

