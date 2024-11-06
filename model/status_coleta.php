<?php

include_once "config_bd.php";

class Status
{

    // ATRIBUTOS DA CLASSE

    private $id;
    private $descricao;

    // MÉTODOS GETS E SETS

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of descricao
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Set the value of descricao
     *
     * @return  self
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;

        return $this;
    }

    // MÉTODO CONSTRUTOR

    public function __construct($descricao)
    {
        
        $this->descricao = $descricao;
    }

    // MÉTODOS DA CLASSE
    public function criarStatus(){
        $sql = "INSERT INTO status_coleta(descricao) VALUES ('$this->descricao')";

        if (executarComando($sql)) {
            return true;
        } else {
            return false;
        }
    }

    public function atualizarStatus()
    {
        $sql = "UPDATE status_coleta SET descricao = '$this->descricao'";
        $sql .= " WHERE id = '$this->id'";

        if (executarComando($sql)) {
            return true;
        } else {
            return false;
        }
    }

    public function removerStatus()
    {
        $sql = "DELETE FROM status_coleta";
        $sql .= " WHERE id = '$this->id'";

        if (executarComando($sql)) {
            return true;
        } else {
            return false;
        }
    }


    public function exibirStatus()
    {
        $sql = "SELECT * FROM status_coleta ORDER BY descricao";
        $tabela = retornarDados($sql);

        return $tabela;
    }
}