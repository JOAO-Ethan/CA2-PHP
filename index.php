<?php include "templates/header.php";
$query = 'SELECT id, name, picturePath FROM mineral ORDER BY RAND() LIMIT 6';
$statement = $db->prepare($query);
$statement->execute();
$minerals = $statement->fetchAll();
$statement->closeCursor(); ?>
    <main class="container">
        <div class="starter-template text-center">
            <h1>Mineralogy Database</h1>
            <p class="lead">Welcome to our website ! We provide some information about mineral species. If you want to
                browse the ones we currently have, please go to the Mineral List page ! </p>
        </div>
        <div class="text-center">
            <h3>Some of our species</h3>
            <div class="row align-items-center mb-3 mx-auto">
                <?php foreach ($minerals as $mineral) :
                    include "templates/card.php";
                endforeach; ?>
            </div>
        </div>
    </main><!-- /.container -->
<?php include "templates/footer.php"; ?>