<?php

if(isset($_POST["submit"])){

    if(isset($_FILES["file"])){

        if($_FILES["file"]["error"] > 0){
            echo "Return Code: " . $_FILES["file"]["error"] . "</br>";
        }else{
            $fh = fopen($_FILES['file']['tmp_name'], 'r+');
            $lines = array();
            while( ($row = fgetcsv($fh, 8192)) !== FALSE ) {
                $lines[] = $row;
            }

            $genders = array();
            foreach($lines as $name){
                $genders[] = getGender($name[0]);
            }

            header('Content-type: text/csv');
            header('Content-Disposition: attachment; filename="demo.csv"');
            //
            header('Pragma: no-cache');
            header('Expires: 0');

            $file = fopen('php://output', 'w');
            foreach($genders as $element){
                fputcsv($file, [$element]);
            }
            fclose($file);



        }
    }
}

function getGender($firstname) {

    $myKey = 'UwKSSyfBsyybvjXcMQ';

    $data = json_decode(file_get_contents('https://gender-api.com/get?key=' . $myKey . '&name=' . urlencode($firstname)));
    return $data->gender;
    echo $data->gender;

}


?>