<?php
//GROUP MEMBERS: LARISSA DE MELO AND STEPHANIE BRANCO MALAGO
//STUDENT IDS: 300256663 and 300253830
//CSIS 3280 002 WEB BASED SCRIPTING
//SAMUEL OTIM
//NOVEMBER 23, 2018
//THIS IS THE DISPLAY FILE
?>
<!DOCTYPE HTML>
<html>
    <head>    
       <!-- materialize necesary files -->
       
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
		<title></title>
            <meta name="" content="">
            <!-- css styles -->
			<style type="text/css">
				body {
					background-color: lightblue;
				}
                input[type="submit" i] {
                    padding: 5px 13px;
                }
                table,th,tr,td{
                    color: #003366;
                    padding: 5px;
                }
                tr{
                    border-bottom: 1px solid #003366!important;
                }
                select {
                    padding: 3px;
                }
                table.striped>tbody>tr:nth-child(odd) {
                    background-color: rgba(0, 173, 232, 0.2);
                }

                [type="radio"]:checked+span:after, [type="radio"].with-gap:checked+span:before, [type="radio"].with-gap:checked+span:after {
                    border: 2px solid #2196F3!important;
                }

                [type="radio"]:checked+span:after, [type="radio"].with-gap:checked+span:after {
                    background-color: #2196F3!important;
                }
                .input-field>label {
                    color: #003366!important;
                    font-weight: 500;
                }

                input:not([type]), input[type=text]:not(.browser-default), input[type=password]:not(.browser-default), input[type=email]:not(.browser-default), input[type=url]:not(.browser-default), input[type=time]:not(.browser-default), input[type=date]:not(.browser-default), input[type=datetime]:not(.browser-default), input[type=datetime-local]:not(.browser-default), input[type=tel]:not(.browser-default), input[type=number]:not(.browser-default), input[type=search]:not(.browser-default), textarea.materialize-textarea {
                    border-bottom: 2px solid #003366!important;
                    color: #003366!important;
                }
                input:not([type]):focus:not([readonly]), input[type=text]:not(.browser-default):focus:not([readonly]), input[type=password]:not(.browser-default):focus:not([readonly]), input[type=email]:not(.browser-default):focus:not([readonly]), input[type=url]:not(.browser-default):focus:not([readonly]), input[type=time]:not(.browser-default):focus:not([readonly]), input[type=date]:not(.browser-default):focus:not([readonly]), input[type=datetime]:not(.browser-default):focus:not([readonly]), input[type=datetime-local]:not(.browser-default):focus:not([readonly]), input[type=tel]:not(.browser-default):focus:not([readonly]), input[type=number]:not(.browser-default):focus:not([readonly]), input[type=search]:not(.browser-default):focus:not([readonly]), textarea.materialize-textarea:focus:not([readonly]) {
                    border-bottom: 1px solid #2196F3!important;
                    box-shadow: 0 1px 0 0 #2196F3!important;
                }
                label.active {
                    color: #2196F3!important;
                }

                label {
                    color: #003366!important;
                }

                textarea {
                    background-color: #fff!important;
                }

                .page-footer {
                    padding-top: 0px!important;
                }
                
			</style>
            </head>
            <body class="light-blue lighten-5">
    <!-- top nav -->
    <nav>
    <div class="nav-wrapper">
        <div class='container' style="width: 83%;">
      <a href="#" class="brand-logo">Welcome to Our Liquor Database System!</a>
            </div>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
      </ul>
    </div>
  </nav>

<!-- CONTAINER -->
<div class="container" style="width: 83%;">
			 <h1>Liquor in BC</h1>

        <!-- IMAGE SLIDERS  -->
        <div class="slider">
          <ul class="slides">
            <li>
              <img src="https://bottlemart.com.au/sites/default/files/beer-glasses.png" alt="Beer">
              <div class="caption center-align">
                <h3>Beer</h3>
                <h5 class="light grey-text text-lighten-3">Domestic and Import</h5>
              </div>
            </li>
            <li>
              <img src="https://wallpaperstock.net/wine-wallpapers_36688_2560x1600.jpg" alt="wine">
              <div class="caption left-align">
                <h3>Wine</h3>
                <h5 class="light grey-text text-lighten-3">Red, white, rose, sparkling</h5>
              </div>
            </li>
            <li>
              <img src="https://assets-production-webvanta-com.s3-us-west-2.amazonaws.com/000000/47/35/original/images/home-slide.jpg" alt="spirits">
              <div class="caption right-align">
                <h3>Spirits</h3>
                <h5 class="light grey-text text-lighten-3">Whiskey, Vodka, Tequila, Rum</h5>
              </div>
            </li>
          </ul>
        </div>
        
