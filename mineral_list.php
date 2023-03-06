<?php include "templates/header.php";
$query = 'SELECT id, name, picturePath FROM mineral';
$statement = $db->prepare($query);
$statement->execute();
$minerals = $statement->fetchAll();
$statement->closeCursor();
$nb = 0;
?>
    <main class="container">
        <div class="starter-template text-center">
            <h1>Minerals List</h1>
            <div class="container">
                <div class="row align-items-center mx-auto">
                    <?php foreach ($minerals as $mineral) :
                        if ($nb % 3 == 0) {
                            echo '</div>';
                            echo '<div class="row align-items-center mb-3 mx-auto">';
                        }
                        include "templates/card.php";
                        $nb++;
                    endforeach; ?>
                </div>
            </div>

    </main><!-- /.container -->
<?php include "templates/footer.php"; ?>