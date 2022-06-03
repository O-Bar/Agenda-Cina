<?php
class Conexao
{
    function conectar()
    {
        
        try {
            $conn = new PDO( //objeto do tipo PDO
                'mysql:host=localhost;dbname=AgendaCina',
                "root",
                "" 
            );
            $conn->setAttribute( 
                PDO::ATTR_ERRMODE,
                PDO::ERRMODE_EXCEPTION
            );
            echo "Conexão com banco realizada com sucesso!";
        } catch (PDOException $e) {
            echo 'ERROR: ' . $e->getMessage(); 
        }
    }
}