<?php
/**
 * Created by PhpStorm.
 * User: alylson
 * Date: 24/07/18
 * Time: 16:38
 */

namespace Anoreg\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class AnoregModel {
    /**
     * @ORM\Id
     * @ORM\GeneratedValue("AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nome;
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $razao;
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $tipo_documento;
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $documento;
    /**
     * @ORM\Column(type="integer", length=10)
     */
    private $cep;
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $endereco;
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $bairro;
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $cidade;
    /**
     * @ORM\Column(type="string", length=2)
     */
    private $uf;
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $tabeliao;
    /**
     * @ORM\Column(type="integer", length=1)
     */
    private $ativo;
    /**
     * @ORM\Column(type="integer", length=15)
     */
    private $telefone;
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getRazao()
    {
        return $this->razao;
    }

    /**
     * @param mixed $razao
     */
    public function setRazao($razao)
    {
        $this->razao = $razao;
    }

    /**
     * @return mixed
     */
    public function getTipoDocumento()
    {
        return $this->tipo_documento;
    }

    /**
     * @param mixed $tipo_documento
     */
    public function setTipoDocumento($tipo_documento)
    {
        $this->tipo_documento = $tipo_documento;
    }

    /**
     * @return mixed
     */
    public function getDocumento()
    {
        return $this->documento;
    }

    /**
     * @param mixed $documento
     */
    public function setDocumento($documento)
    {
        $this->documento = $documento;
    }

    /**
     * @return mixed
     */
    public function getCep()
    {
        return $this->cep;
    }

    /**
     * @param mixed $cep
     */
    public function setCep($cep)
    {
        $this->cep = $cep;
    }

    /**
     * @return mixed
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * @param mixed $endereco
     */
    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
    }

    /**
     * @return mixed
     */
    public function getBairro()
    {
        return $this->bairro;
    }

    /**
     * @param mixed $bairro
     */
    public function setBairro($bairro)
    {
        $this->bairro = $bairro;
    }

    /**
     * @return mixed
     */
    public function getCidade()
    {
        return $this->cidade;
    }

    /**
     * @param mixed $cidade
     */
    public function setCidade($cidade)
    {
        $this->cidade = $cidade;
    }

    /**
     * @return mixed
     */
    public function getUf()
    {
        return $this->uf;
    }

    /**
     * @param mixed $uf
     */
    public function setUf($uf)
    {
        $this->uf = $uf;
    }

    /**
     * @return mixed
     */
    public function getTabeliao()
    {
        return $this->tabeliao;
    }

    /**
     * @param mixed $tabeliao
     */
    public function setTabeliao($tabeliao)
    {
        $this->tabeliao = $tabeliao;
    }

    /**
     * @return mixed
     */
    public function getAtivo()
    {
        return $this->ativo;
    }

    /**
     * @param mixed $ativo
     */
    public function setAtivo($ativo)
    {
        $this->ativo = $ativo;
    }

    /**
     * @return mixed
     */
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * @param mixed $telefone
     */
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }



}
