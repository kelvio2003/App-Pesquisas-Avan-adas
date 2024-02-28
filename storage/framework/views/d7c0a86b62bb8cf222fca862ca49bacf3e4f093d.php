

<?php $__env->startSection('titolo','Usuarios'); ?>

<?php $__env->startSection('conteudo'); ?>

<style>

  
</style>
<form action="/usuarios" method="get">
<input type="search" class="pesquisar" name="pesquisar" placeholder="pesquisar...">
<br>

                  <br>
<p>Escolha uma intervalo de datas para procurar</p>
<div class="col-md-2">
                  <div class="form-floating">
                    <input type="date" class="form-control" id="floatingZip" name="dataInicio"placeholder="Data Inical">
                    <label for="floatingZip">Data Inical</label>
                  </div>
                  </div>
               <br>
                  <div class="col-md-2">
                  <div class="form-floating">
                    <input type="date" class="form-control" id="floatingZip" name="dataFim"placeholder="Data Final">
                    <label for="floatingZip">Data Fina</label>
                  </div>
                  </div>    
                    
</form>
<br>

<br>
<br>
<?php if(session('sucesso')): ?>
<p>session('sucesso')</p>
<?php endif; ?>
<div class="card">
  <div class="card-header">
    Informações de Cidadãos
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-striped table-bordered">
        <thead>
          <tr>
            <th>Registro</th>
            <th>Nome</th>
            <th>Pai</th>
            <th>Mãe</th>
            <th>Naturalidade</th>
            <th>Estado Civil</th>
            <th>Sexo</th>
            <th>Identidade</th>
            <th>Provincia</th>
            <th>Altura</th>
            <th>Nascido</th>
            <th>Emissão</th>
            <th>Validade</th>
            <th>Acção</th>
          </tr>
        </thead>
        <?php $__currentLoopData = $usuarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tbody>
          <tr>
            <td><?php echo e($usuario->id); ?></td>
            <td><?php echo e($usuario->nome); ?></td>
            <td><?php echo e($usuario->nome_pai); ?></td>
            <td><?php echo e($usuario->nome_mae); ?></td>
            <td><?php echo e($usuario->naturalidade); ?></td>
            <td><?php echo e($usuario->estado_civil); ?></td>
            <td><?php echo e($usuario->sexo); ?></td>
            <td><?php echo e($usuario->identidade); ?></td>
            <td><?php echo e($usuario->provincia); ?></td>
            <td><?php echo e($usuario->altura); ?></td>
            <td><?php echo e($usuario->data_nascimento); ?></td>
            <td><?php echo e($usuario->data_emissao); ?></td>
            <td><?php echo e($usuario->data_validade); ?></td>
            <td>
 <form action="/usuarios/<?php echo e($usuario->id); ?>" method="post">
 <?php echo csrf_field(); ?>
 <?php echo method_field('DELETE'); ?>
 <button class='btn btn-danger delete-btn'><ion-icon name="trash-outline"></ion-icon></button>
 </form>
</td>
          </tr>
        </tbody>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </table>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('paginas.principal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\Projecto_pesquisas\resources\views/usuarios.blade.php ENDPATH**/ ?>