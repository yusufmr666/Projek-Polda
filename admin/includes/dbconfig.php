<?php 
    require __DIR__.'/vendor/autoload.php';

    use Kreait\Firebase\Factory;
    use Kreait\Firebase\ServiceAccount;

    $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/projekpolda-firebase-adminsdk-i5x8s-1e089c77ef.json');
    $firebase = (new Factory)
        ->withServiceAccount($serviceAccount)
        ->withDatabaseUri('https://projekpolda.firebaseio.com/')
        ->create();
    
    $database = $firebase->getDatabase();


?>