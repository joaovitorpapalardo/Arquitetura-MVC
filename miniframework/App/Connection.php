<?php 

namespace App;

class Connection {

    public static function getDb() {
        try {

            $conn = new \PDO(
                "mysql:host=localhost;dbname=mvc;charset=utf8",
                "!!!! NOME DO USUARIO !!!! ", // Adicionar nome do usuario do banco de dados
                "!!!! SENHA DO USUARIO !!!!" // Adicionar senha de acesso do banco de dados
            );

            return $conn;

        } catch (\PDOException $e) {
            // Tratar o Erro
        }
    }
}

?>