<?php
include_once("header.php");
?>

<div class="container">
<form class="row g-3" action="../controler/inserirCadastro.php" method="Get">
  <div class="col-md-6">
    <label for="inputNome" class="form-label">Nome</label>
    <input type="text" name="nomeusu" class="form-control" id="inputNome" placeholder="Júlio Naghaita">
  </div>
  <div class="col-md-6">
    <label for="inputEmail" class="form-label">Email</label>
    <input type="email" name="emailusu" class="form-control" id="inputEmail" placeholder="julionaghaita@gmail.com">
  </div>
  <div class="col-4">
    <label for="inputtelefone" class="form-label">Telefone</label>
    <input type="text" name="foneusu" class="form-control" id="inputtelefone" placeholder="(11) 4002-8922">
  </div>
  <div class="col-4">
    <label for="inputcpf" class="form-label">CPF</label>
    <input type="text" name="cpfusu" class="form-control" id="inputcpf" placeholder="965.569.965-55">
  </div>
  <div class="col-md-4">
    <label for="inputTipo" class="form-label">Tipo de Usuário</label>
    <select id="inputTipo" name="tipousu" class="form-select">
      <option selected>Escolha...</option>
      <option value="1">Funcionário</option>
      <option value="2">Cliente</option>
    </select>
  </div>
  <div class="col-md-3">
    <label for="inputCEP" class="form-label">CEP</label>
    <input type="text" name="cepusu" class="form-control" id="inputCEP" placeholder="09787-121">
  </div>
  <div class="col-md-3">
    <label for="inputNumero" class="form-label">Número</label>
    <input type="text" name="numusu" class="form-control" id="inputNumero" placeholder="220">
  </div>
  <div class="col-md-6">
    <label for="inputComplemento" class="form-label">Complemento</label>
    <input type="text" name="compleusu" class="form-control" id="inputComplemento" placeholder="10A">
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Li os Termos e Estou de Acordo
      </label>
    </div>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-success">Enviar</button>
  </div>
</form>
</div>


<?php
include_once("footer.php");
?>
