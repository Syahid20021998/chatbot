<?php
// FUNCTION PRAPROSES
include 'praproses.php';
// konek database
$conn = mysqli_connect("localhost", "root", "", "bot") or die("Database Error");

// mendapatkan pesan dari user
$getMesg = mysqli_real_escape_string($conn, $_POST['text']);
$getMesg = praProses($getMesg);

//memeriksa pertanyaan user apakah sesuai dengan database
$check_data = "SELECT replies FROM chatbot WHERE queries LIKE '%$getMesg%'";
$run_query = mysqli_query($conn, $check_data) or die("Error");

//Rule-Based
// jika pertanyaan user sesuai atau ada di database maka jawaban akan ditampilkan
if(mysqli_num_rows($run_query) > 0){
    //mengambil jawaban dari database sesuai dengan pertanyaan user
    $fetch_data = mysqli_fetch_assoc($run_query);
    //storing replay to a varible which we'll send to ajax
    $replay = $fetch_data['replies'];
    echo $replay;
}else{
    echo "maaf saya tidak mengerti apa yang kamu maksud!, silahkan masukkan pertanyaan lainnya";
}

?>