<br />
<!-- CARD FORM WITH RADIO BUTTONS FOR USER TO SELECT ACTION -->
<form >
<div class="row">
    <div class="col s6">
      <div class="card white">
        <div class="card-content">
          <span class="card-title" style='color:#003366;'>What would you like to do?</span>
        <p>
        <label>
		<input class="with-gap" type="radio" name="radioGroup" value="addItem" <?php if (isset($_GET['radioGroup']) && $_GET['radioGroup'] == 'addItem') echo 'checked="checked"'; ?> /><span style='color: #000;'>Add Item</span>
        </label>
        </p>
        <p>
        <label>
		<input class="with-gap" type="radio" name="radioGroup" value="deleteItem" <?php if (isset($_GET['radioGroup']) && $_GET['radioGroup'] == 'deleteItem') echo 'checked="checked"'; ?> /><span style='color: #000;'>Delete Item</span>
        </label>
        </p>
        <p>
        <label>
        <input class="with-gap" type="radio" name="radioGroup" value="searchItem" <?php if (isset($_GET['radioGroup']) && $_GET['radioGroup'] == 'searchItem') echo 'checked="checked"'; ?> /><span style='color: #000;'>Search Item by Name</span>
        </label>
        </p>
        <p>
        <label>
        <input class="with-gap" type="radio" name="radioGroup" value="searchItemSKU" <?php if (isset($_GET['radioGroup']) && $_GET['radioGroup'] == 'searchItemSKU') echo 'checked="checked"'; ?> /><span style='color: #000;'>Search Item by SKU</span>
        </label>
        </p>	
        <p>
        <label>
        <input class="with-gap" type="radio" name="radioGroup" value="searchGroup" <?php if (isset($_GET['radioGroup']) && $_GET['radioGroup'] == 'searchGroup') echo 'checked="checked"'; ?> /><span style='color: #000;'>Filter Item by Group</span>
        </label>
        </p>
        </div>
        
        <!-- SUBMIT AND SHOW-ALL BUTTONS -->
        <div class="card-action">
        <button class="btn waves-effect waves-light blue" type="submit" name="submit">Submit
        </button>
        <button class="btn waves-effect waves-light blue" type="submit" name="all">Show All
        </button>
        </div>
      </div>
    </div>
  </form>

<!-- FLOATING BUTTON FOR PAGE UP AND DOWN -->
<div class="fixed-action-btn">
  <a class="btn-floating btn-large red">
    <i class="large material-icons">swap_vert</i>
  </a>
  <ul>
    <li><a class="btn-floating green" onclick="topFunction()"><i class="material-icons">arrow_upward</i></a></li>
    <li><a class="btn-floating yellow darken-1" onclick='downFunction()'><i class="material-icons">arrow_downward</i></a></li>
  </ul>
</div>

<!-- PLACE HOLDER -->
<div class="row">
    <div class="col s6">
            </div>
            </div>

<!-- ORGANIZE FORMS RIGHT BELLOW CARD -->
<div class="row">
    <div class="col s6">


<?php

//include other pages
include 'product.php';
include 'country.php';
include 'groups.php';
include 'agency.php';

//after the option is selected
if(isset($_GET['submit'])){
    extract($_REQUEST);

    //if no option is selected
     if(!isset($_GET['radioGroup'])){
	 	print "<script>M.toast({html: 'Nothing selected!',displayLength: 6000, classes: 'red'});</script>";
     }
     else{
         //call function to open the correct form according to the user choice (radio button selected)
        toggle1($radioGroup);
    }
}

