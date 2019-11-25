<?php

  include("../model/Pessoa.php");
  $pessoa1 = new orcamento();

  $membroFamilia = $_POST["membroFamilia"];
  $rendaValor = $_POST["rendaValor"];
  $rendaDescricao = $_POST["rendaDescricao"];
  $despesaValor = $_POST["despesaValor"];
  $despesaDescricao = $_POST["despesaDescricao"];
  $dataPagamento = $_POST["dataPagamento"];

  $inserir = $pessoa1->cadastrar($membroFamilia, $rendaValor, $rendaDescricao, $despesaValor, $despesaDescricao, $dataPagamento);
  if ($inserir==1){
    header('location: ../view/formulario.php?mensagem=sucesso');
  }else{
    header('location: ../view/formulario.php?mensagem=erro');
  }
?>
