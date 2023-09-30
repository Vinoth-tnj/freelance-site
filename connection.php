<?php

$conn = mysqli_connect("sql12.freesqldatabase.com","sql12608968","qNjdtzJmWd","sql12608968");

if($conn)
{
    echo "connected";
}
else
{
    echo "not connected";
}

?>