<?php

include "connection.php";

if(isset($_POST['submit']))
{
    $buyer_name   = $_POST['buyer_name'];
    $property_name = $_POST['property_name'];
    $rating       = $_POST['rating'];
    $feedback     = $_POST['feedback'];

    $sql = "INSERT INTO feedback
            (buyer_name, property_name, rating, feedback)
            VALUES
            ('$buyer_name',
             '$property_name',
             '$rating',
             '$feedback')";

    if(mysqli_query($conn,$sql))
    {
        echo "Feedback Submitted Successfully";
    }
    else
    {
        echo "Error : ".mysqli_error($conn);
    }
}
else
{
    echo "Please submit form first.";
}

?>