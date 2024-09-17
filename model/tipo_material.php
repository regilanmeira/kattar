<?php

include "config_bd.php";

class TipoMaterial
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

    public function __construct($descricao = "",  $observacao = "")
    {
       
        $this->descricao = $descricao;
        $this->observacao = $observacao;
    }

    // MÉTODOS DA CLASSE

    public function criarTipoMaterial(){
        $sql = "INSERT INTO tipo_material(descricao,observacao) VALUES ('$this->descricao','$this->observacao')";

        if (executarComando($sql)) {
            return true;
        } else {
            return false;
        }
    }

    public function atualizarTipoMaterial()
    {
        $sql = "UPDATE tipo_material SET descricao = '$this->descricao', observacao = '$this->observacao'";
        $sql .= " WHERE id = '$this->id'";

        if (executarComando($sql)) {
            return true;
        } else {
            return false;
        }
    }

    public function removerTipoMaterial()
    {
        $sql = "DELETE FROM tipo_material";
        $sql .= " WHERE id = '$this->id'";

        if (executarComando($sql)) {
            return true;
        } else {
            return false;
        }
    }


    public function exibirTipoMaterial()
    {
        $sql = "SELECT * FROM tipo_material ORDER BY descricao";
        $tabela = retornarDados($sql);

        return $tabela;
    }
    
}
    
