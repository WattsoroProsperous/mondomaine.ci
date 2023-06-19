<?php
/*Commenter ses deux lines si vous êtes en production
error_reporting(E_ALL);
ini_set('display_errors', 1);*/

// required libs
require_once __DIR__ . '/src/cinetpay.php';
include('marchand.php');
include('commande.php');

// La class gère la table "Commande"( A titre d'exemple)
$commande = new Commande();
try {
    if(isset($_POST['valider']))
    {
        $customer_name = $_POST['customer_name'];
        $customer_surname = $_POST['customer_surname'];
        $description = $_POST['description'];
        $amount = $_POST['amount'];
        $currency = $_POST['currency'];
    }
    else{
        echo "Veuillez passer par le formulaire";
    }
    //transaction id
    $id_transaction = date("YmdHis"); // or $id_transaction = Cinetpay::generateTransId()

    //Veuillez entrer votre apiKey
    $apikey = $marchand["122286883864008b8f909ba6.11618923"];
    //Veuillez entrer votre siteId
    $site_id = $marchand["776123"];

    //notify url
    $notify_url = $commande->getCurrentUrl().'cinetpay-sdk-php/notify/notify.php';
    //return url
    $return_url = $commande->getCurrentUrl().'cinetpay-sdk-php/return/return.php';
    $channels = "ALL";
    
    /*information supplémentaire que vous voulez afficher
     sur la facture de CinetPay(Supporte trois variables 
     que vous nommez à votre convenance)*/
    $invoice_data = array(
        "Data 1" => "",
        "Data 2" => "",
        "Data 3" => ""
    );

    //
    $formData = array(
         "transaction_id"=> $id_transaction,
        "amount"=> $amount,
        "currency"=> $currency,
        "customer_surname"=> $customer_name,
        "customer_name"=> $customer_surname,
        "description"=> $description,
        "notify_url" => $notify_url,
        "return_url" => $return_url,
        "channels" => $channels,
        "invoice_data" => $invoice_data,
        //pour afficher le paiement par carte de credit
        "customer_email" => "watantcha724@gmail.com", //l'email du client
        "customer_phone_number" => "0576089197", //Le numéro de téléphone du client
        "customer_address" => "BP 0024", //l'adresse du client
        "customer_city" => "abidjan", // ville du client
        "customer_country" => "CI",//Le pays du client, la valeur à envoyer est le code ISO du pays (code à deux chiffre) ex : CI, BF, US, CA, FR
        "customer_state" => "CI", //L’état dans de la quel se trouve le client. Cette valeur est obligatoire si le client se trouve au États Unis d’Amérique (US) ou au Canada (CA)
        "customer_zip_code" => "255" //Le code postal du client 
    );
    // enregistrer la transaction dans votre base de donnée
    /*  $commande->create(); */

    $CinetPay = new CinetPay($site_id, $apikey , $VerifySsl=false);//$VerifySsl=true <=> Pour activerr la verification ssl sur curl 
    $result = $CinetPay->generatePaymentLink($formData);

    if ($result["code"] == '201')
    {
        $url = $result["data"]["payment_url"];

        // ajouter le token à la transaction enregistré
        /* $commande->update(); */
        //redirection vers l'url de paiement
        header('Location:'.$url);

    }
} catch (Exception $e) {
    echo $e->getMessage();
}

