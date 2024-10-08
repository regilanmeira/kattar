<?php

include "config_bd.php";

class Associado
{
    
    // ATRIBUTOS DA CLASSE

    private $id;
    private $nome;
    private $cnpj_cooperativa;

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
     * Get the value of cnpj_cooperativa
     */
    public function getCnpj_cooperativa()
    {
        return $this->cnpj_cooperativa;
    }

    /**
     * Set the value of cnpj_cooperativa
     *
     * @return  self
     */
    public function setCnpj_cooperativa($cnpj_cooperativa)
    {
        $this->cnpj_cooperativa = $cnpj_cooperativa;

        return $this;
    }

    // MÉTODO CONSTRUTOR

    public function __construct($nome, $cnpj_cooperativa)
    {
        $this->nome = $nome;
        $this->cnpj_cooperativa = $cnpj_cooperativa;
    }

    // MÉTODOS DA CLASSE

public function criarAssociado(){
    $sql = "INSERT INTO associado(nome, cnpj_cooperativa) VALUES ('$this->nome', '$this->cnpj_cooperativa')";

    if (executarComando($sql)) {
        return true;
    } else {
        return false;
    }
}

public function atualizarAssociado()
{
    $sql = "UPDATE associado SET nome = '$this->nome', cnpj_cooperativa = '$this->cnpj_cooperativa'";
    $sql .= " WHERE id = '$this->id'";

    if (executarComando($sql)) {
        return true;
    } else {
        return false;
    }
}

public function removerAssociado()
{
    $sql = "DELETE FROM associado";
    $sql .= " WHERE id = '$this->id'";

    if (executarComando($sql)) {
        return true;
    } else {
        return false;
    }
}


public function exibirAssociado()
{
    $sql = "SELECT * FROM associado ORDER BY nome";
    $tabela = retornarDados($sql);

    return $tabela;
}

}
