<?php
class orcamento{
  private $membroFamilia, $rendaValor, $rendaDescricao, $despesaValor, $despesaDescricao, $dataPagamento;

  public function setRendaDescricao($rendaDescricao){
    $this->rendaDescricao=$rendaDescricao;
  }
  public function getRendaDescricao(){
    return $this->rendaDescricao;
  }
  public function setMembroFamilia($membroFamilia){
    $this->membroFamilia = $membroFamilia;
  }
  public function setRendaValor($rendaValor){
    $this->rendaValor = $rendaValor;
  }
  public function getMembroFamilia(){
    return $this->membroFamilia;
  }
  public function getRendaValorl(){
    return $this->rendaValor;
  }
  public function setDespesaValor($despesaValor){
    $this-> $despesaValor = $despesaValor  ;
  }
  public function getDespesaValor(){
    return $this->despesaValor ;
  }
  public function setDespesaDescricao ($despesaDescricao){
    $this->$despesaDescricao = $despesaDescricao;
  }
  public function getDespesaDescricao (){
    return $this->despesaDescricao;
  }
  public function setDataPagamento ($dataPagamento){
    $this-> $dataPagamento = $dataPagamento;
  }
  public function getDataPagamento (){
    return $this->dataPagamento;
  }
  public function cadastrar($membroFamilia, $rendaValor, $rendaDescricao,
                              $despesaValor , $despesaDescricao, $dataPagamento){
    $this->setMembroFamilia($membroFamilia);
    $this->setRendaValor($rendaValor);
    $this->setRendaDescricao($rendaDescricao);
    $this->setDespesaValor($despesaValor);
    $this->setDespesaDescricao($despesaDescricao);
    $this->setDataPagamento($dataPagamento);

    echo $sqlInsert = "insert into orcamento
    (membroFamilia, rendaValor, rendaDescricao, despesaValor, despesaDescricao, dataPagamento )
    values
    ('{$this->getMembroFamilia()}','{$this->getRendaValor()}',
    '{$this->getRendaDescricao()}', '{$this->getDespesaValor() }',
    '{$this->getDespesaDescricao()}', '{$this->getDataPagamento()}')";

    include("Conexao.php");

    $conectar = new Conexao();

    if($retornoInsert = $conectar->getConectar()->query($sqlInsert)){
      return 1;
    }else {
      return 0;
    }
  }
  public function listar(){
    $lista = "select * from orcamento";
    include ("Conexao.php");
    $objetoListar = new Conexao();

    $retornoBanco = $objetoListar->getConectar()->query($lista);
    $dados = array();

    while($temp = $retornoBanco->fetch_array()) {
      $dados[]=$temp;
    }
    return $dados;


  }
}
?>
