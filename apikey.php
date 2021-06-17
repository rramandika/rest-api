<?php

function getKey()
{
    return ["1234", "rahasia", "xyz"];
}

function isValid($input)
{
    $apikey = $input["api_key"];
    if (in_array($apikey, getKey())) {
        return true;
    } else {
        return false;
    }
}

function jsonOut($status, $message, $data)
{
    $respon = ["status" => $status, "message" => $message, "data" => $data];

    header("Content-type: application/json");
    echo json_encode($respon);
}

function getFilm()
{
    $film = [
        ["title" => "FF1", "konten" => "film ini ke-1"],
        ["title" => "FF2", "konten" => "film ini ke-2"],
        ["title" => "FF9", "konten" => "film ini ke-9"]
    ];
    return $film;
}

if (isValid($_GET)) {
    jsonOut("berhasil", "apikey valid", getFilm());
} else {
    jsonOut("gagal", "apikey no valid!!", null);
}
