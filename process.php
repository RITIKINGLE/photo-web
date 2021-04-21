<?php 

    if(isset($_POST['btn-send']))
    {
        $UserName = $_POST['UName'];
        $Email = $_POST['Email'];
        $Number = $_POST['Number'];
        $Msg = $_POST['Msg'];

        if(empty($UName)) || empty($Email) || empty($Number) || empty($Msg))

        {
            header('location:index.php?error');
        }
        else
        {
            $to = "bullsimpacts@gmail.com";

            if(mail($to,$Number,$Msg,$Email))
            {
                header("location:index.php?success");
            }
        }
    }    
    else
    {
        header("location:index.php");
    }

?>