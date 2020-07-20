<?php
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
?>
<?php
    include './BaseController.php';
    include './Model.php';
    include './View.php';
	include './Database.php';

?>



<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">

        <title>Shop</title>
        <meta name="description" content="Shop">
        <meta name="author" content="Arden University">
		<link rel="stylesheet" href="./css/style.css?random=<?php echo uniqid(); ?>">
        
    </head>
    <body>
        <h1>Shop</h1>

        <div>
            <h2>Opening times</h2>

            <?php

            include './ShopController.php';
            include './OpeningTimesModel.php';
            include './OpeningTimesView.php';


            $shopController = new Arden\ShopController();

            $openingTimesView = new Arden\OpeningTimesView($shopController->getModelData());

            echo $openingTimesView->render();
            ?>
			</div>
        <div style="height:1000px;">
            <h2>Top Products</h2>
            <?php

            include './ProductsController.php';
            include './ProductsModel.php';
            include './ProductsView.php';


            $productsController = new Arden\ProductsController();

            $productsView = new Arden\ProductsView($productsController->getModelData());

            echo $productsView->render();
            ?>
        </div>
		<br>
		      <div>
            <h2>Contact Form</h2>
            <?php

            include './ContactController.php';
            include './ContactModel.php';
            include './ContactView.php';

			if (isset($_POST['userName']) )
			{
				$contactController = new Arden\ContactController($_POST['userName'],$_POST['userEmail'],$_POST['userContent']);
			}else{
				 $contactController = new Arden\ContactController();
			}
            $contactView = new Arden\ContactView($contactController->getResponse());

            echo $contactView->render();
            ?>
        </div>




    </body>

	 <script src="./jquery-2.1.1.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        function validateContactForm() {
            var valid = true;

            $(".input_field").css('border', '#e0dfdf 1px solid');
            var userName = $("#userName").val();
            var userEmail = $("#userEmail").val();
            var content = $("#usercontent").val();
            
            if (userName == "") {
                $("#userName-info").html("Required.");
                $("#userName").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (userEmail == "") {
                $("#userEmail-info").html("Required.");
                $("#userEmail").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (!userEmail.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/))
            {
                $("#userEmail-info").html("Invalid Email Address.");
                $("#userEmail").css('border', '#e66262 1px solid');
                valid = false;
            }

            if (content == "") {
                $("#userMessage-info").html("Required.");
                $("#content").css('border', '#e66262 1px solid');
                valid = false;
            }
            return valid;
        }
</script>







</html>
