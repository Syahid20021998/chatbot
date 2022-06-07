<?php
  $KAMUS_NORMALIZE = 'bakutidakbaku.txt';
  
 
  // OPEN FILE
  function getFile($filepath){
    $path = $filepath;
    $data = explode(PHP_EOL, file_get_contents($path));
    return $data;
  }
  // PRAPROSES 1 KALIMAT
  function praProses($data){
    
    $data = caseFolding($data);
    $data = removePunctuation($data);
    $data = normalize($data);
    $data = removeNumber($data);

    return $data;
  }
  function caseFolding($getMesg){
    return strtolower($getMesg);
  }
  function removePunctuation($getMesg){
    return preg_replace("#[[:punct:]]#", "", $getMesg);
  }
  function removeNumber($getMesg){
    return preg_replace('/[0-9]+/', '', $getMesg);
  }
  function normalize($getMesg){
    // INIT KAMUS NORMALIZE
    $kamus     = getFile($GLOBALS['KAMUS_NORMALIZE']);
    $normalize = [];
    $tidakBaku = [];
    $baku      = [];

    for ($i = 0; $i < count($kamus); $i++) {
      $normalize[$i] = explode(" ", $kamus[$i]);
      $tidakBaku[$i] = $normalize[$i][0];
      $baku[$i]      = $normalize[$i][1];
    }
    
    // UBAH KALIMAT JADI ARRAY KATA
    $kata = explode(" ", $getMesg);

    for ($j = 0; $j < count($kata); $j++) {
      // JIKA ADA KATA PADA KAMUS TIDAK BAKU, MAKA UBAH JADI KATA BAKU
      if(in_array($kata[$j], $tidakBaku)){
        $key = array_search($kata[$j], $tidakBaku);
        $kata[$j] = $baku[$key];
      }
    }
    // GABUNGIN JADI STRING KALIMAT LAGI
    $getMesg = implode(" ", $kata);
    
    return $getMesg;
  }

?>