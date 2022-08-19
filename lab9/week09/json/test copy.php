<?php

session_start();

/*
$book1 = $_GET["book"];
$value = $_GET["value"];
$action = $_GET["action"];
$ISBN = $_GET["ISBN"];
$price = preg_replace('/\$/', '', $_GET["price"]);

		if (array_key_exists("Cart", $_SESSION))
        {
            $cart["book1"] = $_SESSION["Cart"]["book1"];
            if ($action == "Add")
            {
                $cart["book1"]["ISBN"] = $ISBN;
                $cart["book1"]["price"] = $price;
                if ($cart["book1"] != "")
                {  
                    $value = $cart["book1"]["value"] + 1;
                    $cart["book1"]["value"] = $value;
                    $cart["book1"]["price"] = $price * $value;
                }
                else
                {
                    $cart["book1"]["value"] = "1";
                    $cart["book1"]["ISBN"] = $ISBN;
                    $cart["book1"]["price"] = $price;
                }
            }
            else
            {
                $cart["book1"]["ISBN"] = $ISBN;
                if ($cart["book1"]["value"] >= 1)
                {  
                    $value = $cart["book1"]["value"] - 1;
                    $cart["book1"]["value"] = $value;
                    $cart["book1"]["price"] = $price * $value;
                }else if($cart[$book1] == 0){
                    $cart[$book1] = "0";
                    $cart["book1"]["ISBN"] = $ISBN;
                    $cart["book1"]["price"] = 0;
                }
                else
                {
                    $cart[$book1] = "1";
                    $cart["book1"]["ISBN"] = $ISBN;
                    $cart["book1"]["price"] = $price;
                }
            }
        }
        else
        {
            $cart[$book1] = "1";
            $cart["book1"]["ISBN"] = $ISBN;
            $cart["book1"]["price"] = $price;
        }

        $_SESSION["Cart"]["book1"] = $cart;

        
			echo json_encode($cart, JSON_PRETTY_PRINT);
		// echo json_encode($cart, JSON_PRETTY_PRINT);
        
        */
        session_destroy();
		
?>
