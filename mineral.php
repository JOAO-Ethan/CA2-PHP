<?php include "templates/header.php";
if(empty($_GET["id"])){
    header( "refresh:2;url=mineral_list.php" );
    echo '<h3 class="text-center mt-3">No id given, return to selection page in 2s...</h3>';
}

$mineralID = $_GET["id"];
$query = "SELECT * FROM mineral WHERE id =" . $mineralID;
$statement = $db->prepare($query);
$statement->execute();
$statement->setFetchMode(PDO::FETCH_ASSOC);
$mineral = $statement->fetch();
$statement->closeCursor();

$querySyst = "SELECT name FROM crystal_system WHERE id = " . $mineral["crystalSystemID"];
$statement2 = $db->prepare($querySyst);
$statement2->execute();
$statement2->setFetchMode(PDO::FETCH_ASSOC);
$system = $statement2->fetch();
$statement2->closeCursor();
?>
<main class="container mx-auto mt-3 mb-3 text-center text-light">
    <div class="border border-dark w-50 mx-auto bg-secondary rounded">
    <h1 class="mx-auto"><?php echo $mineral["name"]; ?></h1>
    <img class="mx-auto img-responsive rounded w-75" src="<?php echo $mineral["picturePath"] ?>">
    <div class="mx-auto mt-1">Chemical Formula : <?php echo $mineral["chemical_formula"]; ?></div>
    <div class="mx-auto mt-1">Crystal System : <?php echo $system["name"]; ?></div>
    <div class="mx-auto mt-1">Hardness : <?php if ($mineral["minHardness"] != $mineral["maxHardness"]) {
            echo $mineral["minHardness"] . ' - ' . $mineral["maxHardness"];
        } else {
            echo $mineral["minHardness"];
        } ?></div>
    </div>
</main>
<?php include "templates/footer.php"; ?>
