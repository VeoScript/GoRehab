<?php
    //For PDO 
    
    class DB{

        private static function connect(){
            $pdo = new PDO('mysql:host=localhost; dbname=gorehab; charset=utf8', 'root', '');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        }

        public static function query($query, $params = array()){
            $statement = self::connect()->prepare($query);
            $statement->execute($params);

            if (explode(' ', $query)[0] == 'SELECT'){

                $data = $statement->fetchAll();
                return $data;

            }
        }

        function upload_file($file)  
        {  
            if(isset($file))  
            {  
                $extension = explode('.', $file["name"]);  
                $new_name = rand() . '.' . $extension[0];  
                $destination = './upload/' . $new_name;  
                move_uploaded_file($file['tmp_name'], $destination);  
                return $new_name;  
            }  
        }  
    }
?>
