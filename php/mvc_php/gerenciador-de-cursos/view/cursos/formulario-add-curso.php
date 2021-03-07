<?php include __DIR__ . '../../inicio-html.php'?>

   <form action="/salvar-curso<?= isset($curso) ? "?id=" .$curso->getId() : "" ?>" method="POST">
      <div class="form-group">
         <label for="descricao">Descrição</label>
         <input 
            type="text" 
            name="descricao" 
            id="descricao" 
            value="<?= isset($curso) ? $curso->getDescricao(): ''; ?>" 
            class="form-control"
         >

         <button type="submit" class="btn btn-primary mt-2">Salvar</button>
      </div>
   </form>
   
<?php include __DIR__ . '../../fim-html.php'?>
   