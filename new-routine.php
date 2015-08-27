<?php include "include/header.php"; ?>
<div class="page fx-menu-push right left">
  <section class="page-info">
    <span class="page-title">Crear rutina</span>
    <div class="btn save-btn"><span>Guardar</span></div>
    <div class="routine-name">
      <span class="name">Nombre rutina</span>
      <div class="routine-name-input"><input type="text" name="routine-name" placeholder="Personalizada"></div>
    </div>
  </section>

  <section class="menu-routine-days">
    <ul>
      <li class="active">Lunes</li>
      <li>Martes</li>
      <li>Miércoles</li>
      <li>Jueves</li>
      <li>Viernes</li>
      <li>Sábado</li>
      <li>Domingo</li>
    </ul>
  </section>

  <section class="exercise-routine-day">
    <div class="routine-day-name">
        <span class="name">Lunes - </span>
        <div class="routine-name-input"><input type="text" name="routine-name" placeholder="Ejercicios básicos"></div>
    </div>
      <ul class="exercise-list">
        <li class="exercise-item">
          <span class="exercise-name">Peso muerto</span>
          <div class="exercise-series-input"><input type="number" name="exercise-series" placeholder="3"></div>
          <span class="exercise-series">Series</span>
        </li>         
        <li class="exercise-item">
          <span class="exercise-name">Sentadilla frontal</span>
          <div class="exercise-series-input"><input type="number" name="exercise-series" placeholder="3"></div>
          <span class="exercise-series">Series</span>
        </li>               
      </ul>
  </section>

  <section class="exercise-selector-wrapper">
    <span class="title">Ejercicios</span>
    <div class="exercise-search">
      <input type="text" name="exercise-search" placeholder="Buscar">
      <i class="fa fa-search fa-fw"></i>
    </div>
          
    <ul class="exercise-list scroll-list">
      <li class="exercise-list-item">
        <span class="add-button">+</span>
        <span class="title">Press banca</span>
      </li>      
      <li class="exercise-list-item">
        <span class="add-button">+</span>
        <span class="title">Press banca inclinado</span>
      </li>      
      <li class="exercise-list-item">
        <span class="add-button">+</span>
        <span class="title">Aperturas planas</span>
      </li>      
      <li class="exercise-list-item">
        <span class="add-button">+</span>
        <span class="title">Pullover</span>
      </li>      
      <li class="exercise-list-item">
        <span class="add-button">+</span>
        <span class="title">Aperturas con poleas</span>
      </li>    
      <li class="exercise-list-item">
        <span class="add-button">+</span>
        <span class="title">Aperturas con poleas</span>
      </li>
    </ul>
  </section>
</div>

<section class="modal-success">
  <div class="modal-wrapper"><img src="img/success.png" title="success"></div>
</section>

<?php include "include/pre-footer.php"; ?>
<?php include "include/footer.php"; ?>