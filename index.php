
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<!-- saved from url=(0033)https://www.BlackPeopleMarketplace.com -->

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta content="text/html; charset=iso-8859-1" http-equiv="Content-Type" />

<title>Inventory XL</title>
	
<meta name="description" content="Inventory XL - Free Inventory Software ">
	
<meta name="keywords" content="InventoryXL ">

<meta name="Distribution" content="Global" />

<meta name="Rating" content="General" />

<meta name="Robots" content="INDEX,FOLLOW" />

<meta name="Revisit-after" content="1 Day" />

<style type="text/css" media="all">

<!--



@import url("/InventoryXL/indexCSS.css");


-->

</style>
</head>

<body>
 
	
	<script src='/Includes/plugin_scripts/js/2.1.4-jquery.min.js'></script>





  
	
<div id='header'><div id='logo'><span class='websiteName'><a href='/InventoryXL'>Inventory XL</a></span></div>
<div id='headerLeft'>


<ul>
 

  <ul style='list-style-type:none;'>
    
	
	  
	<li><a href='../../../../InventoryXL/mainList/index.php'>Inventory</a></li>
	<li><a href='../../../../InventoryXL/scan/index.php'>Scan</a></li>
    <li><a href='../../../../InventoryXL/addItem/index.php'>Add Item</a></li>

  </ul>

</ul>

</div>
</div>

<noscript>
<center>
<div class='alert'>
  <span class='closebtn' onclick=\"this.parentElement.style.display='none';\">&times;</span> 
  Please Enable Javascript.
</div>
</center>
</noscript> 










	

<div id="page_container">
		
		
		
		
		<div id='top_nav_list'>
		
		<li><a href='/'>Home</a></li> |
		<li><a href='/purchases'>Purchases </a></li> 
		
		</div>
		
		
	
		<div id='main_area_wrap'>

			
			
		
		
		
		
		<div id='right_main_wrap'>
		<div id='right_main'>
		
		
			
						<div id='right_top_bar'>
			<div id='total_orders'>
				 Purchase History
				
				</div>
			<div id='total_value'>
				---
				
				</div>
			
			</div>
			
			
				<div id='table'>

		<?php
					
				
			$query0 = "SELECT * FROM OrdersTable Left JOIN UsersInfoTable on OrdersTable.o_BuyerID = UsersInfoTable.userID   WHERE userID =$uID AND userID =o_BuyerID order by orderID desc ";
			$result = mysqli_query($db_conx, $query0);
//        $row = mysqli_fetch_row($query0);
	$numrows = mysqli_num_rows($result);


					while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {

	
			$orderID = $row["orderID"];
	$o_BuyerID = $row["o_BuyerID"];
	$o_SellerID = $row["o_SellerID"];
	$o_ItemID = $row["o_ItemID"];
	$orderShipByDate = $row["orderShipByDate"];
	$orderPaidDate = $row["orderPaidDate"];
		$o_buyer_Fname = $row["o_buyer_Fname"];
		$o_buyer_Lname = $row["o_buyer_Lname"];
		$o_Qty = $row["o_Qty"];
		$o_itm_price = $row["o_itm_price"];
		$o_itm_shipping_cost = $row["o_itm_shipping_cost"];
		$o_total_cost = $row["o_total_cost"];
		$o_itm_title = $row["o_itm_title"];
		$orderStatus = $row["orderStatus"];
						
		$userName =  $row['userName'];
		$userID =  $row['userID'];
	$o_itm_price = add_dollar_sign_input($o_itm_price);

		//$orderShipByDate = date_format($orderShipByDate,"l F  jS Y ");
	
						
						
						
								$query = "SELECT * FROM  ItemMediaPathTable  WHERE mediaItemID = $o_ItemID AND mediaDeletedBOOL ='NO' AND mediaPlacementNumber ='0' Limit 1";
			$result0 = mysqli_query($db_conx, $query);
//        $row = mysqli_fetch_row($query0);
	$numrows0 = mysqli_num_rows($result0);
if($numrows0 > 0){
		while ($row0 = mysqli_fetch_array($result0, MYSQLI_ASSOC)) {

	
		$mediaThumbnailPath =  $row0['mediaThumbnailPath'];


		}
		}

						?>
					
		
					
					
	<div class='table_cell' id='<?php echo "$o_ItemID";?>_XXXX'>
		<div class='item_title' onclick="window.location.href='/item/?i=<?php echo $o_ItemID; ?>'"><?php echo "$o_itm_title";?></div>
<div class='info_wrap'>
				<div class='image_area' onclick="window.location.href='/item/?i=<?php echo $o_ItemID; ?>'">
						<img class='item_image' src='<?php echo "$mediaThumbnailPath";?>'  alt='<?php echo "$o_itm_title"; ?>' >
					</div>	
	
		<div class='details_area'>
			<div class='left w50'>
		<div class='item_price'>Item Cost: <?php echo "$o_itm_price";?></div>
		<div class='order_date'>Order Date: <?php echo "$orderPaidDate";?></div>
			<div class='item_ID'>Item #: <?php echo "$o_ItemID";?></div>
			</div>
			<div class='right w50'>
				<div class='status_id'>Status #: <?php echo "$orderStatus";?></div>
				
		<div class='sold_by'  onclick="window.location.href='/user/?u=<?php echo $o_SellerID; ?>'">Sold by:<?php echo "$userName";?></div>
				
			<div class='order_id'>Order #: <?php echo "$orderID";?></div>
			</div>
		</div>
		
		</div>
		
			</div>
		
					
					
					
					
				<?php	
					
					
					
				}
					
					
					
					
					
				?>	
					
					
			</div>
		
		</div>
		</div>
		
		</div>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
	</div>
		


		
</body>
	
	
	<script>
	
	
		
		
		

function view_page_func(xxx){

	
	
	
				//alert(xxx);


								if(xxx == 'Notifications'){
			
window.location.href = "https://www.BlackPeopleMarketplace.com/notifications/?u=<?php echo $userid; ?>";
		
	}	
	
								if(xxx == 'Transactions'){
			
window.location.href = "https://www.BlackPeopleMarketplace.com/transactions/?u=<?php echo $userid; ?>";
		
	}	
	
								if(xxx == 'Orders'){
			
window.location.href = "https://www.BlackPeopleMarketplace.com/orders/?u=<?php echo $userid; ?>";
		
	}	
	
	if(xxx == 'Account'){
			
window.location.href = "https://www.BlackPeopleMarketplace.com/Account/?u=<?php echo $userid; ?>";
		
	}		
							if(xxx == 'Stats'){
			
window.location.href = "https://www.BlackPeopleMarketplace.com/Stats/?u=<?php echo $userid; ?>";
		
	}							if(xxx == 'Listing'){
			
window.location.href = "https://www.BlackPeopleMarketplace.com/Listing/?u=<?php echo $userid; ?>";
		
	}
	
								if(xxx == 'Purchases'){
			
window.location.href = "https://www.BlackPeopleMarketplace.com/purchases/?u=<?php echo $userid; ?>";
		
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		
}
		
		
		
		
		
	
	
	
	
	
	</script>
	
</html>
