<?php

include_once(dirname(_FILE_) . '/../config/db.php'); //co robi dirname

//³aczymy sie z baz danych
$db = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DB, DB_PORT);
if($db->connect_error){
    echo $db->connect_error . ' (' . $db->connect_errno . ')';
    $json = json_encode(['error'=> $error]);
    echo $json;
}else {

//przaetwarzamy odebrane ajaxem dane z formularza:put post delete get
    $method = $_SERVER['REQUEST_METHOD'];
    switch ($method) {
        case 'GET':
            $data - $_GET;
            break;
        case 'POST':
            $data = $_POST;

            //dodajemy do bazy nowa ksiazke i zwracamy info o sukcesie
            $r = $db->query("INSERT INTO books
            SET`autor`='" .$data['bookAuthor'] . "',
            `tytul`='" .$data['bookName'] . "',
            `opis`='" .$data['bookDescription'] . "'
            ");
            $ret['success'] = "Ksia¿ka zostala prawidlowo dodana";
            break;
        case 'PUT':
        case 'DELETE':
            parse_str(file_get_contents('php://input'), $data);
            break;


        //w zmiennej $data mamy dane przeslane przez uzytkownika

//tworzymy obiekt klasy book i wykonujemy odpowiednie operacje
    }

    echo json_encode($data);


}