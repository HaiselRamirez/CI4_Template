<?php  $this->extend('Layouts/template')?>

<?php  $this->section('contenido');?>
  <div class="row">
    <div class="col-sm-12">
      <div class="card shadow">
        <div class="card-header">
          <h3 class="card-title">Lorem ipsum dolor sit amet.</h3>
        </div>
        <div class="card-body">
          <p>
            <?php
              echo session('mensaje');
            ?>
          </p>
        </div>
      </div>
    </div>
  </div>

<?php $this->endSection();?>