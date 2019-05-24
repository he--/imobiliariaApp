<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="usuario")
 */
class Usuario
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    private $nome;

    /**
     * @ORM\Column(type="string", length=15, nullable=false)
     */
    private $cpfCnpj;

    /**
     * @ORM\Column(type="date", nullable=false)
     */
    private $dtNascimento;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $dtCadastro;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $sexo;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $login;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $senha;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Endereco", inversedBy="cliente")
     * @ORM\JoinColumn(name="endereco_id", referencedColumnName="id", unique=true)
     */
    private $endereco;

//    /**
//     * @ORM\OneToMany(targetEntity="Entity\contratoLocacao", mappedBy="usuario")
//     */
//    private $contratoLocacao;
//
//    /**
//     * @ORM\OneToMany(targetEntity="Entity\ContratoAdm", mappedBy="usuario")
//     */
//    private $contratoAdm;

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
    public function setId($id): void
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
    public function setNome($nome): void
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getCpfCnpj()
    {
        return $this->cpfCnpj;
    }

    /**
     * @param mixed $cpfCnpj
     */
    public function setCpfCnpj($cpfCnpj): void
    {
        $this->cpfCnpj = $cpfCnpj;
    }

    /**
     * @return mixed
     */
    public function getDtNascimento()
    {
        return $this->dtNascimento;
    }

    /**
     * @param mixed $dtNascimento
     */
    public function setDtNascimento($dtNascimento): void
    {
        $this->dtNascimento = $dtNascimento;
    }

    /**
     * @return mixed
     */
    public function getDtCadastro()
    {
        return $this->dtCadastro;
    }

    /**
     * @param mixed $dtCadastro
     */
    public function setDtCadastro($dtCadastro): void
    {
        $this->dtCadastro = $dtCadastro;
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
    public function setEmail($email): void
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * @param mixed $sexo
     */
    public function setSexo($sexo): void
    {
        $this->sexo = $sexo;
    }

    /**
     * @return mixed
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @param mixed $login
     */
    public function setLogin($login): void
    {
        $this->login = $login;
    }

    /**
     * @return mixed
     */
    public function getSenha()
    {
        return $this->senha;
    }

    /**
     * @param mixed $senha
     */
    public function setSenha($senha): void
    {
        $this->senha = $senha;
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
    public function setEndereco($endereco): void
    {
        $this->endereco = $endereco;
    }

//    /**
//     * @return mixed
//     */
//    public function getContratoLocacao()
//    {
//        return $this->contratoLocacao;
//    }
//
//    /**
//     * @param mixed $contratoLocacao
//     */
//    public function setContratoLocacao($contratoLocacao): void
//    {
//        $this->contratoLocacao = $contratoLocacao;
//    }
//
//    /**
//     * @return mixed
//     */
//    public function getContratoAdm()
//    {
//        return $this->contratoAdm;
//    }
//
//    /**
//     * @param mixed $contratoAdm
//     */
//    public function setContratoAdm($contratoAdm): void
//    {
//        $this->contratoAdm = $contratoAdm;
//    }

}