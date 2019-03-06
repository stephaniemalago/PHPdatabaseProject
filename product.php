<?php
//GROUP MEMBERS: LARISSA DE MELO AND STEPHANIE BRANCO MALAGO
//STUDENT IDS: 300256663 and 300253830
//CSIS 3280 002 WEB BASED SCRIPTING
//SAMUEL OTIM
//NOVEMBER 23, 2018
//DISPLAY FILE IS CALLED HOME.PHP
?>
<!DOCTYPE html>
  <html>
    <head>
         <!-- materialize necesary files -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
          <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <!-- Compiled and minified CSS -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    </head>

    <body>

      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>
        
<?php
require_once "projectdb_connection.php";

//get all products
function get_product(){
    global $dbConn;

    $prod_query = "SELECT product.SKU,product.Name,product.Price,product.Case_size,country.CountryName,agency.AgencyName,groups.GroupName,product.Info 
    FROM product Inner join groups on product.GroupId = groups.GroupId
    inner join country on product.CountryId = country.CountryId
    inner join agency on product.AgencyId = agency.AgencyId
     ORDER BY SKU";

    try{
        $statement = $dbConn->prepare($prod_query);

        $statement->execute();

        $results = $statement->fetchAll(PDO::FETCH_ASSOC);
        
        $statement->closeCursor();

        
        // print "<pre>";
        // print_r($results);
        // print "</pre>";
        return $results;
    }
    catch(PDOException $ex){
        $ex->getMessage();
    }

}

//add product
function add_product($sku, $name, $price, $case_size, $countryID, $agencyID, $groupID, $descript){
    global $dbConn;

    $add_prod = "INSERT INTO product(SKU,Name,Price,Case_size,CountryId,AgencyId,GroupId,Info) 
    VALUES(:sku,:name,:price,:case_size,:countryID,:agencyID,:groupID,:descript)";

    try{
        $statement = $dbConn->prepare($add_prod);

        $statement->bindValue(':sku',$sku);
        $statement->bindValue(':name',$name);
        $statement->bindValue(':price',$price);
        $statement->bindValue(':case_size',$case_size);
        $statement->bindValue(':countryID',$countryID);
        $statement->bindValue(':agencyID',$agencyID);
        $statement->bindValue(':groupID',$groupID);
        $statement->bindValue(':descript',$descript);

        $statement->execute();

        $statement->closeCursor();

        $prod_insert = $dbConn->lastInsertID();

        print "<script>M.toast({html: 'Product ".$name." was inserted sucessfully!', displayLength: 6000, classes:'blue'});</script>";
        //print "<p style='font-size:20px;font-weight: bold;'>Product inserted successfully into the product table</p>";
    } 
    catch(PDOException $ex){
        //get error message
        $ex->getMessage();
        //print toast if product sku already exists
        print "<script>M.toast({html: 'SKU inserted already exists',displayLength: 6000, classes: 'red'});</script>";
    }


}

//find product by name
function find_product_by_name($in){
    global $dbConn;

    $find_query = "SELECT product.SKU,product.Name,product.Price,product.Case_size,country.CountryName,agency.AgencyName,groups.GroupName,product.Info 
    FROM product Inner join groups on product.GroupId = groups.GroupId
    inner join country on product.CountryId = country.CountryId
    inner join agency on product.AgencyId = agency.AgencyId
     WHERE product.Name LIKE '%$in%'";

    try {
        $statement = $dbConn->prepare($find_query);

        $statement->execute();

        $results = $statement->fetchAll(PDO::FETCH_ASSOC);

        $statement->closeCursor();

        // print "<pre>";
        // print_r($results);
        // print "</pre>";
        return $results;
    }
    catch(PDOException $ex){
        //get error message
        $ex->getMessage();
    }

}

//find product by SKU
function find_product_by_sku($in){
    global $dbConn;
    
    $find_query = "SELECT product.SKU,product.Name,product.Price,product.Case_size,country.CountryName,agency.AgencyName,groups.GroupName,product.Info 
    FROM product Inner join groups on product.GroupId = groups.GroupId
    inner join country on product.CountryId = country.CountryId
    inner join agency on product.AgencyId = agency.AgencyId 
    Where product.SKU LIKE '%$in%'";

    try {
        $statement = $dbConn->prepare($find_query);

        $statement->execute();

        $results = $statement->fetchAll(PDO::FETCH_ASSOC);

        $statement->closeCursor();

        // print "<pre>";
        // print_r($results);
        // print "</pre>";
        return $results;
    }
    catch(PDOException $ex){
        //get error message
        $ex->getMessage();
    }

}

//delete product
function delete_product($sku){
    global $dbConn;

    $delete_query = "DELETE FROM product WHERE SKU LIKE '$sku'";

    try{
        $statement = $dbConn->prepare($delete_query);

        $statement->execute();

        $statement->closeCursor();

        print "<script>M.toast({html:'Product with SKU ".$sku." was deleted sucessfully!',displayLength: 6000, classes:'blue'});</script>";

       
    }
    catch(PDOException $ex){
        //get error message
        $ex->getMessage();
        //print "<script>M.toast({html: 'SKU inserted doesn't exists',displayLength: 6000, classes: 'red'});</script>";
    }
}

//filter products by group name
function get_group_name($in){
    global $dbConn;

    $group_query = "SELECT product.SKU,product.Name,product.Price,product.Case_size,country.CountryName,agency.AgencyName,groups.GroupName,product.Info 
    FROM product Inner join groups on product.GroupId = groups.GroupId
    inner join country on product.CountryId = country.CountryId
    inner join agency on product.AgencyId = agency.AgencyId 
    Where product.groupId LIKE '$in'";

    try{
        $statement = $dbConn->prepare($group_query);

        $statement->execute();

        $results = $statement->fetchAll(PDO::FETCH_ASSOC);

        $statement->closeCursor();

        // print "<pre>";
        // print_r($results);
        // print "</pre>";
        return $results;

    }
    catch(PDOException $ex){
        //get error message
        $ex->getMessage();
    }


}





?>