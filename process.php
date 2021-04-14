<?php 

    if(isset($_POST['btn-send']))
    {
        $userName = $_POST['UName'];
        $Email = $_POST['Email'];
        $Phone = $_POST['Phone'];
        $Question = $_POST['Question'];
        $Msg = $_POST['Msg'];

        if(empty($userName)) || empty($Email) || empty($Number) || empty($Message))

        {
            header('location:ritik.php?error');
        }
        else
        {
            $to = "ritikingle.9689@gmail.com";

            if(mail($to,$Phone,$Message,$Email,$Question))
            {
                header("location:ritik.php?success");
            }
        }
    }    
    else
    {
        header("location:ritik.php");
    }

?>