<?php

include "conn.php";

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $qu = "select * from mahasiswa";
    $ko = mysqli_query($conn, $qu);
    while ($data = mysqli_fetch_array($ko)) {
        // var_dump($data);
        $datanya[] = array(
            'npm' => $data['npm'],
            'nama' => $data['nama'],
            'jurusan' => $data['jurusan'],
        );
    }

    $respon[] = array(
        'status' => 'Ok',
        'kode' => '999',
        'data' => $datanya
    );
    header("Content-type: application/json");
    echo json_encode($respon);
} elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    echo $nama;
}
