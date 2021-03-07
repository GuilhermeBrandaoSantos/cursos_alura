<?php include __DIR__ . '../../inicio-html.php' ?>

<form action="/realiza-login" method="POST">
   <div class="form-group">
      <label for="email">E-mail:</label>
      <input type="email" name="email" id="email" class="form-control">
      <label for="senha">Senha:</label>
      <input type="password" name="senha" id="senha" class="form-control">

      <button type="submit" class="btn btn-primary mt-2">Entrar</button>
   </div>
</form>

<?php include __DIR__ . '../../fim-html.php' ?>