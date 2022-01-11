<section class="mt-5 ">
    <div class="container bg-light">
        <div class="row">
            <div class="col-lg-3">
                <h5 class="my-2">Add User</h5>
            </div>
        </div>
        <hr class="m-0">
        <div class="row justify-content-center my-3">
            <div class="col-12 col-md-6 bg-light my-3">
                <form action="" method="post" class="p-3 border" enctype="multipart/form-data">
                    <div class="py-2">
                        <div class="input-group mb-2">
                            <input type="text" class="form-control <?php echo $errors['name'] ? 'is-invalid': '' ?>" name="name" placeholder="Name">
                            <div class="invalid-feedback">
                                <?= $errors['name']; ?>
                            </div>
                        </div>
                    </div>
                    <div class="pt-2">
                        <div class="input-group mb-2">
                            <input type="text" class="form-control <?php echo $errors['username'] ? 'is-invalid': '' ?>" name="username"  placeholder="Username">
                            <div class="invalid-feedback">
                                <?= $errors['username']; ?>
                            </div>
                        </div>
                    </div>
                    <div class="pt-2">
                        <div class="input-group mb-2">
                            <input type="email" class="form-control <?php echo $errors['email'] ? 'is-invalid': '' ?>" name="email"  placeholder="Email">
                            <div class="invalid-feedback">
                                <?= $errors['email']; ?>
                            </div>
                        </div>
                    </div>
                    <div class="pt-2">
                        <div class="input-group mb-2">
                            <input type="tel" class="form-control <?php echo $errors['phone'] ? 'is-invalid': '' ?>" name="phone"  placeholder="Phone">
                            <div class="invalid-feedback">
                                <?= $errors['phone']; ?>
                            </div>
                        </div>
                    </div>
                    <div class="pt-2">
                        <div class="input-group mb-2">
                            <input type="text" class="form-control <?php echo $errors['website'] ? 'is-invalid': '' ?>" name="website"  placeholder="Website">
                            <div class="invalid-feedback">
                                <?= $errors['website']; ?>
                            </div>
                        </div>
                    </div>
                    <div class="pt-2">
                        <div class="input-group mb-2">
                            <input type="file" class="form-control" name="image">
                        </div>
                    </div>
                    

                    <button  class="form-control submit btn btn-success w-25 my-3">Add</button>

                </form>

            </div>
        </div>

    </div>

</section>
