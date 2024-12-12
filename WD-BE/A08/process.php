<?php
include("connect.php");
include("classes.php");

$islandInformation = []; 

$islandQuery = "SELECT * FROM islandcontents 
                JOIN islandsofpersonality 
                ON islandcontents.islandOfPersonalityID = islandsofpersonality.islandOfPersonalityID";

$islandResult = executeQuery($islandQuery);

if (mysqli_num_rows($islandResult) > 0) {
    while ($islandRow = mysqli_fetch_assoc($islandResult)) {
        $islandInformation[] = new IslandContent(
            $islandRow['islandOfPersonalityID'],
            $islandRow['islandContentID'],
            $islandRow['name'],
            $islandRow['longDescription'],
            $islandRow['color'],
            $islandRow['image'],
            $islandRow['content']
        );
    }
} else {
    $islandInformation = "No content found.";
}
?>
