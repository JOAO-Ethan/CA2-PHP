<?php include "templates/header.php";
$query = 'SELECT id, name, picturePath FROM mineral ORDER BY RAND() LIMIT 6';
$statement = $db->prepare($query);
$statement->execute();
$minerals = $statement->fetchAll();
$statement->closeCursor(); ?>
    <div id="head" class="container position-relative">
        <img id="banner" src="images/banner.jpg">
        <h1 class="position-absolute top-50 start-50 translate-middle text-white fs-1">Mineralogy Database</h1>
    </div>
    <main class="container">
        <div class="starter-template text-center">
            <p class="lead">Welcome to our website ! We provide some information about mineral species. If you want to
                browse the ones we currently have, please go to the Mineral List page !
                Remember that no mineral have "magical" properties that can cure you. The only properties mineral
                species have are their chemicophysical ones (eg. quartz is piezoelectric, uranium is radioactive, lead
                is toxic, etc)
            </p>
        </div>
        <div class="text-center mb-4">
            <h3>Some of our species</h3>
            <div id="mineralCarousel" class="carousel-slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <?php foreach ($minerals as $mineral) : ?>
                        <div class="carousel-item <?php if ($mineral == $minerals[0]) echo 'active'; ?>" data-bs-interval="2000">
                            <a href="mineral.php?id=<?php echo $mineral['id']; ?>">
                                <img class="img-fluid" src="<?php echo $mineral['picturePath']; ?>">
                            </a>
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="text-white-100"><?php echo $mineral['name']; ?></h5>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </main><!-- /.container -->
<?php include "templates/footer.php"; ?>