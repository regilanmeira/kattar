<?php

include_once "config_bd.php";

class HistoricoColeta
{

    // ATRIBUTOS DA CLASSE

    private $id;
    private $data_historico;
    private $id_associado;
    private $id_coleta;
    private $id_status;
    private $observacao;

    // MÉTODOS GETS E SETS


    // MÉTODO CONSTRUTOR

    public function __construct($id,  $data_historico,  $id_associado, $id_coleta, $id_status, $observacao)
    {
        $this->id = $id;
        $this->data_historico = $data_historico;
        $this->id_associado = $id_associado;
        $this->id_coleta = $id_coleta;
        $this->id_status = $id_status;
        $this->observacao = $observacao;
    }

    // MÉTODOS DA CLASSE
    public function analisarColeta()
    {
        $sql = "INSERT INTO historico_coleta(data_historico,id_associado,id_coleta,id_status,observacao) VALUES ('$this->data_historico','$this->id_associado','$this->id_coleta','$this->id_status','$this->observacao')";

        if (executarComando($sql)) {
            //Quando uma coleta for analisada deve ser alterado o seu id_status com o novo status
            $sql = "UPDATE coleta SET id_status = '$this->id_status' WHERE id = '$this->id_coleta'";
            executarComando(($sql));
            return true;
        } else {
            return false;
        }
    }

    public function exibirHistoricoColeta($id_coleta)
    {
        $sql = " SELECT historico_coleta.data_historico,historico_coleta.observacao,";
        $sql .= " status_coleta.descricao,associado.nome FROM historico_coleta INNER JOIN status_coleta ON";
        $sql .= " historico_coleta.id_status = status_coleta.id INNER JOIN associado ON";
        $sql .= " historico_coleta.id_associado = associado.id WHERE id_coleta = '$id_coleta' ORDER BY historico_coleta.data_historico DESC";
        
        $tabela = retornarDados($sql);

    
        return $tabela;
    }
}
