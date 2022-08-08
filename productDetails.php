<?php require "template/profile.php";?>
<div id="center-details">
<a href="profile.php" id="back" style="text-decoration: none; color:black;" >Go back</a>
    <!-- <h2>Product Details</h2> -->
    <div id="product_details">
    <?php require "template/productDetails.php";?>
    </div>
</div>

    <!-- Modal -->
       <div class="modal fade" id="addProduct" role="dialog">
        <div class="modal-dialog modal-sm">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-body">
          <p>Added to cart</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
        </div>
    </div>
    </div> 

<p id="footer">© Sandra Masiwa 2022</p>
<?php require "template/footer.php";?>

<script src="js/jquery2.js"></script>
<script src="main.js"></script>

<script>
	var status_color = document.getElementById("status_color");
	// console.log(status_color.innerHTML);
  	if(status_color.innerHTML == "Available"){
      console.log(status_color.innerHTML);
			status_color.style.backgroundColor = "rgb(85,249,85)";
    }else{
      status_color.style.backgroundColor = "rgb(253,62,62)";
    }

</script>