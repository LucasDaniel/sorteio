<?php

namespace App\Repositories;

class ApostadorRepository {

    public static function rawInsertApostador() {
        return "INSERT INTO 
                    tripulante (nome)
                VALUES 
                    (:nome)";
    }

    public static function rawVerifyIdApostadorExists() {
        return "SELECT 
                    count(*)
                FROM 
                    tripulante
                WHERE 
                    id = :id_tripulante ";
    }

}
