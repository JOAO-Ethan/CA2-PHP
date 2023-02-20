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
                <div class="row align-items-center">
                    <?php foreach ($minerals as $mineral) :
                        if ($nb == 3) {
                            echo '</div>';
                        }
                        include "templates/card.php";
                        if ($nb == 3) {
                            echo '<div class="row align-items-center">';
                            $nb = 0;
                        }
                        $nb++;
                    endforeach; ?>
                </div>
            </div>

    </main><!-- /.container -->
<?php include "templates/footer.php"; ?>