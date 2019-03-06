<?php
//GROUP MEMBERS: LARISSA DE MELO AND STEPHANIE BRANCO MALAGO
//STUDENT IDS: 300256663 and 300253830
//CSIS 3280 002 WEB BASED SCRIPTING
//SAMUEL OTIM
//NOVEMBER 23, 2018
//DISPLAY FILE IS THE CALLED HOME.PHP

//get countries

function get_country(){
    require "projectdb_connection.php";

    $country_query = "SELECT * FROM country GROUP BY CountryId";

    try{
        $statement = $dbConn->prepare($country_query);

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

get_country();



?>