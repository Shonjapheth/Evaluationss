<?php

try {
    $conn = new PDO(
        "pgsql:host=dpg-d75mltffte5s73e6m2kg-a.oregon-postgres.render.com;port=5432;dbname=evaluation_db_m4cd",
        "evaluation_db_m4cd_user",
        "JNpe5tSt0jcPcCri0IyCnZeOB1CDZDKC"
    );

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}