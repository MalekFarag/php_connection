<?php
//required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: Application/json, charset=UTF-8");

//include db and object files
include_once '../config/database.php';
include_once '../objects/movie.php';

// instanciate db and movie object
$database = new Database();
$db = $database->getConnection();
$movie = new Movie($db);

$stmt = $movie->getMovies();

$num = $stmt->rowCount();

if($num > 0){

    $results = array();
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        $single_movie = $row;
        $results[] = $single_movie;
    }
    echo json_encode($results, JSON_PRETTY_PRINT); // turn off pretty to save data
}else{
    echo json_encode(
        array(
            'message'=>'No movies found'
        )
    );
}