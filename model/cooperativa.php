<?php

include_once "config_bd.php";

class Cooperativa
{

    // ATRIBUTOS DA CLASSE 

    private $cnpj;
    private $nome;
    private $email;
    private $senha;
    private $telefone;
    private $estado;
    private $municipio;
    private $bairro;
    private $logradouro;

    // MÉTODOS GETS e SETS

    /**
     * Get the value of cnpj
     */
    public function getCnpj()
    {
        return $this->cnpj;
    }

    /**
     * Set the value of cnpj
     *
     * @return  self
     */
    public function setCnpj($cnpj)
    {
        $this->cnpj = $cnpj;

        return $this;
    }

    /**
     * Get the value of nome
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @return  self
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of senha
     */
    public function getSenha()
    {
        return $this->senha;
    }

    /**
     * Set the value of senha
     *
     * @return  self
     */
    public function setSenha($senha)
    {
        $this->senha = $senha;

        return $this;
    }

    /**
     * Get the value of telefone
     */
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * Set the value of telefone
     *
     * @return  self
     */
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;

        return $this;
    }

    /**
     * Get the value of estado
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set the value of estado
     *
     * @return  self
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get the value of municipio
     */
    public function getMunicipio()
    {
        return $this->municipio;
    }

    /**
     * Set the value of municipio
     *
     * @return  self
     */
    public function setMunicipio($municipio)
    {
        $this->municipio = $municipio;

        return $this;
    }

    /**
     * Get the value of bairro
     */
    public function getBairro()
    {
        return $this->bairro;
    }

    /**
     * Set the value of bairro
     *
     * @return  self
     */
    public function setBairro($bairro)
    {
        $this->bairro = $bairro;

        return $this;
    }

    /**
     * Get the value of logradouro
     */
    public function getLogradouro()
    {
        return $this->logradouro;
    }

    /**
     * Set the value of logradouro
     *
     * @return  self
     */
    public function setLogradouro($logradouro)
    {
        $this->logradouro = $logradouro;

        return $this;
    }

    // MÉTODO CONSTRUTOR

    function __construct($cnpj, $nome, $email, $senha, $telefone, $estado, $municipio, $bairro, $logradouro)
    {
        $this->cnpj = $cnpj;
        $this->nome = $nome;
        $this->email = ltrim($email);
        $this->senha = $senha;
        $this->telefone = $telefone;
        $this->estado = $estado;
        $this->municipio = $municipio;
        $this->bairro = $bairro;
        $this->logradouro = $logradouro;
    }

    // MÉTODOS DA CLASSE
    public function criarCooperativa(){
        $sql = "INSERT INTO cooperativa(cnpj,nome,email,senha,telefone,estado,municipio,bairro,logradouro) VALUES ('$this->cnpj','$this->nome','$this->email','$this->senha','$this->telefone','$this->estado','$this->municipio','$this->bairro','$this->logradouro')";

       
        if (executarComando($sql)) {
            return true;
        } else {
            return false;
        }
    }

    public function atualizarCooperativa()
    {
        $sql = "UPDATE cooperativa SET nome = '$this->nome', email = '$this->email', senha = '$this->senha', telefone = '$this->telefone', estado = '$this->estado', municipio = '$this->municipio', bairro = '$this->bairro', logradouro = '$this->logradouro'";
        $sql .= " WHERE id = '$this->cnpj'";

        if (executarComando($sql)) {
            return true;
        } else {
            return false;
        }
    }

    public function removerCooperativa()
    {
        $sql = "DELETE FROM cooperativa";
        $sql .= " WHERE id = '$this->cnpj'";

        if (executarComando($sql)) {
            return true;
        } else {
            return false;
        }
    }


    public function exibirCooperativa()
    {
        $sql = "SELECT * FROM cooperativa ORDER BY nome";
        $tabela = retornarDados($sql);

        return $tabela;
    }


    public function buscarCooperativaPorEmail() {
        $sql = "SELECT * FROM cooperativa WHERE email = '$this->email'";

        echo $sql;
        $tabela = retornarDados($sql);
    
        return $tabela;
        
      

    }
}