<?php
function component($bookimg,$bookname,$bookedition,$bookprice,$book_id){
	$element="
	<div class=\"column\">
    <div class=\"card\">
	<form action=\"cart.php\" method=\"POST\">
	<center><img src=\"$bookimg\" alt=\"Denim Jeans\" class=\"img-fluid card-img-top\"></center>
  <center><h1 class=\"product\">$bookname <br>$bookedition</h1></center>
  <center><p class=\"price\">$bookprice</p></center><br>
  <p><button type=\"submit\" name=\"add\">Add to Readlist <i class=\"cart\"></i></button></p>
  <input type='hidden' name='book_id'value='$book_id'>
  </form>
</div>
</div>";
echo $element;
}

function cartElement($bookimg,$bookname,$bookedition,
	$bookprice,$book_id){
	$element="
	<form action=\"cart.php\" method=\"POS\" class=\"item\"> 
 
    <div class=\"buttons\">
      <span action=\"/delete.php\" method=\"post\" class=\"btnRemoveAction\">
      <img src=\"icon-delete.png\" name=\"remove\" alt=\"Remove Item\" /></span>
      </div>
    <div class=\"heart\" ></div>
 
    <div class=\"image\">
      <img src=\"$bookimg\" alt=\"image1\" />
    </div>
 
    <div class=\"description\">
      <span>$bookname</span>
      <span>$bookedition</span>
      <span>Paperback</span>
    </div>
 
    <div class=\"quantity\">  
      Book No.: $book_id
    </div>
 
    <div class=\"total-price\">$bookprice</div>
  </div>

 </form>";
 echo $element;
}
?>