//button to add product
if(isset($_GET['add'])){
    extract($_REQUEST);
    //call function from  product.php to add product
    add_product($sku, $name, $price, $case_size, $countryID, $agencyID, $groupID, $descript);
}

//delete button
if(isset($_GET['delete'])){
    extract($_REQUEST);
    //call function from product.php to delete product
    delete_product($sku);
}

//search button by name
if(isset($_GET['busca'])){
    extract($_REQUEST);
        //make variable to call the function
        //call function from  product.php to search product by name
        $func = find_product_by_name($name);
        //show table function
        showTable($func);
}

//search button by sku
if(isset($_GET['buscaSKU'])){
    extract($_REQUEST);
        //make variable to call the function
        //call function from  product.php to search product by sku
        $func = find_product_by_sku($sku);
        //show table function
        showTable($func);
    
}

//get all product
if(isset($_GET['all'])){
    extract($_REQUEST);
        //make variable to call the function
        //call function from  product.php to get all products
        $func = get_product();
        //show table function
        showTable($func);
   
}

//search product by group
if(isset($_GET['buscaGroup'])){
    extract($_REQUEST);
        //make variable to call the function
        //call function from  product.php to filter products by group
        $func = get_group_name($groupID);
        //show table function
        showTable($func);
   
}
?>
</div><!-- CLOSE COL -->
</div><!-- CLOSE ROW -->


<?php
//FUNCTION TO SHOW TABLE OF PRODUCTS
function showTable($func){
    //get product information
    $products = array();
    $featProds = array();
    //parameter enters here so we get the information only for the items we want to display
    //e.g. if parameter passed as $func = get_items() all items will display
    $products = $func;
    //get all elements of that array
    $prod_IDs = array_keys($products);

    //push those elements to a new array
    foreach($prod_IDs as $id){
        $product = $products[$id];
        array_push($featProds,$product);
    }

    //print table
    print "<table class='striped'> ";

    //table headers
    print "<thead><tr><th>Product Image</th><th>SKU</th><th>Product Name</th><th>Price</th><th>Case Size</th><th>Country Name</th><th>Agency Contact</th><th>Group Name</th><th style='min-width:300px;'>Description</th></tr></thead><tbody>";

    //read all cells for each row element
    foreach($featProds as $product){
        //get item's information
        $listPrice = $product['Price'];
        $podSKU = $product['SKU'];
        $prodName = $product['Name'];
        $case = $product['Case_size'];
        $country = $product['CountryName'];
        $agency = $product['AgencyName'];
        $group = $product['GroupName'];
        $description = $product['Info'];

    //table cells
    print "<tr>
    
                <td>
                    <img src='images/".$group.".jpg' id='img-home' style='max-width:150px;max-height:100px;' alt='product' />
                </td>
                <td>
                    $podSKU
                </td>
                <td>
                    $prodName
                </td>
                <td>
                    $listPrice
                </td>
                <td>
                    $case
                </td>
                <td>
                    $country
                </td>
                <td>
                    $agency
                </td>
                <td>
                    $group
                </td>
                 <td>
                    $description
                </td>
            </tr>";
    } //end of loop
print"<tbody></table>";//end table
}//end of table function

