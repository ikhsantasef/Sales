<?php
include "config.php";

    $pembelian = "SELECT * FROM orders";
    $query = mysqli_query($koneksi, $pembelian);
    while($data = mysqli_fetch_array($query)){
        // echo $data["id_pembelian_produk"]." ";
        $item[] =array(
            'idPembelian'=>$data["id_orders"],
            'harga'=>$data["total_orders"],
            'tanggal'=>$data["created_at"]
        );
    }
    
    $response = array(
        'status'=>'OK',
        'data'=>$item
    );
    echo json_encode($response);
?>

