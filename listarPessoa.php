<?php
  include("../model/Pessoa.php");
  $listarPessoa = new orcamento();
  $retornoDados = $listarPessoa->listar();

  echo "Foram encontrados " . count($retornoDados) . " registros.";//verifica quantos registros tem no vetor
  if (count($retornoDados) > 0){
    ?>
    <table border=1>
      <tr>
        <td>membroFamilia</td>
        <td>rendaValor</td>
        <td>rendaDescricao</td>
        <td>despesaValor</td>
        <td>despesaDescricao</td>
        <td>dataPagamento</td>
      </tr>
      <?php
      foreach ($retornoDados as $key => $value) {
        echo "<tr><td>" . $value["membroFamilia"];
        echo "</td><td>" . $value["rendaValor"];
        echo "</td><td>" . $value["rendaDescricao"];
        echo "</td><td>" . $value["despesaValor"];
        echo "</td><td>" . $value["despesaDescricao"];
        echo "</td><td>" . $value["dataPagamento"];
        echo "</td></tr>";
      }
      ?>
    </table>
    <?php
  }
?>
