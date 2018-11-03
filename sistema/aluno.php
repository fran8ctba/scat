<?php 

class Aluno{

	private $idAluno;
	private $nome;
	private $rg;
	private $dtNascimento;
	private $cep;
	private $rua;
	private $n_casa;
	private $turno;
	private $nome_responsavel;
	private $cpf;
	private $telefone;

	public function __construct($idAluno, $nome,$rg,$dtNascimento,$cep,$rua,$n_casa,$turno,$nome_responsavel,$cpf,$telefones)
	{
		
	$this->idAluno = $idAluno;
	$this->nome = $nome;
	$this->rg = $rg;
	$this->dtNascimento = $dtNascimento;
	$this->cep = $cep;
	$this->rua = $rua;
	$this->n_casa= $n_casa;
	$this->turno = $turno;
	$this->nome_Responsavel = $nome_responsavel;
	$this->cpf = $cpf;
	$this->telefone = $telefone;

	}
	
}


