<?php

include "conexao_bd.php";

class tipo_material
{

    // ATRIBUTOS DA CLASSE

    private $id;
    private $descricao;
    private $observacao;

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

    /**
     * Get the value of observacao
     */
    public function getObservacao()
    {
        return $this->observacao;
    }

    /**
     * Set the value of observacao
     *
     * @return  self
     */
    public function setObservacao($observacao)
    {
        $this->observacao = $observacao;

        return $this;
    }

    // MÉTODO CONSTRUTOR

    public function __construct($id,  $descricao,  $observacao)
    {
        $this->id = $id;
        $this->descricao = $descricao;
        $this->observacao = $observacao;
    }

    // MÉTODOS DA CLASSE
    
}
