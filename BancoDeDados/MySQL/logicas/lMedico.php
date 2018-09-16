<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
date_default_timezone_set('America/Sao_Paulo');
include_once "Persistencia.php";
include_once "Filtro.php";

class lMedico extends Persistencia
{
    public function __construct()
    {
        parent::__construct();
        $this->setModel("tMedico");
    }

    public function listaMedicoByCodigo(string $codigo)
    {
        $this->limpaFiltros();
        $this->setFiltroValores("codigo = '$codigo'");
        return $this->executeSELECT();
    }

    public function listaMedicoByNome(string $nome)
    {
        $this->limpaFiltros();
        $this->setFiltroValores("nome = '$nome'");
        return $this->executeSELECT();
    }

    public function listaMedicoBySenha(string $senha)
    {
        $this->limpaFiltros();
        $this->setFiltroValores("senha = '$senha'");
        return $this->executeSELECT();
    }

    public function listaMedicoByCpf(string $cpf)
    {
        $this->limpaFiltros();
        $this->setFiltroValores("cpf = '$cpf'");
        return $this->executeSELECT();
    }

    public function listaMedicoByPlanoDeSaude(string $planoDeSaude)
    {
        $this->limpaFiltros();
        $this->setFiltroValores("planoDeSaude = '$planoDeSaude'");
        return $this->executeSELECT();
    }

    public function listaMedicoByDataNascimento(string $dataNascimento)
    {
        $this->limpaFiltros();
        $this->setFiltroValores("dataNascimento = '$dataNascimento'");
        return $this->executeSELECT();
    }

    public function listaMedicoByEndereco(string $endereco)
    {
        $this->limpaFiltros();
        $this->setFiltroValores("endereco = '$endereco'");
        return $this->executeSELECT();
    }

    public function listaMedicoByCEP(string $CEP)
    {
        $this->limpaFiltros();
        $this->setFiltroValores("CEP = '$CEP'");
        return $this->executeSELECT();
    }

    public function listaMedicoByTelefone1(string $telefone1)
    {
        $this->limpaFiltros();
        $this->setFiltroValores("telefone1 = '$telefone1'");
        return $this->executeSELECT();
    }

    public function listaMedicoByTelefone2(string $telefone2)
    {
        $this->limpaFiltros();
        $this->setFiltroValores("telefone2 = '$telefone2'");
        return $this->executeSELECT();
    }

    public function listaMedicoByEmail(string $email)
    {
        $this->limpaFiltros();
        $this->setFiltroValores("email = '$email'");
        return $this->executeSELECT();
    }

    public function listaMedicoByRegDate(string $regDate)
    {
        $this->limpaFiltros();
        $this->setFiltroValores("regDate = '$regDate'");
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
     * Get the value of nome
     */
    public function getNome()
    {
        return $this->getModel()->getValor("nome");
    }

    /**
     * Set the value of nome
     *
     * @return  self
     */
    public function setNome($nome)
    {
        $this->getModel()->setValor("nome", $nome);
        return $this;
    }

    /**
     * Get the value of senha
     */
    public function getSenha()
    {
        return $this->getModel()->getValor("senha");
    }

    /**
     * Set the value of senha
     *
     * @return  self
     */
    public function setSenha($senha)
    {
        $this->getModel()->setValor("senha", $senha);

        return $this;
    }

    /**
     * Get the value of cpf
     */
    public function getCpf()
    {
        return $this->getModel()->getValor("cpf");
    }

    /**
     * Set the value of cpf
     *
     * @return  self
     */
    public function setCpf($cpf)
    {
        $this->getModel()->setValor("cpf", $cpf);
        return $this;
    }

    /**
     * Get the value of planoDeSaude
     */
    public function getPlanoDeSaude()
    {
        return $this->getModel()->getValor("planoDeSaude");
    }

    /**
     * Set the value of planoDeSaude
     *
     * @return  self
     */
    public function setPlanoDeSaude($planoDeSaude)
    {
        $this->getModel()->setValor("planoDeSaude", $planoDeSaude);
        return $this;
    }

    /**
     * Get the value of dataNascimento
     */
    public function getDataNascimento()
    {
        return $this->getModel()->getValor("dataNascimento");
    }

    /**
     * Set the value of dataNascimento
     *
     * @return  self
     */
    public function setDataNascimento($dataNascimento)
    {
        $this->getModel()->setValor("dataNascimento", $dataNascimento);
        return $this;
    }

    /**
     * Get the value of endereco
     */
    public function getEndereco()
    {
        return $this->getModel()->getValor("endereco");
    }

    /**
     * Set the value of endereco
     *
     * @return  self
     */
    public function setEndereco($endereco)
    {
        $this->getModel()->setValor("endereco", $endereco);
        return $this;
    }

    /**
     * Get the value of CEP
     */
    public function getCEP()
    {
        return $this->getModel()->getValor("CEP");
    }

    /**
     * Set the value of CEP
     *
     * @return  self
     */
    public function setCEP($CEP)
    {
        $this->getModel()->setValor("CEP", $CEP);
        return $this;
    }

    /**
     * Get the value of telefone1
     */
    public function getTelefone1()
    {
        return $this->getModel()->getValor("telefone1");
    }

    /**
     * Set the value of telefone1
     *
     * @return  self
     */
    public function setTelefone1($telefone1)
    {
        $this->getModel()->setValor("telefone1", $telefone1);
        return $this;
    }

    /**
     * Get the value of telefone2
     */
    public function getTelefone2()
    {
        return $this->getModel()->getValor("telefone2");
    }

    /**
     * Set the value of telefone2
     *
     * @return  self
     */
    public function setTelefone2($telefone2)
    {
        $this->getModel()->setValor("telefone2", $telefone2);
        return $this;
    }

    /**
     * Get the value of email
     */
    public function getEmail()
    {
        return $this->getModel()->getValor("email");
    }

    /**
     * Set the value of email
     *
     * @return  self
     */
    public function setEmail($email)
    {
        $this->getModel()->setValor("email", $email);
        return $this;
    }

    /**
     * Get the value of regDate
     */
    public function getRegDate()
    {
        return $this->getModel()->getValor("regDate");
    }

    /**
     * Set the value of regDate
     *
     * @return  self
     */
    public function setRegDate($regDate)
    {
        $this->getModel()->setValor("regDate", $regDate);
        return $this;
    }

}

$obj = new lMedico();
print_r($obj);
