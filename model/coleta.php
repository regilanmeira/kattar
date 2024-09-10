<?php

include "conexao_bd.php";

class Coleta
{

    // ATRIBUTOS DA CLASSE

    private $id;
    private $data_coleta;
    private $turno_coleta;
    private $estado;
    private $municipio;
    private $bairro;
    private $logradouro;
    private $descricao;
    private $foto_residuo;
    private $id_tipo_material;
    private $email_usuario;
    private $id_status;

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
     * Get the value of data_coleta
     */
    public function getData_coleta()
    {
        return $this->data_coleta;
    }

    /**
     * Set the value of data_coleta
     *
     * @return  self
     */
    public function setData_coleta($data_coleta)
    {
        $this->data_coleta = $data_coleta;

        return $this;
    }

    /**
     * Get the value of turno_coleta
     */
    public function getTurno_coleta()
    {
        return $this->turno_coleta;
    }

    /**
     * Set the value of turno_coleta
     *
     * @return  self
     */
    public function setTurno_coleta($turno_coleta)
    {
        $this->turno_coleta = $turno_coleta;

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
     * Get the value of foto_residuo
     */
    public function getFoto_residuo()
    {
        return $this->foto_residuo;
    }

    /**
     * Set the value of foto_residuo
     *
     * @return  self
     */
    public function setFoto_residuo($foto_residuo)
    {
        $this->foto_residuo = $foto_residuo;

        return $this;
    }

    /**
     * Get the value of id_tipo_material
     */
    public function getId_tipo_material()
    {
        return $this->id_tipo_material;
    }

    /**
     * Set the value of id_tipo_material
     *
     * @return  self
     */
    public function setId_tipo_material($id_tipo_material)
    {
        $this->id_tipo_material = $id_tipo_material;

        return $this;
    }

    /**
     * Get the value of email_usuario
     */
    public function getEmail_usuario()
    {
        return $this->email_usuario;
    }

    /**
     * Set the value of email_usuario
     *
     * @return  self
     */
    public function setEmail_usuario($email_usuario)
    {
        $this->email_usuario = $email_usuario;

        return $this;
    }

    /**
     * Get the value of id_status
     */
    public function getId_status()
    {
        return $this->id_status;
    }

    /**
     * Set the value of id_status
     *
     * @return  self
     */
    public function setId_status($id_status)
    {
        $this->id_status = $id_status;

        return $this;
    }

    // MÉTODO CONSTRUTOR

    public function __construct($id,  $data_coleta,  $turno_coleta,  $estado,  $municipio,  $bairro,  $logradouro,  $descricao,  $foto_residuo,  $id_tipo_material,  $email_usuario,  $id_status)
    {
        $this->id = $id;
        $this->data_coleta = $data_coleta;
        $this->turno_coleta = $turno_coleta;
        $this->estado = $estado;
        $this->municipio = $municipio;
        $this->bairro = $bairro;
        $this->logradouro = $logradouro;
        $this->descricao = $descricao;
        $this->foto_residuo = $foto_residuo;
        $this->id_tipo_material = $id_tipo_material;
        $this->email_usuario = $email_usuario;
        $this->id_status = $id_status;
    }

    // MÉTODOS DA CLASSE

}