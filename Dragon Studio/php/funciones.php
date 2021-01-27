<?php
    require 'init.php';

    class Funciones{

        
        public function getPublicaciones(){
            global $pdo;
            $query = $pdo->prepare("
                SELECT * FROM blog 
            ");
            $query->execute();
            return $query->fetchAll();

        }

        public function login($user, $pass){
        global $pdo;

        $query = $pdo->prepare("
            SELECT *
            FROM admins
            WHERE usuario = :user AND pass = :pass
            ");
            $query->execute([
                'user' => $user,
                'pass' => $pass
            ]);
            return $query->fetch();
        }
       
        public function subirPublicacion($titulo, 
       $descripcion, $enlace, $archivo){
            global $pdo;

            $query = $pdo->prepare("
            INSERT INTO blog (titulo, descripcion, enlace, archivo)
            VALUES(:titulo, :descripcion, :enlace, :archivo)
            ");
            
            $query->execute([
                'titulo' => $titulo,
                'descripcion' => $descripcion,
                'enlace' => $enlace,
                'archivo' => $archivo
            ]);

            if($query){
                return true;
            }else{
                    return false;
            }
        }
    }
?>