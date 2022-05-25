<?php

require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../BusinessLogic/RemoveTodoList.php";

function viewRemoveTodoList()
{
    echo "MENGHAPUS TODO" . PHP_EOL;

    $pilihan = input("Nomor (x untuk batalkan)");



    if($pilihan == "x"){
        echo "Batal Menghapus todo". PHP_EOL; sleep(2.0);
    } else{
        $success = removeTodoList($pilihan);

        if($success){
            echo "Sukses menghapus todo Nomor $pilihan" . PHP_EOL; sleep(2.0);
        } else{
            echo "Tidak ada todo nomor $pilihan". PHP_EOL; sleep(1.5);
            echo "Silahkan Coba lagi" . PHP_EOL; sleep(2.0);
        }
    }
}