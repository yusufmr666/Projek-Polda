<?php
include('includes/dbconfig.php');

if(isset($_POST['save_push_data']))
{
    $username = $_POST['username'];
    $email = $_POST['Email'];
    $phone = $_POST['password'];

    $data = [
        'username' => $username,
        'Email' => $email,
        'password' => $phone
    ];

    $ref = "contact/";
    $postdata = $database->getReference($ref)->push($data);

    if($postdata){
        $_SESSION['statsu'] = "Data Successfully";
        header("Location: index.php");
    }else{
        $_SESSION['statsu'] = "Data Not Successfully";
        header("Location: index.php"); 
    }
}

    


if(isset($_POST['delete_data']))
{
    $token = $_POST['ref_take_delete'];

    $ref = "Esim/sim1/".$token;
    $deleteData = $database->getReference($ref)->remove();
    if($postdata){
        $_SESSION['statsu'] = "Data Successfully";
        header("Location: esim.php");
    }else{
        $_SESSION['statsu'] = "Data Not Successfully";
        header("Location: esim.php"); 
    }
}

if(isset($_POST['delete_data2']))
{
    $token = $_POST['ref_toke_delete'];

    $ref = "Laporan/lapor/".$token;
    $deleteData = $database->getReference($ref)->remove();
    if($postdata){
        $_SESSION['statsu'] = "Data Successfully";
        header("Location: esim.php");
    }else{
        $_SESSION['statsu'] = "Data Not Successfully";
        header("Location: esim.php"); 
    }
}


if(isset($_POST['update_data']))
{
    $name = $_POST['name'];
    $nik = $_POST['nik'];
    $ttl = $_POST['ttl'];
    $alamat = $_POST['alamat'];
    $token = $_POST['token'];

    $data = [
        'name' => $name,
        'nik' => $nik,
        'tanggal' => $ttl,
        'alamat' => $alamat
    ];

    $ref = "Esim/sim1/".$token;
    $postdata = $database->getReference($ref)->update($data);

    if($postdata){
        $_SESSION['statsu'] = "Data Successfully";
        header("Location: esim.php");
    }else{
        $_SESSION['statsu'] = "Data Not Successfully";
        header("Location: esim.php"); 
    }
}



if(isset($_POST['update_skck']))
{
    $namaskck = $_POST['namask'];
    $ttlskck = $_POST['ttlsk'];
    $agamaskck = $_POST['agamask'];
    $kebangsaanskck = $_POST['kebangsaansk'];
    $klmskck = $_POST['klmsk'];
    $almskck = $_POST['almsk'];
    $nikskck = $_POST['niksk'];
    $nohpskck = $_POST['nohpsk'];
    $tokan = $_POST['tokan'];

    $data = [
        'namaskck' => $namaskck,
        'ttlskck' => $ttlskck,
        'agamaskck' => $agamaskck,
        'kebangsaanskck' => $kebangsaanskck,
        'klmskck' => $klmskck,
        'almskck' => $almskck,
        'nikskck' => $nikskck,
        'nohpskck' => $nohpskck
    ];

    $ref = "Skck/skck/".$tokan;
    $postdata = $database->getReference($ref)->update($data);

    if($postdata){
        $_SESSION['statsu'] = "Data Successfully";
        header("Location: Skck.php");
    }else{
        $_SESSION['statsu'] = "Data Not Successfully";
        header("Location: Skck.php"); 
    }
}


if(isset($_POST['delete_skck']))
{
    $tokan = $_POST['ref_delete_skck'];

    $ref = "Skck/skck/".$tokan;
    $deleteData = $database->getReference($ref)->remove();
    if($postdata){
        $_SESSION['statsu'] = "Data Successfully";
        header("Location: Skck.php");
    }else{
        $_SESSION['statsu'] = "Data Not Successfully";
        header("Location: Skck.php"); 
    }
}




if(isset($_POST['update_lapker']))
{
    $namalapker = $_POST['namalk'];
    $ttllapker = $_POST['ttllk'];
    $pekerlapker = $_POST['pekerlk'];
    $almlapker = $_POST['almlk'];
    $jablapker = $_POST['jablk'];
    $harilapker = $_POST['harilk'];
    $wktlapker = $_POST['wktlk'];
    $tmplapker = $_POST['tmplk'];
    $acrlapker = $_POST['acrlk'];
    $tokan = $_POST['tokin'];

    $data = [
        'namalapker' => $namalapker,
        'ttllapker' => $ttllapker,
        'pekerlapker' => $pekerlapker,
        'almlapker' => $almlapker,
        'jablapker' => $jablapker,
        'harilapker' => $harilapker,
        'wktlapker' => $wktlapker,
        'tmplapker' => $tmplapker,
        'acrlapker' => $acrlapker
    ];

    $ref = "Lapker/lapker/".$tokan;
    $postdata = $database->getReference($ref)->update($data);

    if($postdata){
        $_SESSION['statsu'] = "Data Successfully";
        header("Location: Lapker.php");
    }else{
        $_SESSION['statsu'] = "Data Not Successfully";
        header("Location: Lapket.php"); 
    }
}



if(isset($_POST['delete_lapker']))
{
    $tokan = $_POST['ref_delete_lapker'];

    $ref = "Lapker/lapker/".$tokan;
    $deleteData = $database->getReference($ref)->remove();
    if($postdata){
        $_SESSION['statsu'] = "Data Successfully";
        header("Location: Lapker.php");
    }else{
        $_SESSION['statsu'] = "Data Not Successfully";
        header("Location: Lapker.php"); 
    }
}





if(isset($_POST['signup'])){
    
    $email = $_POST['emailSignup'];
    $password = $_POST['passSignup'];

    $auth = $firebase->getAuth();
    $user = $auth->createUserWithEmailAndPassword($email,$password);
    header("Location:login.php");
}

?>