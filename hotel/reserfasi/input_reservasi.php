<?php
session_start();

if (!isset($_SESSION['email'])) {
    header("location: ../admin/login.php");
    exit;
}
header('Content-Type: application/json');
$jsonResponse;
$responseData;



if (isset($_POST['id']) && isset($_POST['orang']) && isset($_POST['ruang']) && isset($_POST['kasur']) && isset($_POST['kamar']) && isset($_POST['lama']) && isset($_POST['tgl'])&& isset($_POST['tanggalFormat'])) {
    $responseData = array(
        "success" => true,
        "message" => "reservation successful"
    );
    include "../koneksi.php";

    $id = $_POST['id'];
    $orang = $_POST['orang'];
    $ruang = $_POST['ruang'];
    $lama = $_POST['lama'];
    $tgl = $_POST['tgl'];
    $id_bed = $_POST['kasur'];
    $kamar = $_POST['kamar'];
    $tglCheckout = $_POST['tanggalFormat'];
    // Fetch the 'harga' value from the 'bed' table
    $query = "SELECT harga FROM bed WHERE id_bed = $id_bed";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        $harga = $row['harga'];
        $hasil_H = $lama * $harga;

        // Use the selected values in an INSERT query
        mysqli_query ($koneksi,"INSERT INTO reserfasi (id_user, j_orang, j_ruang, stay, chek_out, id_bed, harga, roomID, checkin) VALUES ('$id', '$orang', '$ruang', ' $lama', '$tglCheckout', '$id_bed','$hasil_H', '$kamar','$tgl')");
        // echo "INSERT INTO reserfasi (id, inap, checkout, id_bed, hasil_H, id_k,checkin) VALUES ('$id', ' $lama', '$tglCheckout', '$id_bed','$hasil_H', '$kamar','$tgl')";
    }
}
// Get the selected value from the AJAX request
elseif (isset($_POST['kasur']) && isset($_POST['orang']) && isset($_POST['ruang']) && isset($_POST['kamar']) && isset($_POST['lama']) && isset($_POST['tgl'])&& isset($_POST['tanggalFormat'])) {
    // Set the HTTP response status to 200 OK
http_response_code(200);

// Create a response data array
$responseData = array(
    "success" => true,
    "message" => "reservation successful"
);

// Send the JSON response

    include "../koneksi.php";

    $id = $_SESSION['id'];
    $orang = $_POST['orang'];
    $ruang = $_POST['ruang'];
    $lama = $_POST['lama'];
    $tgl = $_POST['tgl'];
    $id_bed = $_POST['kasur'];
    $kamar = $_POST['kamar'];
    $tglCheckout = $_POST['tanggalFormat'];
    // Fetch the 'harga' value from the 'bed' table
    $query = "SELECT harga FROM bed WHERE id_bed = $id_bed";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        $harga = $row['harga'];
        $hasil_H = $lama * $harga;

        // Use the selected values in an INSERT query
        mysqli_query ($koneksi,"INSERT INTO reserfasi (id_user, j_orang, j_ruang, stay, checkout, id_bed, harga, roomID ,checkin) VALUES ('$id', '$orang', '$ruang', ' $lama', '$tglCheckout', '$id_bed','$hasil_H', '$kamar','$tgl')");
        // echo "INSERT INTO reserfasi (id, inap, checkout, id_bed, hasil_H, id_k,checkin) VALUES ('$id', ' $lama', '$tglCheckout', '$id_bed','$hasil_H', '$kamar','$tgl')";
    }
}

else {
    $responseData = array(
        "success" => false,
        "message" => "data failed"
    );
    http_response_code(401);
}
echo $jsonResponse = json_encode($responseData);
?>