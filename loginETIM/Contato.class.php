<?php

/**
 * @author Fabio Claret
 * data agosto/2024
 * Classe com conexao a banco de dados
 * @return boolean 
 */

class Contato{
    private $id;
    private $nome;
    private $email;
    private $senha;
    private $pdo;

    /**
     * @author Fabio Claret
     * data agosto/2024
     * Metodo de conexao ao banco de dados
     * @return boolean 
     */
    public function getId(){
        return $this->id;
    }
    public function getNome(){
        return $this->nome;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getSenha(){
        return $this->senha;
    }
       
    public function setNome($nome){
        $this->nome = $nome;
    }
    public function setSenha($senha){
        $this->senha = $senha;
    }
    public function setEmail($mail){
        $this->email = $email;
    }

    function __construct(){
        #o PDO precisa de 3 parametros 
        $dsn    = "mysql:dbname=etimcontato;host=localhost";
        $dbUser = "root";
        $dbPass = "";

        try {
            $this->pdo = new PDO($dsn, $dbUser, $dbPass);

            echo "<script>
                    alert('Conectado ao banco')
                 </script>";

        } catch (\Throwable $th) {
            echo "<script>
                    alert('Banco indisponivel, tente mais tarde!')
                 </script>";
        }
    }
       

}