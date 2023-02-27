<?php require_once('database/database.php');
$name = $_POST['name'];
$query = "SELECT id, name, picturePath FROM mineral WHERE name LIKE '%$name%'";
$statement = $db->prepare($query);
$statement->execute();
$minerals = $statement->fetchAll();
$statement->closeCursor();
if(count($minerals) == 1){
    $id = $minerals[0]['id'];
    header("Location:mineral.php?id=$id");
}
include "templates/header.php";
?>
<main class="container">
    <div class="starter-template text-center">
        <h1>Minerals List</h1>
        <div class="container">
            <div class="row align-items-center mb-3 mx-auto">
                <?php foreach ($minerals as $mineral) :
                    if ($nb % 2 == 0) {
                        echo '</div>';
                        echo '<div class="row align-items-center mb-3 mx-auto">';
                    }
                    include "templates/card.php";
                    $nb++;
                endforeach;
                if(count($minerals) == 0){
                    echo "<h4>No mineral found for \"$name\"</h4>";
                }?>
            </div>
        </div>

</main>
<?php include "templates/footer.php"; ?>
