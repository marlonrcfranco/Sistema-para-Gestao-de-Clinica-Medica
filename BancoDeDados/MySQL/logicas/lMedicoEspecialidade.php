<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
date_default_timezone_set('America/Sao_Paulo');
include_once "Persistencia.php";
include_once "Filtro.php";

class lMedicoEspecialidade extends Persistencia
{
    public function __construct()
    {
        parent::__construct();
        $this->setModel("tMedicoEspecialidade");
    }

    public function listaMedicoEspecialidadeByCodigo(string $codigo = null)
    {
        $this->limpaFiltros();
        if ($codigo != null) {
            $this->setFiltroValores("codigo = '$codigo'");
        }
        return $this->executeSELECT();
    }

    public function listaMedicoEspecialidadeByCodMedico(string $codMedico = null)
    {
        $this->limpaFiltros();
        if ($codMedico != null) {
            $this->setFiltroValores("codMedico = '$codMedico'");
        }
        return $this->executeSELECT();
    }

    public function listaMedicoEspecialidadeByCodEspecialidade(string $codEspecialidade = null)
    {
        $this->limpaFiltros();
        if ($codEspecialidade != null) {
            $this->setFiltroValores("codEspecialidade = '$codEspecialidade'");
        }
        return $this->executeSELECT();
    }


    /**
     * Get the value of codigo
     */
    public function getCodigo()
    {
        return $this->getModel()->getValor("codigo");
    }

    /**
     * Set the value of codigo
     *
     * @return  self
     */
    public function setCodigo($codigo)
    {
        $this->getModel()->setValor("codigo", $codigo);
        return $this;
    }

    /**
     * Get the value of codMedico
     */
    public function getCodMedico()
    {
        return $this->getModel()->getValor("codMedico");
    }

    /**
     * Set the value of codMedico
     *
     * @return  self
     */
    public function setCodMedico($codMedico)
    {
        $this->getModel()->setValor("codMedico", $codMedico);
        return $this;
    }

    /**
     * Get the value of codEspecialidade
     */
    public function getCodEspecialidade()
    {
        return $this->getModel()->getValor("codEspecialidade");
    }

    /**
     * Set the value of codEspecialidade
     *
     * @return  self
     */
    public function setCodEspecialidade($codEspecialidade)
    {
        $this->getModel()->setValor("codEspecialidade", $codEspecialidade);
        return $this;
    }

}

$obj = new lMedicoEspecialidade();
print_r($obj);
