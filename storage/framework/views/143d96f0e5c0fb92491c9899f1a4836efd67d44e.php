

<?php $__env->startSection('titolo','cadastrar'); ?>

<?php $__env->startSection('conteudo'); ?>
<br>

<div> 
<form class="row g-3"  method="POST" action="/cadastrados">

<?php echo csrf_field(); ?>
<div class="form-group">
        <label for="titulo">Nome Completo</label>
        <input type="text" class="form-control"  required name="nome" placeholder="Nome completo do cidadão">
      </div>
      <div class="form-group">
        <label for="titulo">Pai</label>
        <input type="text" class="form-control"  required name="nome_pai" placeholder="Nome do pai">
      </div>

      <div class="form-group">
        <label for="titulo">Mãe</label>
        <input type="text" class="form-control"  required name="nome_mae" placeholder="ANome da mãe">
      </div>
      <div class="form-group">
        <label for="titulo">Nacionalidade</label>
        <input type="text" class="form-control"  required name="naturalidade" placeholder="naturalidade">
      </div>
      <div class="form-group">
        <label for="titulo">Estado Civil</label>
        <input type="text" class="form-control"  required name="estado_civil" placeholder="Estado Civil">
      </div>
      <div class="form-group">
        <label for="titulo">Sexo</label>
        <input type="text" class="form-control"  required name="sexo" placeholder="Genero">
        
      </div>
      <div class="form-group">
        <label for="titulo">Provincia</label>
        <input type="text" class="form-control"  required name="provincia" placeholder="provincia">
      </div>
      <div class="form-group">
        <label for="titulo">Altura</label>
        <input type="text" class="form-control"  required name="altura" placeholder="Altura">
      </div>
      <div class="form-group">
        <label for="titulo">Residencia</label>
        <input type="text" class="form-control"  required name="residencia" placeholder="residencia">
      </div>
      <div class="form-group">
        <label for="titulo">Identidade</label>
        <input type="text" class="form-control"  required name="identidade" placeholder="Bilhete de identidade">
      </div>
                <div class="col-md-2">
                  <div class="form-floating">
                    <input type="date" class="form-control" id="floatingZip" name="data_nascimento"placeholder="Data">
                    <label for="floatingZip">Nascimento</label>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form-floating">
                    <input type="date" class="form-control" id="floatingZip" name="data_emissao"placeholder="Data">
                    <label for="floatingZip">Emissão</label>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form-floating">
                    <input type="date" class="form-control" id="floatingZip" name="data_validade"placeholder="Data">
                    <label for="floatingZip">Validade</label>
                  </div>
                </div>
                
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Adicionar Cidadão</button>
                 
                </div>
              </form><!-- End floating Labels Form -->
              <br>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('paginas.principal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\Projecto_pesquisas\resources\views/cadastrar.blade.php ENDPATH**/ ?>