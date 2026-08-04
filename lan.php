<?php
include "connection.php";

$sql = "SELECT * FROM pro
        WHERE pro_type  LIKE '%Land%'
        OR pro_type LIKE '%Plot%'";

$result = mysqli_query($conn, $sql);

if(!$result)
{
    die("Query Error : " . mysqli_error($conn));
}

if(mysqli_num_rows($result) == 0)
{
    echo "No Land or Plot Properties Found";
}
else
{
    while($row = mysqli_fetch_assoc($result))
    {
?>
        <div>

            <img src="images/<?php echo $row['image']; ?>"
                 width="300">

            <h2><?php echo $row['pro_name']; ?></h2>

            <p>
                <b>Owner :</b>
                <?php echo $row['owner_name']; ?>
            </p>

            <p>
                <b>Location :</b>
                <?php echo $row['location']; ?>
            </p>

            <p>
                <b>Price :</b>
                ₹ <?php echo $row['price']; ?>
            </p>

            <a href="property_details.php?id=<?php echo $row['id']; ?>">
                View Details
            </a>

            <hr>

        </div>
<?php
    }
}
?>