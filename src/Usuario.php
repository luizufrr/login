<?php
use Doctrine\ORM\Mapping as ORM;

//require_once __DIR__ . '/../header.php';

/**
 * @ORM\Entity
 * @ORM\Table(name="USUARIO")
 */
class Usuario {
	/**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;
    /**
     * @ORM\Column(type="string")
     */
    protected $nome;
    /**
     * @ORM\Column(type="string",nullable=true)
     */
    protected $sobrenome;
    /**
     * @ORM\Column(type="string",nullable=true)
     */
    protected $datanasci;
    /**
     * @ORM\Column(type="string",nullable=true)
     */
    protected $cargo;
    /**
     * @ORM\Column(type="string",nullable=true)
     */
    protected $email;
    /**
     * @ORM\Column(type="string",nullable=true)
     */
    protected $senha;

	public function getNome()
	{
		return $this->nome;
	}
}
 ?>
