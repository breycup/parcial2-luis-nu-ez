<?php

    class usuario {
        private $usuario;
        private $password;
        private $salt;
        private $nombre;

            public function __construct($usuario,$password,$salt,$nombre)
            {
               $this ->usuario = $usuario;
               $this ->password = $password;
               $this ->salt = $salt;
               $this ->nombre = $nombre;

            }

                public function valida_usuario(){
                


                    $tabla[]= ["usuario"=>"luisn","password"=>"7c81c3dcfd8ed861e9ec1520d5bf7d30cea480c3","salt"=>"slidufys83ad","nombre"=>"Luis Nuñez"];
                   

                    foreach ($tabla as $t)
                    {
                        $pass = sha1($this->password.$t["salt"]);
                        if($this->usuario == $t["usuario"]&& $pass == $t["password"])
                        return $t;

                    }
                    return[];
                    echo "Acceso restringido";





                }





    }











?>