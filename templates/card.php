<div class="col">
    <div  class="card bg-light text-info" style="width: 20rem">
        <a href="mineral.php?id=<?php echo $mineral['id'] ?>">
            <div class="card-body ">
                <h2 class="card-title"><?php echo $mineral['name']; ?></h2>
                <img class="card-img img-responsive h-25" src="<?php echo $mineral['picturePath']; ?>" >
            </div>
        </a>
    </div>
</div>