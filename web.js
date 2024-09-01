function openPage() {
    var x = document.getElementById("search").value;
    if (x === "mens") {
        window.open("/abc.php");
    }
    if (x === "womens") {
        window.open("/web_project/womens_product.php");
    }
    if (x === "kids") {
        window.open("/web_project/kids_product.php");
    }
    else{
        window.open("/web_project/wrong_product.php");
    }
}
    
function buy_now(){
	var a = confirm("Do you want to buy!");
	if (a == true) {
		alert("Thank you for order :)");
		return true;
	}else{
		alert("No order placed..")
		return false;
	}
}
function add_cart(){
	alert("Item added to cart Successfully :)")
}