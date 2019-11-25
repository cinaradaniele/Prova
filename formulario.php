<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  <?php
    if(isset($_GET["mensagem"]) & !empty($_GET["mensagem"])){
      if($_GET["mensagem"]=="sucesso"){
        echo "Dados gravados com sucesso!!!";
      }elseif ($_GET["mensagem"]=="erro") {
        echo "Erro ao gravar os dados!!!";
      }
      }
  ?>
    <form action="../controler/controle.php" method="post">
      <label>Nome do membro: </label>
      <input type="text" name="membroFamilia" value="">
    </br><label> Valor da renda:</label>
      <input type="text" name="rendaValor" value="">
      </br><label>Descrição da renda:</label>
      <input type="text" name="rendaDescricao" value="">
      </br><label>Valor da despesa:</label>
      <input type="text" name="despesaValor" value="">
      </br><label>Descrição do despesa:</label>
      <input type="text" name="despesaDescricao" value="">
      </br><label>Data de pagamento:</label>
      <input type="date" name="dataPagamento" value="">
      <input type="submit" name="" value="Enviar">
    </form>
  </body>
</html>
