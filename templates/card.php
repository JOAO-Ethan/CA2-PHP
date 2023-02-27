<div class="col d-flex justify-content-center">
    <div  class="card bg-light" style="height: 20rem">
        <a class="h-100" href="mineral.php?id=<?php echo $mineral['id'] ?>">
            <div class="card-body h-100">
                <h2 class="card-title"><?php echo $mineral['name']; ?></h2>
                <img class="card-img img-responsive" src="<?php echo $mineral['picturePath']; ?>" >
            </div>
        </a>
    </div>
</div>