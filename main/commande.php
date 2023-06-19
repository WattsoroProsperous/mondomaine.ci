<?php

class Commande
{

    public function getCurrentUrl()
    {
       return  $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]/";
        
    }

    public function create()
    {
        // Enregister la ligne pour la première fois

    }

    public function update()
    {
        // Mise à jour d'une ligne spécifique
        
    }

    public function getCommandeByTransId()
    {
        // Recuperation d'une commande par son $_transId
    }

    public function getUserByPayment()
    {
        // Recuperation d'un utilisation par son $_payment_token
    }
    
}