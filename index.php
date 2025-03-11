<?php 
    include "Mahasiswa.php"; 
    $mahasiswa1 = new Mahasiswa(); 
    $mahasiswa2 = new Mahasiswa();
    $mahasiswa1->setData('A11.2023.15423', 'Panji Kusumo', 'Teknik Informatika'); 
    $mahasiswa2->setData('A11.2023.15406', 'Agil Rahman', 'Teknik Informatika');
    echo "Data Mahasiswa : <br>";
    $mahasiswa1->TampilData();
    echo "<br>";
    $mahasiswa2->TampilData();

?>