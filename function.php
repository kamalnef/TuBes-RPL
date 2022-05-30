<?php

    include("config.php");

    class rajaongkir {
        private $key        = 'fa51d84a4854341c613ed603312a2ab5';
        private $city_url   = 'https://api.rajaongkir.com/starter/city';
        private $cost_url   = 'https://api.rajaongkir.com/starter/cost';

        function array_sort_by_column(&$arr, $col, $dir= SORT_ASC){
            $sort_col = [];
            foreach ($arr as $key => $value) {
                $sort_col[$key] = $value[$col];
            }
            
            array_multisort($sort_col, $dir, $arr);
        }

        function get_city(){
            $curl = curl_init();

            curl_setopt_array($curl, array(
              CURLOPT_URL => $this->city_url,
              CURLOPT_RETURNTRANSFER => true,
              CURLOPT_ENCODING => "",
              CURLOPT_MAXREDIRS => 10,
              CURLOPT_TIMEOUT => 30,
              CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
              CURLOPT_CUSTOMREQUEST => "GET",
              CURLOPT_HTTPHEADER => array(
                "key: {$this->key}"
              ),
            ));

            $response = curl_exec($curl);
            $err = curl_error($curl);

            curl_close($curl);

            if ($err) {
              return "cURL Error #:" . $err;
            } else {
              return $response;
            }
        }

        function get_cost($id_kota_asal, $id_kota_tujuan, $berat, $kurir){
            $curl = curl_init();

            curl_setopt_array($curl, array(
              CURLOPT_URL => $this->cost_url,
              CURLOPT_RETURNTRANSFER => true,
              CURLOPT_ENCODING => "",
              CURLOPT_MAXREDIRS => 10,
              CURLOPT_TIMEOUT => 30,
              CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
              CURLOPT_CUSTOMREQUEST => "POST",
              CURLOPT_POSTFIELDS => "origin={$id_kota_asal}&destination={$id_kota_tujuan}&weight={$berat}&courier={$kurir}",
              CURLOPT_HTTPHEADER => array(
                "content-type: application/x-www-form-urlencoded",
                "key: {$this->key}"
              ),
            ));

            $response = curl_exec($curl);
            $err = curl_error($curl);

            curl_close($curl);

            if ($err) {
              return "cURL Error #:" . $err;
            } else {
              return $response;
            }
        }
    }

    function registrasi($data) {
        global $conn;

        $username = strtolower(stripslashes($data["username"]));
        $password = mysqli_real_escape_string($conn, $data["password"]);
        $password = password_hash($password, PASSWORD_DEFAULT);
        $email = $_POST["email"];
        $name = $_POST["name"];
        $telephone = $_POST["telephone"];
        $address = $_POST["address"];
        $kodepos = $_POST["kodepos"];

        $result = mysqli_query($conn, "SELECT username_user FROM user WHERE username_user = '$username'");

        if(mysqli_fetch_assoc($result))
        {
            echo "<script>
                    alert('Username Telah Digunakan!');
                </script>";
            return false;
        }

        mysqli_query($conn, "INSERT INTO user VALUES('', '$email', '$name', '$telephone', '$kodepos', '$address', '$username', '$password')");

        return mysqli_affected_rows($conn);
    }

?>