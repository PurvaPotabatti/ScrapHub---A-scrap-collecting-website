<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    if (isset($_POST['Add_to_Cart']) && isset($_POST['scrap_name'])) 
	{
        if (isset($_SESSION['card'])) 
		{
            $myitems = [];
            foreach ($_SESSION['card'] as $item) 
			{
                $myitems[] = $item['Scrap_name']; // 
            }
            if (in_array($_POST['scrap_name'], $myitems)) 
			{
                echo "<script>
                alert('Item already added');
                window.location.href='categories_demo.php';
                </script>";
            }
            else
		    {		
            $count = count($_SESSION['card']);
            $_SESSION['card'][$count] = array('Scrap_name' => $_POST['scrap_name'], 'Price' => $_POST['price'], 'Quantity' => 1);
            echo "<script>
                alert('Item added');
                window.location.href='categories_demo.php';
                </script>";
			}	
        } 
		else 
		{
            $_SESSION['card'][0] = array('Scrap_name' => $_POST['scrap_name'], 'Price' => $_POST['price'], 'Quantity' => 1);
            echo "<script>
                alert('Item added');
                window.location.href='categories_demo.php';
                </script>";
        }
    }
	
	
	if(isset($_POST['Remove_item']))
	{
		foreach($_SESSION['card'] as $key => $value)
        {
			if($value['scrap_name']==$_POST['scrap_name'])
			{
				unset($_SESSION['card'][$key]);
				$_SESSION['card']=array_values($_SESSION['card']);
				echo"<script>
				alert('Item removed');
				window.location.href='add_to_cart_demo.php';
				</script>";
            }				
        }			
	}
	
	
	if(isset($_POST['Mod_Quantity']))
	{
	  foreach($_SESSION['card'] as $key => $value)
        {
			if($value['scrap_name']==$_POST['scrap_name'])
			{
				$_SESSION['card'][$key]['Quantity']=$_POST['Mod_Quantity'];
				echo "<script>
				window.location.href='add_to_cart_demo.php';
				</script>";
            }				
        }			
	}		
}


?>
