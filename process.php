<?php 

    if(isset($_POST['btn-send']))
    {
        $UserName = $_POST['UName'];
        $Email = $_POST['Email'];
        $Number = $_POST['Number'];
        $Msg = $_POST['Msg'];

        if(empty($UName)) || empty($Email) || empty($Number) || empty($Message))

        {
            header('location:index.html?error');
        }
        else
        {
            $to = "ritikingle.9689@gmail.com";

            if(mail($to,$Number,$Message,$Email,$Message))
            {
                header("location:index.html?success");
            }
        }
    }    
    else
    {
        header("location:index.html");
    }

?>