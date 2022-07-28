<?php

function escape($string) {

    global $connection;

    return mysqli_real_escape_string($connection, trim($string));


}
function confirmQuery($create_post_query){
    global $connection;
    if(!$create_post_query){
        die("Query failed" . mysqli_error($connection));
    }
}
function insert_categories(){
    global $connection;
}
    if(isset($_POST['submit'])) {
        $cat_title = $_POST['cat_title'];
        if ($cat_title == "" || empty($cat_title)) {
            echo "This file should be empty";


        } else {
            $query = "INSERT INTO categories(  cat_title)";

            $query .= "VALUE ('{$cat_title}') ";

            $create_category_query = mysqli_query($connection, $query);
            if (!$create_category_query) {
                die("query failed" . mysqli_error($connection));
            }

        }
    }
?>


