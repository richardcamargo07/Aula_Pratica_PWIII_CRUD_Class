<?php

class Produto
{

    public function __construct()
    {
        $dns    = "mysql:host=localhost;dbname=produto";
        $dbUser = "root";
        $dbPass = "";

        try {
            $pdo = new PDO($dns, $dbUser, $dbPass);
            return true;
        } catch (\Throwable $th) {
            return false;
        }
    }
}
