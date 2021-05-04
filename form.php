<?php 
 
    if(isset($_POST['btn-send']))
    {
        $UserName = $_POST['UName'];
        $Email = $_POST['Email'];
        $Number = $_POST['Number'];
        $Msg = $_POST['msg'];

        if(empty($UserName) || empty($Email) || empty($Number) || empty($Msg))

        {
            header('location:index.html?error');
        }
        else
        {
            $to = "bullsimpacts@gmail.com";

            if(mail($to,$Number,$Msg,$Email))
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