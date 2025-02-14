<?php

namespace App\Repositories;

class ApostadorBilheteRepository {

    public static function rawInsertApostadorBilhete() {
        return "INSERT INTO 
                    apostador_bilhete (id_apostador,id_sorteio,numeros_escolhidos)
                VALUES 
                    (:id_apostador,:id_sorteio,:numeros_escolhidos);";
    }

    public static function rawSelectSameNumbersToSorteio() {
        return "SELECT 
                    count(*)
                FROM 
                    apostador_bilhete
                WHERE 
                    id_apostador = :id_apostador AND
                    id_sorteio = :id_sorteio AND
                    numeros_escolhidos LIKE :numeros_escolhidos";
    }

    public static function rawSelectQuantTryMaxNumbers() {
        return "SELECT 
                    count(*)
                FROM 
                    apostador_bilhete
                WHERE 
                    id_apostador = :id_apostador AND
                    id_sorteio = :id_sorteio";
    }

    public static function rawSelectApostadoresBilhetesSorteio() {

        return "SELECT t.nome, tb.numeros_escolhidos, 
                    CASE WHEN ((LENGTH(tb.numeros_escolhidos) - LENGTH(REPLACE(tb.numeros_escolhidos, ',', '')) + 1) > 9) THEN
                        CASE WHEN (split_part(s.numeros_sorteados, ',',1) :: INTEGER = split_part(tb.numeros_escolhidos, ',',1) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',1) :: INTEGER = split_part(tb.numeros_escolhidos, ',',2) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',1) :: INTEGER = split_part(tb.numeros_escolhidos, ',',3) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',1) :: INTEGER = split_part(tb.numeros_escolhidos, ',',4) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',1) :: INTEGER = split_part(tb.numeros_escolhidos, ',',5) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',1) :: INTEGER = split_part(tb.numeros_escolhidos, ',',6) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',1) :: INTEGER = split_part(tb.numeros_escolhidos, ',',7) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',1) :: INTEGER = split_part(tb.numeros_escolhidos, ',',8) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',1) :: INTEGER = split_part(tb.numeros_escolhidos, ',',9) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',1) :: INTEGER = split_part(tb.numeros_escolhidos, ',',10) :: INTEGER) THEN 1
                        ELSE 0 END END END END END END END END END END +
                        CASE WHEN (split_part(s.numeros_sorteados, ',',2) :: INTEGER = split_part(tb.numeros_escolhidos, ',',1) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',2) :: INTEGER = split_part(tb.numeros_escolhidos, ',',2) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',2) :: INTEGER = split_part(tb.numeros_escolhidos, ',',3) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',2) :: INTEGER = split_part(tb.numeros_escolhidos, ',',4) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',2) :: INTEGER = split_part(tb.numeros_escolhidos, ',',5) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',2) :: INTEGER = split_part(tb.numeros_escolhidos, ',',6) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',2) :: INTEGER = split_part(tb.numeros_escolhidos, ',',7) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',2) :: INTEGER = split_part(tb.numeros_escolhidos, ',',8) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',2) :: INTEGER = split_part(tb.numeros_escolhidos, ',',9) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',2) :: INTEGER = split_part(tb.numeros_escolhidos, ',',10) :: INTEGER) THEN 1
                        ELSE 0 END END END END END END END END END END +
                        CASE WHEN (split_part(s.numeros_sorteados, ',',3) :: INTEGER = split_part(tb.numeros_escolhidos, ',',1) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',3) :: INTEGER = split_part(tb.numeros_escolhidos, ',',2) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',3) :: INTEGER = split_part(tb.numeros_escolhidos, ',',3) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',3) :: INTEGER = split_part(tb.numeros_escolhidos, ',',4) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',3) :: INTEGER = split_part(tb.numeros_escolhidos, ',',5) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',3) :: INTEGER = split_part(tb.numeros_escolhidos, ',',6) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',3) :: INTEGER = split_part(tb.numeros_escolhidos, ',',7) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',3) :: INTEGER = split_part(tb.numeros_escolhidos, ',',8) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',3) :: INTEGER = split_part(tb.numeros_escolhidos, ',',9) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',3) :: INTEGER = split_part(tb.numeros_escolhidos, ',',10) :: INTEGER) THEN 1
                        ELSE 0 END END END END END END END END END END +
                        CASE WHEN (split_part(s.numeros_sorteados, ',',4) :: INTEGER = split_part(tb.numeros_escolhidos, ',',1) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',4) :: INTEGER = split_part(tb.numeros_escolhidos, ',',2) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',4) :: INTEGER = split_part(tb.numeros_escolhidos, ',',3) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',4) :: INTEGER = split_part(tb.numeros_escolhidos, ',',4) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',4) :: INTEGER = split_part(tb.numeros_escolhidos, ',',5) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',4) :: INTEGER = split_part(tb.numeros_escolhidos, ',',6) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',4) :: INTEGER = split_part(tb.numeros_escolhidos, ',',7) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',4) :: INTEGER = split_part(tb.numeros_escolhidos, ',',8) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',4) :: INTEGER = split_part(tb.numeros_escolhidos, ',',9) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',4) :: INTEGER = split_part(tb.numeros_escolhidos, ',',10) :: INTEGER) THEN 1
                        ELSE 0 END END END END END END END END END END +
                        CASE WHEN (split_part(s.numeros_sorteados, ',',5) :: INTEGER = split_part(tb.numeros_escolhidos, ',',1) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',5) :: INTEGER = split_part(tb.numeros_escolhidos, ',',2) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',5) :: INTEGER = split_part(tb.numeros_escolhidos, ',',3) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',5) :: INTEGER = split_part(tb.numeros_escolhidos, ',',4) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',5) :: INTEGER = split_part(tb.numeros_escolhidos, ',',5) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',5) :: INTEGER = split_part(tb.numeros_escolhidos, ',',6) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',5) :: INTEGER = split_part(tb.numeros_escolhidos, ',',7) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',5) :: INTEGER = split_part(tb.numeros_escolhidos, ',',8) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',5) :: INTEGER = split_part(tb.numeros_escolhidos, ',',9) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',5) :: INTEGER = split_part(tb.numeros_escolhidos, ',',10) :: INTEGER) THEN 1
                        ELSE 0 END END END END END END END END END END +
                        CASE WHEN (split_part(s.numeros_sorteados, ',',6) :: INTEGER = split_part(tb.numeros_escolhidos, ',',1) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',6) :: INTEGER = split_part(tb.numeros_escolhidos, ',',2) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',6) :: INTEGER = split_part(tb.numeros_escolhidos, ',',3) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',6) :: INTEGER = split_part(tb.numeros_escolhidos, ',',4) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',6) :: INTEGER = split_part(tb.numeros_escolhidos, ',',5) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',6) :: INTEGER = split_part(tb.numeros_escolhidos, ',',6) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',6) :: INTEGER = split_part(tb.numeros_escolhidos, ',',7) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',6) :: INTEGER = split_part(tb.numeros_escolhidos, ',',8) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',6) :: INTEGER = split_part(tb.numeros_escolhidos, ',',9) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',6) :: INTEGER = split_part(tb.numeros_escolhidos, ',',10) :: INTEGER) THEN 1
                        ELSE 0 END END END END END END END END END END
                    ELSE CASE WHEN ((LENGTH(tb.numeros_escolhidos) - LENGTH(REPLACE(tb.numeros_escolhidos, ',', '')) + 1) > 8) THEN
                        CASE WHEN (split_part(s.numeros_sorteados, ',',1) :: INTEGER = split_part(tb.numeros_escolhidos, ',',1) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',1) :: INTEGER = split_part(tb.numeros_escolhidos, ',',2) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',1) :: INTEGER = split_part(tb.numeros_escolhidos, ',',3) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',1) :: INTEGER = split_part(tb.numeros_escolhidos, ',',4) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',1) :: INTEGER = split_part(tb.numeros_escolhidos, ',',5) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',1) :: INTEGER = split_part(tb.numeros_escolhidos, ',',6) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',1) :: INTEGER = split_part(tb.numeros_escolhidos, ',',7) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',1) :: INTEGER = split_part(tb.numeros_escolhidos, ',',8) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',1) :: INTEGER = split_part(tb.numeros_escolhidos, ',',9) :: INTEGER) THEN 1
                        ELSE 0 END END END END END END END END END +
                        CASE WHEN (split_part(s.numeros_sorteados, ',',2) :: INTEGER = split_part(tb.numeros_escolhidos, ',',1) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',2) :: INTEGER = split_part(tb.numeros_escolhidos, ',',2) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',2) :: INTEGER = split_part(tb.numeros_escolhidos, ',',3) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',2) :: INTEGER = split_part(tb.numeros_escolhidos, ',',4) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',2) :: INTEGER = split_part(tb.numeros_escolhidos, ',',5) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',2) :: INTEGER = split_part(tb.numeros_escolhidos, ',',6) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',2) :: INTEGER = split_part(tb.numeros_escolhidos, ',',7) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',2) :: INTEGER = split_part(tb.numeros_escolhidos, ',',8) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',2) :: INTEGER = split_part(tb.numeros_escolhidos, ',',9) :: INTEGER) THEN 1
                        ELSE 0 END END END END END END END END END +
                        CASE WHEN (split_part(s.numeros_sorteados, ',',3) :: INTEGER = split_part(tb.numeros_escolhidos, ',',1) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',3) :: INTEGER = split_part(tb.numeros_escolhidos, ',',2) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',3) :: INTEGER = split_part(tb.numeros_escolhidos, ',',3) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',3) :: INTEGER = split_part(tb.numeros_escolhidos, ',',4) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',3) :: INTEGER = split_part(tb.numeros_escolhidos, ',',5) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',3) :: INTEGER = split_part(tb.numeros_escolhidos, ',',6) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',3) :: INTEGER = split_part(tb.numeros_escolhidos, ',',7) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',3) :: INTEGER = split_part(tb.numeros_escolhidos, ',',8) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',3) :: INTEGER = split_part(tb.numeros_escolhidos, ',',9) :: INTEGER) THEN 1
                        ELSE 0 END END END END END END END END END +
                        CASE WHEN (split_part(s.numeros_sorteados, ',',4) :: INTEGER = split_part(tb.numeros_escolhidos, ',',1) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',4) :: INTEGER = split_part(tb.numeros_escolhidos, ',',2) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',4) :: INTEGER = split_part(tb.numeros_escolhidos, ',',3) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',4) :: INTEGER = split_part(tb.numeros_escolhidos, ',',4) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',4) :: INTEGER = split_part(tb.numeros_escolhidos, ',',5) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',4) :: INTEGER = split_part(tb.numeros_escolhidos, ',',6) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',4) :: INTEGER = split_part(tb.numeros_escolhidos, ',',7) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',4) :: INTEGER = split_part(tb.numeros_escolhidos, ',',8) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',4) :: INTEGER = split_part(tb.numeros_escolhidos, ',',9) :: INTEGER) THEN 1
                        ELSE 0 END END END END END END END END END +
                        CASE WHEN (split_part(s.numeros_sorteados, ',',5) :: INTEGER = split_part(tb.numeros_escolhidos, ',',1) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',5) :: INTEGER = split_part(tb.numeros_escolhidos, ',',2) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',5) :: INTEGER = split_part(tb.numeros_escolhidos, ',',3) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',5) :: INTEGER = split_part(tb.numeros_escolhidos, ',',4) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',5) :: INTEGER = split_part(tb.numeros_escolhidos, ',',5) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',5) :: INTEGER = split_part(tb.numeros_escolhidos, ',',6) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',5) :: INTEGER = split_part(tb.numeros_escolhidos, ',',7) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',5) :: INTEGER = split_part(tb.numeros_escolhidos, ',',8) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',5) :: INTEGER = split_part(tb.numeros_escolhidos, ',',9) :: INTEGER) THEN 1
                        ELSE 0 END END END END END END END END END +
                        CASE WHEN (split_part(s.numeros_sorteados, ',',6) :: INTEGER = split_part(tb.numeros_escolhidos, ',',1) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',6) :: INTEGER = split_part(tb.numeros_escolhidos, ',',2) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',6) :: INTEGER = split_part(tb.numeros_escolhidos, ',',3) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',6) :: INTEGER = split_part(tb.numeros_escolhidos, ',',4) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',6) :: INTEGER = split_part(tb.numeros_escolhidos, ',',5) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',6) :: INTEGER = split_part(tb.numeros_escolhidos, ',',6) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',6) :: INTEGER = split_part(tb.numeros_escolhidos, ',',7) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',6) :: INTEGER = split_part(tb.numeros_escolhidos, ',',8) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',6) :: INTEGER = split_part(tb.numeros_escolhidos, ',',9) :: INTEGER) THEN 1
                        ELSE 0 END END END END END END END END END
                    ELSE CASE WHEN ((LENGTH(tb.numeros_escolhidos) - LENGTH(REPLACE(tb.numeros_escolhidos, ',', '')) + 1) > 7) THEN
                        CASE WHEN (split_part(s.numeros_sorteados, ',',1) :: INTEGER = split_part(tb.numeros_escolhidos, ',',1) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',1) :: INTEGER = split_part(tb.numeros_escolhidos, ',',2) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',1) :: INTEGER = split_part(tb.numeros_escolhidos, ',',3) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',1) :: INTEGER = split_part(tb.numeros_escolhidos, ',',4) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',1) :: INTEGER = split_part(tb.numeros_escolhidos, ',',5) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',1) :: INTEGER = split_part(tb.numeros_escolhidos, ',',6) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',1) :: INTEGER = split_part(tb.numeros_escolhidos, ',',7) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',1) :: INTEGER = split_part(tb.numeros_escolhidos, ',',8) :: INTEGER) THEN 1
                        ELSE 0 END END END END END END END END +
                        CASE WHEN (split_part(s.numeros_sorteados, ',',2) :: INTEGER = split_part(tb.numeros_escolhidos, ',',1) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',2) :: INTEGER = split_part(tb.numeros_escolhidos, ',',2) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',2) :: INTEGER = split_part(tb.numeros_escolhidos, ',',3) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',2) :: INTEGER = split_part(tb.numeros_escolhidos, ',',4) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',2) :: INTEGER = split_part(tb.numeros_escolhidos, ',',5) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',2) :: INTEGER = split_part(tb.numeros_escolhidos, ',',6) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',2) :: INTEGER = split_part(tb.numeros_escolhidos, ',',7) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',2) :: INTEGER = split_part(tb.numeros_escolhidos, ',',8) :: INTEGER) THEN 1
                        ELSE 0 END END END END END END END END +
                        CASE WHEN (split_part(s.numeros_sorteados, ',',3) :: INTEGER = split_part(tb.numeros_escolhidos, ',',1) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',3) :: INTEGER = split_part(tb.numeros_escolhidos, ',',2) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',3) :: INTEGER = split_part(tb.numeros_escolhidos, ',',3) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',3) :: INTEGER = split_part(tb.numeros_escolhidos, ',',4) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',3) :: INTEGER = split_part(tb.numeros_escolhidos, ',',5) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',3) :: INTEGER = split_part(tb.numeros_escolhidos, ',',6) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',3) :: INTEGER = split_part(tb.numeros_escolhidos, ',',7) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',3) :: INTEGER = split_part(tb.numeros_escolhidos, ',',8) :: INTEGER) THEN 1
                        ELSE 0 END END END END END END END END +
                        CASE WHEN (split_part(s.numeros_sorteados, ',',4) :: INTEGER = split_part(tb.numeros_escolhidos, ',',1) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',4) :: INTEGER = split_part(tb.numeros_escolhidos, ',',2) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',4) :: INTEGER = split_part(tb.numeros_escolhidos, ',',3) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',4) :: INTEGER = split_part(tb.numeros_escolhidos, ',',4) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',4) :: INTEGER = split_part(tb.numeros_escolhidos, ',',5) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',4) :: INTEGER = split_part(tb.numeros_escolhidos, ',',6) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',4) :: INTEGER = split_part(tb.numeros_escolhidos, ',',7) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',4) :: INTEGER = split_part(tb.numeros_escolhidos, ',',8) :: INTEGER) THEN 1
                        ELSE 0 END END END END END END END END +
                        CASE WHEN (split_part(s.numeros_sorteados, ',',5) :: INTEGER = split_part(tb.numeros_escolhidos, ',',1) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',5) :: INTEGER = split_part(tb.numeros_escolhidos, ',',2) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',5) :: INTEGER = split_part(tb.numeros_escolhidos, ',',3) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',5) :: INTEGER = split_part(tb.numeros_escolhidos, ',',4) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',5) :: INTEGER = split_part(tb.numeros_escolhidos, ',',5) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',5) :: INTEGER = split_part(tb.numeros_escolhidos, ',',6) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',5) :: INTEGER = split_part(tb.numeros_escolhidos, ',',7) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',5) :: INTEGER = split_part(tb.numeros_escolhidos, ',',8) :: INTEGER) THEN 1
                        ELSE 0 END END END END END END END END +
                        CASE WHEN (split_part(s.numeros_sorteados, ',',6) :: INTEGER = split_part(tb.numeros_escolhidos, ',',1) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',6) :: INTEGER = split_part(tb.numeros_escolhidos, ',',2) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',6) :: INTEGER = split_part(tb.numeros_escolhidos, ',',3) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',6) :: INTEGER = split_part(tb.numeros_escolhidos, ',',4) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',6) :: INTEGER = split_part(tb.numeros_escolhidos, ',',5) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',6) :: INTEGER = split_part(tb.numeros_escolhidos, ',',6) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',6) :: INTEGER = split_part(tb.numeros_escolhidos, ',',7) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',6) :: INTEGER = split_part(tb.numeros_escolhidos, ',',8) :: INTEGER) THEN 1
                        ELSE 0 END END END END END END END END
                    ELSE CASE WHEN ((LENGTH(tb.numeros_escolhidos) - LENGTH(REPLACE(tb.numeros_escolhidos, ',', '')) + 1) > 6) THEN
                        CASE WHEN (split_part(s.numeros_sorteados, ',',1) :: INTEGER = split_part(tb.numeros_escolhidos, ',',1) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',1) :: INTEGER = split_part(tb.numeros_escolhidos, ',',2) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',1) :: INTEGER = split_part(tb.numeros_escolhidos, ',',3) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',1) :: INTEGER = split_part(tb.numeros_escolhidos, ',',4) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',1) :: INTEGER = split_part(tb.numeros_escolhidos, ',',5) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',1) :: INTEGER = split_part(tb.numeros_escolhidos, ',',6) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',1) :: INTEGER = split_part(tb.numeros_escolhidos, ',',7) :: INTEGER) THEN 1
                        ELSE 0 END END END END END END END +
                        CASE WHEN (split_part(s.numeros_sorteados, ',',2) :: INTEGER = split_part(tb.numeros_escolhidos, ',',1) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',2) :: INTEGER = split_part(tb.numeros_escolhidos, ',',2) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',2) :: INTEGER = split_part(tb.numeros_escolhidos, ',',3) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',2) :: INTEGER = split_part(tb.numeros_escolhidos, ',',4) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',2) :: INTEGER = split_part(tb.numeros_escolhidos, ',',5) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',2) :: INTEGER = split_part(tb.numeros_escolhidos, ',',6) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',2) :: INTEGER = split_part(tb.numeros_escolhidos, ',',7) :: INTEGER) THEN 1
                        ELSE 0 END END END END END END END +
                        CASE WHEN (split_part(s.numeros_sorteados, ',',3) :: INTEGER = split_part(tb.numeros_escolhidos, ',',1) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',3) :: INTEGER = split_part(tb.numeros_escolhidos, ',',2) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',3) :: INTEGER = split_part(tb.numeros_escolhidos, ',',3) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',3) :: INTEGER = split_part(tb.numeros_escolhidos, ',',4) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',3) :: INTEGER = split_part(tb.numeros_escolhidos, ',',5) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',3) :: INTEGER = split_part(tb.numeros_escolhidos, ',',6) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',3) :: INTEGER = split_part(tb.numeros_escolhidos, ',',7) :: INTEGER) THEN 1
                        ELSE 0 END END END END END END END +
                        CASE WHEN (split_part(s.numeros_sorteados, ',',4) :: INTEGER = split_part(tb.numeros_escolhidos, ',',1) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',4) :: INTEGER = split_part(tb.numeros_escolhidos, ',',2) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',4) :: INTEGER = split_part(tb.numeros_escolhidos, ',',3) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',4) :: INTEGER = split_part(tb.numeros_escolhidos, ',',4) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',4) :: INTEGER = split_part(tb.numeros_escolhidos, ',',5) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',4) :: INTEGER = split_part(tb.numeros_escolhidos, ',',6) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',4) :: INTEGER = split_part(tb.numeros_escolhidos, ',',7) :: INTEGER) THEN 1
                        ELSE 0 END END END END END END END +
                        CASE WHEN (split_part(s.numeros_sorteados, ',',5) :: INTEGER = split_part(tb.numeros_escolhidos, ',',1) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',5) :: INTEGER = split_part(tb.numeros_escolhidos, ',',2) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',5) :: INTEGER = split_part(tb.numeros_escolhidos, ',',3) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',5) :: INTEGER = split_part(tb.numeros_escolhidos, ',',4) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',5) :: INTEGER = split_part(tb.numeros_escolhidos, ',',5) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',5) :: INTEGER = split_part(tb.numeros_escolhidos, ',',6) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',5) :: INTEGER = split_part(tb.numeros_escolhidos, ',',7) :: INTEGER) THEN 1
                        ELSE 0 END END END END END END END +
                        CASE WHEN (split_part(s.numeros_sorteados, ',',6) :: INTEGER = split_part(tb.numeros_escolhidos, ',',1) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',6) :: INTEGER = split_part(tb.numeros_escolhidos, ',',2) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',6) :: INTEGER = split_part(tb.numeros_escolhidos, ',',3) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',6) :: INTEGER = split_part(tb.numeros_escolhidos, ',',4) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',6) :: INTEGER = split_part(tb.numeros_escolhidos, ',',5) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',6) :: INTEGER = split_part(tb.numeros_escolhidos, ',',6) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',6) :: INTEGER = split_part(tb.numeros_escolhidos, ',',7) :: INTEGER) THEN 1
                        ELSE 0 END END END END END END END
                    ELSE CASE WHEN TRUE THEN
                        CASE WHEN (split_part(s.numeros_sorteados, ',',1) :: INTEGER = split_part(tb.numeros_escolhidos, ',',1) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',1) :: INTEGER = split_part(tb.numeros_escolhidos, ',',2) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',1) :: INTEGER = split_part(tb.numeros_escolhidos, ',',3) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',1) :: INTEGER = split_part(tb.numeros_escolhidos, ',',4) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',1) :: INTEGER = split_part(tb.numeros_escolhidos, ',',5) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',1) :: INTEGER = split_part(tb.numeros_escolhidos, ',',6) :: INTEGER) THEN 1
                        ELSE 0 END END END END END END +
                        CASE WHEN (split_part(s.numeros_sorteados, ',',2) :: INTEGER = split_part(tb.numeros_escolhidos, ',',1) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',2) :: INTEGER = split_part(tb.numeros_escolhidos, ',',2) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',2) :: INTEGER = split_part(tb.numeros_escolhidos, ',',3) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',2) :: INTEGER = split_part(tb.numeros_escolhidos, ',',4) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',2) :: INTEGER = split_part(tb.numeros_escolhidos, ',',5) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',2) :: INTEGER = split_part(tb.numeros_escolhidos, ',',6) :: INTEGER) THEN 1
                        ELSE 0 END END END END END END +
                        CASE WHEN (split_part(s.numeros_sorteados, ',',3) :: INTEGER = split_part(tb.numeros_escolhidos, ',',1) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',3) :: INTEGER = split_part(tb.numeros_escolhidos, ',',2) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',3) :: INTEGER = split_part(tb.numeros_escolhidos, ',',3) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',3) :: INTEGER = split_part(tb.numeros_escolhidos, ',',4) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',3) :: INTEGER = split_part(tb.numeros_escolhidos, ',',5) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',3) :: INTEGER = split_part(tb.numeros_escolhidos, ',',6) :: INTEGER) THEN 1
                        ELSE 0 END END END END END END +
                        CASE WHEN (split_part(s.numeros_sorteados, ',',4) :: INTEGER = split_part(tb.numeros_escolhidos, ',',1) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',4) :: INTEGER = split_part(tb.numeros_escolhidos, ',',2) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',4) :: INTEGER = split_part(tb.numeros_escolhidos, ',',3) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',4) :: INTEGER = split_part(tb.numeros_escolhidos, ',',4) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',4) :: INTEGER = split_part(tb.numeros_escolhidos, ',',5) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',4) :: INTEGER = split_part(tb.numeros_escolhidos, ',',6) :: INTEGER) THEN 1
                        ELSE 0 END END END END END END +
                        CASE WHEN (split_part(s.numeros_sorteados, ',',5) :: INTEGER = split_part(tb.numeros_escolhidos, ',',1) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',5) :: INTEGER = split_part(tb.numeros_escolhidos, ',',2) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',5) :: INTEGER = split_part(tb.numeros_escolhidos, ',',3) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',5) :: INTEGER = split_part(tb.numeros_escolhidos, ',',4) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',5) :: INTEGER = split_part(tb.numeros_escolhidos, ',',5) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',5) :: INTEGER = split_part(tb.numeros_escolhidos, ',',6) :: INTEGER) THEN 1
                        ELSE 0 END END END END END END +
                        CASE WHEN (split_part(s.numeros_sorteados, ',',6) :: INTEGER = split_part(tb.numeros_escolhidos, ',',1) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',6) :: INTEGER = split_part(tb.numeros_escolhidos, ',',2) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',6) :: INTEGER = split_part(tb.numeros_escolhidos, ',',3) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',6) :: INTEGER = split_part(tb.numeros_escolhidos, ',',4) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',6) :: INTEGER = split_part(tb.numeros_escolhidos, ',',5) :: INTEGER) THEN 1
                        ELSE CASE WHEN (split_part(s.numeros_sorteados, ',',6) :: INTEGER = split_part(tb.numeros_escolhidos, ',',6) :: INTEGER) THEN 1
                        ELSE 0 END END END END END END
                    ELSE 0 END END END END END AS ACERTOS
                FROM 
                    apostador_bilhete tb
                    INNER JOIN apostador t ON t.id = tb.id_apostador
                    INNER JOIN sorteio s ON s.id = tb.id_sorteio
                WHERE 
                    tb.id_sorteio = :id_sorteio
                ORDER BY ACERTOS DESC";

    }

}
