<?php
include "host.php";
if (isset($_REQUEST['search_query'])){
    $search_array = explode(" ",$_REQUEST['search_query']);
    $query = "SELECT id, name, poster_img  FROM movie_details WHERE";
    foreach ($search_array as $values){
        if ($search_array[0] == $values){
            $query = $query." name LIKE '%$values%'";
        }
        else{
            $query = $query." OR name LIKE '%$values%'";
        }
    }
    $query = $query.' ORDER BY views';
    $result = mysqli_query($mysqli, $query);
    if ($result->num_rows > 0){
        while ($row = $result->fetch_assoc()){
            echo 
            "<div class= 'search_card'>
            <img src='".$row['poster_img']."' class='search_image'>
            <span class='search_title'>".$row['name']."</span>
            </div>";
        }
        echo 
            '<div id="load_more">
            Load More...
            </div>';
    }
}
else{
    echo "field is empty!";
}
?>