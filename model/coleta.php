<?php

include_once "config_bd.php";

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
    private $latitude;
    private $longitude;

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

    /**
     * Get the value of longitude
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set the value of longitude
     *
     * @return  self
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Get the value of latitude
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set the value of latitude
     *
     * @return  self
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    // MÉTODO CONSTRUTOR

    public function __construct($data_coleta,  $estado,  $municipio,  $bairro,  $logradouro,  $descricao,  $id_tipo_material,  $email_usuario, $latitude, $longitude, $foto_residuo, $turno_coleta)
    {
        //$this->id = $id;
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
        $this->id_status = 1;
        $this->latitude = $latitude;
        $this->longitude = $longitude;
    }

    // MÉTODOS DA CLASSE
    public function criarColeta()
    {
        $sql = "INSERT INTO coleta(data_coleta,turno_coleta,estado,municipio,bairro,logradouro,descricao,foto_residuo,id_tipo_material,email_usuario,id_status,latitude,longitude) VALUES ('$this->data_coleta','$this->turno_coleta','$this->estado','$this->municipio','$this->bairro','$this->logradouro','$this->descricao','$this->foto_residuo','$this->id_tipo_material','$this->email_usuario','$this->id_status','$this->latitude','$this->longitude')";

      

        if (executarComando($sql)) {
            
            return true;
        } else {
            return false;
        }
    }

    public function atualizarColeta()
    {
        $sql = "UPDATE coleta SET data_coleta = '$this->data_coleta', turno_coleta = '$this->turno_coleta', estado = '$this->estado', municipio = '$this->municipio', bairro = '$this->bairro', logradouro = '$this->logradouro', descricao = '$this->descricao', foto_residuo = '$this->foto_residuo', id_tipo_material = '$this->id_tipo_material', email_usuario = '$this->email_usuario', id_status ='$this->id_status'";
        $sql .= " WHERE id = '$this->id'";

        if (executarComando($sql)) {
            return true;
        } else {
            return false;
        }
    }

    public function removerColeta()
    {
        $sql = "DELETE FROM coleta";
        $sql .= " WHERE id = '$this->id'";

        if (executarComando($sql)) {
            return true;
        } else {
            return false;
        }
    }

    public function exibirColeta()
    {
        $sql = "SELECT coleta.id,coleta.bairro,coleta.logradouro,coleta.data_coleta,coleta.descricao,coleta.email_usuario,coleta.estado,";
        $sql.= " coleta.foto_residuo,tipo_material.descricao as tipo_material_descricao,coleta.municipio,coleta.turno_coleta,status_coleta.descricao as status_coleta";
        $sql .= " FROM coleta INNER JOIN tipo_material ON coleta.id_tipo_material = tipo_material.id INNER JOIN status_coleta ON ";
        $sql .= " coleta.id_status = status_coleta.id  ORDER BY data_coleta DESC";
        $tabela = retornarDados($sql);

        return $tabela;
    }

    public function exibirColetaPorUsuarioStatus($email,$id_status)
    {
        $sql = "SELECT coleta.id,coleta.bairro,coleta.logradouro,coleta.data_coleta,coleta.descricao,coleta.email_usuario,coleta.estado,";
        $sql.= " coleta.foto_residuo,tipo_material.descricao as tipo_material_descricao,coleta.municipio,coleta.turno_coleta,status_coleta.descricao as status_coleta";
        $sql .= " FROM coleta INNER JOIN tipo_material ON coleta.id_tipo_material = tipo_material.id INNER JOIN status_coleta ON ";
        $sql .= " coleta.id_status = status_coleta.id  WHERE email_usuario = '$email' AND id_status = '$id_status' ORDER BY data_coleta DESC";
     
        $tabela = retornarDados($sql);

        return $tabela;
    }

    public function exibirColetaPorUsuario($email)
    {
        $sql = "SELECT coleta.id,coleta.bairro,coleta.logradouro,coleta.data_coleta,coleta.descricao,coleta.email_usuario,coleta.estado,";
        $sql.= " coleta.foto_residuo,tipo_material.descricao as tipo_material_descricao,coleta.municipio,coleta.turno_coleta,status_coleta.descricao as status_coleta";
        $sql .= " FROM coleta INNER JOIN tipo_material ON coleta.id_tipo_material = tipo_material.id INNER JOIN status_coleta ON ";
        $sql .= " coleta.id_status = status_coleta.id  WHERE email_usuario = '$email' ORDER BY data_coleta DESC ";
     
        $tabela = retornarDados($sql);

        return $tabela;
    }

    public function exibirColetaPorID($id_coleta)
    {
        $sql = "SELECT coleta.id,coleta.logradouro,coleta.bairro,coleta.data_coleta,coleta.descricao,coleta.email_usuario,coleta.estado,";
        $sql.= " coleta.foto_residuo,tipo_material.descricao as tipo_material_descricao,coleta.municipio,coleta.turno_coleta,status_coleta.descricao as status_coleta";
        $sql .= " FROM coleta INNER JOIN tipo_material ON coleta.id_tipo_material = tipo_material.id INNER JOIN status_coleta ON ";
        $sql .= " coleta.id_status = status_coleta.id WHERE coleta.id = '$id_coleta'";

     

        $tabela = retornarDados($sql);

        return $tabela;
    }



    public function exibirColetaPorMaterial($id_tipo_material)
    {
        $sql = "SELECT coleta.id,coleta.bairro,coleta.logradouro,coleta.data_coleta,coleta.descricao,coleta.email_usuario,coleta.estado,";
        $sql.= " coleta.foto_residuo,tipo_material.descricao as tipo_material_descricao,coleta.municipio,coleta.turno_coleta,status_coleta.descricao as status_coleta";
        $sql .= " FROM coleta INNER JOIN tipo_material ON coleta.id_tipo_material = tipo_material.id INNER JOIN status_coleta ON ";
        $sql .= " coleta.id_status = status_coleta.id  WHERE id_tipo_material = '$id_tipo_material' ORDER BY data_coleta DESC ";
        $tabela = retornarDados($sql);

        return $tabela;
    }

    public function exibirColetaPorStatus($id_status)
    {
        $sql = "SELECT coleta.id,coleta.bairro,coleta.logradouro,coleta.data_coleta,coleta.descricao,coleta.email_usuario,coleta.estado,";
        $sql.= " coleta.foto_residuo,tipo_material.descricao as tipo_material_descricao,coleta.municipio,coleta.turno_coleta,status_coleta.descricao as status_coleta";
        $sql .= " FROM coleta INNER JOIN tipo_material ON coleta.id_tipo_material = tipo_material.id INNER JOIN status_coleta ON ";
        $sql .= " coleta.id_status = status_coleta.id  WHERE id_status = '$id_status' ORDER BY data_coleta DESC ";
        $tabela = retornarDados($sql);

        return $tabela;
    }
}

