<?php

    $query = "SELECT * FROM products";
    $result = mysqli_query($connection, $query);

    if(!$result)
    {
        die("database query failed");
    }

    while($row = mysqli_fetch_assoc($result))
    {
        var_dump($row);
        echo $row;
    }

    mysqli_free_result($result);

?>