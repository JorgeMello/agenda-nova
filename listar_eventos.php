<?php

include_once 'conexao.php';

$query_eventos = "SELECT * FROM events";
$result_eventos = $conn->prepare($query_eventos);
$result_eventos->execute();
$eventos = [];

while ($row_eventos = $result_eventos->fetch(PDO::FETCH_ASSOC)) {
    //echo $row_eventos['title'] . ' ' . $row_eventos['start'] . ' ' . $row_eventos['end'] . ' ' . $row_eventos['color'] . '<br>';

    $eventos[] = [
        'id' => $row_eventos['id'],
        'title' => $row_eventos['title'],
        'start' => $row_eventos['start'],
        'end' => $row_eventos['end'],
        'color' => $row_eventos['color'],
    ];
}

echo json_encode($eventos);