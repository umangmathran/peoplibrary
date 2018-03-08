<?php
/* Adding book process, inserts book info into the database
 */
require 'db.php';
session_start();

// Make sure the form is being submitted with method="post"
if ($_SERVER['REQUEST_METHOD'] == 'POST') { 

    $bookid = $_POST['bookid'];

    $result = $mysqli->query("SELECT * FROM book WHERE bookid='$bookid'") or die($mysqli->error());

    if ( $result->num_rows == 0 ) { 
        $btitle = $_POST['btitle'];
        $bisbn = $_POST['bisbn'];
        $bimg = $_POST['bimg'];
        $bpub = $_POST['bpub'];
        $bpubd = $_POST['bpubd'];
        $blang = $_POST['blang'];
        $brate = $_POST['brate'];
        $bratecount = $_POST['bratecount'];

        $sql = "INSERT INTO book VALUES ('$bookid', '$bisbn', '$btitle', '$bimg', '$bpubd', '$bpub', '$brate', '$bratecount', '$blang')";
        $mysqli->query($sql);
    }

    $result = $mysqli->query("SELECT * FROM owns WHERE bookid='$bookid' and email='$_SESSION[email]'") or die($mysqli->error());

    if ( $result->num_rows == 0 ) { 
        $sql = "INSERT INTO owns VALUES ('$_SESSION[email]', '$bookid', '1')";
    }
    else {
        $sql = "UPDATE owns SET bcount = bcount + 1 WHERE bookid='$bookid' and email='$_SESSION[email]'";
    }

    if( $mysqli->query($sql) ) {
        $_SESSION['message'] = 'Added book!';
        header("location: success.php");
    }
    else {
        $_SESSION['message'] = 'Failed to add book!';
        header("location: error.php");
    }
}

?>