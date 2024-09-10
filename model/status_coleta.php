<?php

include "conexao_bd.php";

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

    public function __construct($id,  $descricao)
    {
        $this->id = $id;
        $this->descricao = $descricao;
    }

    // MÉTODOS DA CLASSE

}