//FUNCTION TO DISPLAY THE CORRECT FORMS ACCORDING TO USER RADIO BUTTON INPUT
function toggle1($radioGroup){
    //get country function
    $countriesarr = get_country();
    //get groups function
    $grouparr = get_groups();
    //get agency function
    $agentarr = get_agency();
   

    //switch radio buttons to display the correct form
    switch($radioGroup){
    
        //add product forms
        case 'addItem':

            print
            "<form>            
                <div class='input-field'>
                <input id='sku' type='number' name='sku' required>
                <label for='sku'>SKU</label>
                </div>
                <div class='input-field'>
                <input type='text' name='name' value='' required/><br />
                <label for='name'>Name</label>
                </div>
                <div class='input-field'>
                <input type='number' name='price' value='' required/><br />
                <label for='price'>Price</label>
                </div>
                <div class='input-field'>
                <input type='text' name='case_size' value='' required/>
                <label for='case_size'>Case Size</label>
                </div>
            <label>Country</label>
            <select name='countryID' class='browser-default'>";
            //read cells to display the correct elements in a dropdown button to avoid users wrong input
                foreach($countriesarr as $count){
                    $countId = $count['CountryId'];
                    $countName = $count['CountryName'];
                    print "<option value='$countId'>$countName</option>";
                }
            print "</select><br />
            
            <label>Agency</label>
            <select name='agencyID' class='browser-default'>";
            //read cells to display the correct elements in a dropdown button to avoid users wrong input
                foreach($agentarr as $agent){
                    $agentId = $agent['AgencyId'];
                    $agentName = $agent['AgencyName'];
                    print "
                    <option value='$agentId'>$agentName</option>";
                }
            print "</select><br />

            <label>Group:</label>
            <select name='groupID' class='browser-default'>";
            //read cells to display the correct elements in a dropdown button to avoid users wrong input
                foreach($grouparr as $grp){
                    $grpId = $grp['GroupId'];
                    $grpName = $grp['GroupName'];
                    print "
                    <option value='$grpId'>$grpName</option>";
                }
           print "</select><br />

            <legend id='desc'>Description:</legend>
            <textarea name='descript' cols='40' rows='5' required></textarea><br /><br />
            <button class='btn waves-effect waves-light blue' type='submit' name='add'>Add Product to Database<br /><br /></form>";break;
    
            //delete product form
        case 'deleteItem':
            print
            "<form> <div class='input-field'>
            <input id='sku' type='text' name='sku' class='validate' required>
            <label for='sku'>SKU</label>
            </div><br /><br />
            <button class='btn waves-effect waves-light blue' type='submit' name='delete'>Delete Item From Database</button> <br /><br /></form>";break;

            //search item by name form
        case 'searchItem':
            print 
            "<form><div class='input-field'>
            <input type='text' name='name' value='' required/><br />
            <label for='name'>Name</label>
            </div><br /><br />
            <button class='btn waves-effect waves-light blue' type='submit' name='busca'>Search Item</button><br /><br /></form>";break;
        
            //search item by sku form
        case 'searchItemSKU':
            print 
            "<form><div class='input-field'>
            <input id='sku' type='number' name='sku' required>
            <label for='sku'>SKU</label>
            </div><br /><br />
            <button class='btn waves-effect waves-light blue' type='submit' name='buscaSKU'>Search Item</button><br /><br /></form>";break;
        
            //search items by group
        case 'searchGroup':
            print 
            "<form><label id='group'>Group:</label>
            <select name='groupID' class='browser-default'>";
            //read cells to display the correct elements in a dropdown button to avoid users wrong input
                foreach($grouparr as $grp){
                    $grpId = $grp['GroupId'];
                    $grpName = $grp['GroupName'];
                    print "
                    <option value='$grpId'>$grpName</option>";
                }
            print "</select><br /><br />
                <button class='btn waves-effect waves-light blue' type='submit' name='buscaGroup'>Search Items</button><br /><br /></form>";break;
    }//end loop
}//end function



?>

</div>
</div>

  <!--materialize necessary scripts-->

      <script>
  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.fixed-action-btn');
    var instances = M.FloatingActionButton.init(elems, options);
  });

  $(document).ready(function(){
    $('.fixed-action-btn').floatingActionButton();
  });

  function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
  function downFunction() {
    document.body.scrollTop = 1000000000;
    document.documentElement.scrollTop = 1000000000;
}

        $(document).ready(function(){

          // Init Slider
          $('.slider').slider();


        //   Init Sidenav
        //   $('.button-collapse').sideNav();
        });

        document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems, options);
  });

  $(document).ready(function(){
    $('select').formSelect();
  });

  
      </script>
</div> <!-- end container -->
<footer class="page-footer">
          <div class="footer-copyright">
            <div class="container">
            © 2018 Larissa and Stephanie for Web Based Scripting
            <a class="grey-text text-lighten-4 right" href="https://www.douglascollege.ca/">Douglas College</a>
            </div>
          </div>
        </footer>
        <script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>