<?php

session_start();


$book1 = $_GET["book"];
$value = $_GET["value"];
$action = $_GET["action"];
$ISBN = $_GET["ISBN"];
$price = preg_replace('/\$/', '', $_GET["price"]);

if($ISBN == "0764588508"){
    $booknum = 'book1';
    $session_name="Cart";
    }else if($ISBN == "000000000000000"){
        $booknum = 'book2';
        $session_name="Cart2";
    }else if($ISBN == "11111111111"){
        $booknum = 'book3';
        $session_name="Cart3";
    }

if (array_key_exists($session_name, $_SESSION))
        {
            //$cart[$booknum] = $session;

            if($ISBN == "0764588508"){
                $cart[$booknum] = $_SESSION["Cart"];
            }else if($ISBN == "000000000000000"){
                    $cart[$booknum] = $_SESSION["Cart2"];
                }else if($ISBN == "11111111111"){
                    $cart[$booknum] = $_SESSION["Cart3"];
                }


            if ($action == "Add")
            {
                if ($cart[$booknum] != "")
                {  
                    $cart[$booknum]["name"] = $book1;
                    $value = $cart[$booknum]["value"] + 1;
                    $cart[$booknum]["value"] = $value;
                    $cart[$booknum]["price"] = $price * $value;
                }
                else
                {
                    $cart[$booknum]["name"] = $book1;
                    $cart[$booknum]["value"] = 1;
                    $cart[$booknum]["ISBN"] = $ISBN;
                    $cart[$booknum]["price"] = $price;
                }
            }
            else if($action == 'delete')
            {
                if ($cart[$booknum]["value"] >= 1)
                {  
                    $cart[$booknum]["name"] = $book1;
                    $value = $cart[$booknum]["value"] - 1;
                    $cart[$booknum]["value"] = $value;
                    $cart[$booknum]["price"] = $price * $value;
                }else{
                    $cart[$booknum]["name"] = $book1;
                    $cart[$booknum]["value"] = 0;
                    $cart[$booknum]["ISBN"] = $ISBN;
                    $cart[$booknum]["price"] = 0;
                    
                }
            }
        }
        else
        {
            $cart[$booknum]["name"] = $book1;
            $cart[$booknum]["ISBN"] = $ISBN;
            $cart[$booknum]["price"] = $price;
            $cart[$booknum]["value"] = 1;
        }
        
        if($ISBN == "0764588508"){
            $_SESSION["Cart"] = $cart[$booknum];
            }else if($ISBN == "000000000000000"){
                $_SESSION["Cart2"] = $cart[$booknum];
            }else if($ISBN == "11111111111"){
                $_SESSION["Cart3"] = $cart[$booknum];
            }

        //$session = $cart[$booknum];
        
        
        echo json_encode($cart, JSON_PRETTY_PRINT);
    
    
		
?>
