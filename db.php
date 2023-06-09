<?php

session_start();
require ('connect.php');

function tt($value){
    echo '<pre>';
    print_r($value);
    echo '</pre>';
}
//proverka vipalnelni bazza dannix
function dbCheckError($query){

    $errInfo = $query->errorInfo();
    if ($errInfo[0] !== PDO::ERR_NONE) {
        echo $errInfo[2];
        exit();
    }
    return true;
}

// zapros na podklucheniya c jlyjq toblicoi
function selectAll($table, $params = []){
    global $pdo;
    $sql = "SELECT * FROM $table";

    if(!empty($params)){
        $i = 0;
        foreach ($params as $key => $value){
            if(!is_numeric($value)){
                $value = "'".$value."'";
            }
            if ($i === 0){
                $sql =$sql . " WHERE $key=$value";
            }else{
                $sql = $sql . " AND $key=$value";
            }
            $i++;
        }
    }

    $query = $pdo->prepare($sql);
    $query->execute();
    dbCheckError($query);
    return $query->fetchAll();
    }


// zapros na polucheniya odnoy strokoy c bibranoy tablici
function selectOne($table, $params = [])
{
    global $pdo;
    $sql = "SELECT * FROM $table";

    if (!empty($params)) {
        $i = 0;
        foreach ($params as $key => $value) {
            if (!is_numeric($value)) {
                $value = "'" . $value . "'";
            }
            if ($i === 0) {
                $sql = $sql . "WHERE $key=$value";
            } else {
                $sql = $sql . " AND $key=$value";
            }
            $i++;
        }
    }

    $query = $pdo->prepare($sql);
    $query->execute();
    dbCheckError($query);
    return $query->fetch();
}

// zapis v tablicu bazu dannix

/**
 * Does something interesting
 *
 * @param string $table  Where something interesting takes place
 * @param array $params How many times something interesting should happen
 * @return mixed
 */
function insert(string $table, array $params):mixed {
    global $pdo;
    $i = 0;
    $coll = '';
    $mask = '';

    foreach ($params as $key => $value) {
        if ($i === 0) {
            $coll = $coll . "$key";
            $mask = $mask . "'" . "$value" . "'";
        } else {
            $coll = $coll . ", $key";
            $mask = $mask . ", '" . "$value" . "'";
        }
        $i++;
    }
    try {
    $sql = "INSERT INTO $table ($coll) VALUES ($mask)";
    $query = $pdo->prepare($sql);
    $query->execute();
    } catch (PDOException $Exception) {

        print "Error: " . $Exception->getMessage();
    }
    dbCheckError($query);
    return $pdo->lastInsertId();

}
// obnavleniya stroka v tablice
function update($table, $id, $params)
{
    global $pdo;
    $i = 0;
    $str = '';
    foreach ($params as $key => $value) {
        if ($i === 0) {
            $str = $str . $key . " = '" . $value . "'";
        } else {
            $str = $str . ", " . $key . " = '" . $value . "'";
        }
        $i++;
    }
    $sql = "UPDATE $table SET $str WHERE id = $id";
    $query = $pdo->prepare($sql);
    $query->execute();
    dbCheckError($query);

}
// obnavleniya stroki v tanlice
function delete($table, $id){
    global $pdo;
    //delete from `users` WHERE id = 19
    $sql = "DELETE DROM $table WHERE id = $id";
    $query = $pdo->prepare($sql);
    $query->execute();
    dbCheckError($query);

}



