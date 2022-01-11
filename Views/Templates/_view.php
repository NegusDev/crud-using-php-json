<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-6">
            <div class="card text-center" style="width: 18rem;">
                <div class="card-header">
                    User ID: <?= $user['user_id']?>
                </div>
                <img src="./users/images/<?=$user['user_id'].$user['extension']?>" class="card-img-top" alt="<?= $user['extension']?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= $user['name']?></h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>Username:</stong> <?= $user['username']?></li>
                        <li class="list-group-item"><strong>Email:</stong> <?= $user['email']?></li>
                        <li class="list-group-item"><strong>Phone:</stong> <?= $user['phone']?></li>
                        <li class="list-group-item"><strong>Website:</stong> <?= $user['website']?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>