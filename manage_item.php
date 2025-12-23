<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    if (isset($_POST['add_item']) && isset($_POST['item_name'])) 
	{
        if (isset($_SESSION['item_card'])) 
		{
            $myitems = [];
            foreach ($_SESSION['item_card'] as $item) 
			{
                $myitems[] = $item['item_name'];
            }
            if (in_array($_POST['item_name'], $myitems)) 
			{
                echo "<script>
                alert('Item already added');
                window.location.href='item_exchange_demo.php';
                </script>";
            } 
			else 
			{
                $count = count($_SESSION['item_card']);
                // Check if file is uploaded
                $image_url = $_POST['item_image_url'];
                /*if(isset($_FILES['image']))
				{
                    $file_name = $_FILES['image']['name'];
                    $file_tmp = $_FILES['image']['tmp_name'];
                    // Move the uploaded file to a directory
                    $upload_directory = "images/";
                    move_uploaded_file($file_tmp, $upload_directory . $file_name);

                } 
				else 
				{
                    $file_name = 'No file uploaded'; // Set default if no file is uploaded
                }*/
                // Add item to session
                $_SESSION['item_card'][$count] = array(
                    'item_name' => $_POST['item_name'],
                    'item_price' => $_POST['item_price'],
                    'item_quantity' => 1,
                    'Image' => $item_image_url
                );
                echo "<script>
                alert('Item added');
                window.location.href='item_exchange_demo.php';
                </script>";
            }
        } 
		else 
		{
            // Check if file is uploaded
            /*if(isset($_FILES['image']))
			{
                $file_name = $_FILES['image']['name'];
                $file_tmp = $_FILES['image']['tmp_name'];
                // Move the uploaded file to a directory
                $upload_directory = "images/";
                move_uploaded_file($file_tmp, $upload_directory . $file_name);
            } 
			else 
			{
                $file_name = ''; // Set default if no file is uploaded
            }*/
            $item_image_url = $_POST['item_image_url'];
            // Add item to session
            $_SESSION['item_card'][0] = array(
                'item_name' => $_POST['item_name'],
                'item_price' => $_POST['item_price'],
                'item_quantity' => 1,
                'Image' => $item_image_url
            );
            echo "<script>
            alert('Item added');
            window.location.href='item_exchange_demo.php';
            </script>";
        }
    }

    if (isset($_POST['Remove_item'])) {
        foreach ($_SESSION['item_card'] as $key => $value) {
            if ($value['item_name'] == $_POST['item_name']) {
                // Remove the image file from directory
                /*$image_file = $_SESSION['item_card'][$key]['Image'];
                if (!empty($image_file)) {
                    $upload_directory = "images/";
                    unlink($upload_directory . $image_file);
                }*/
                // Remove item from session
                unset($_SESSION['item_card'][$key]);
                $_SESSION['item_card'] = array_values($_SESSION['item_card']);
                echo "<script>
                alert('Item removed');
                window.location.href='item_exchange_demo_cart.php';
                </script>";
            }
        }
    }

    if (isset($_POST['Mod_Quantity'], $_POST['item_name'])) {
        foreach ($_SESSION['item_card'] as $key => $value) {
            if ($value['item_name'] == $_POST['item_name']) {
                $_SESSION['item_card'][$key]['item_quantity'] = $_POST['Mod_Quantity'];
                echo "<script>
                window.location.href='item_exchange_demo_cart.php';
                </script>";
                exit(); // Ensure no further execution after redirection
            }
        }
    } 
	
}
?>
