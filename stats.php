<?php include "include/header.php"; ?>
<div class="page fx-menu-push right left">
  <section class="page-info">
    <span class="page-title">Estadísticas</span>
  </section>

  <section class="grid">
    <div class="grid-sizer"></div>

    <div class="grid-item lw2 md2 hq4" data-widget="days-rutine">
      <div class="grid-item-content">
        <div class="close-icon">
          <span class="icon-top-line"></span>
          <span class="icon-bottom-line"></span>
        </div>
        <div class="edit-icon">
          <span class="icon-top-line"></span>
          <span class="icon-middle-line"></span>
          <span class="icon-bottom-line"></span>
        </div>
        <div class="titles">
          <h1>55</h1>
          <h2>DÍAS</h2>
          <h3>ENTRENAMIENTO</h3>
        </div>
        <span class="grid-name bottom right">RUTINA</span>
      </div>
      <div class="edit-wrapper">
        <div class="dates">
            <div class="text-modal from-date">
              <span>Inicio</span>
              <input type="text" placeholder="01/02/15">
            </div>
            <div class="text-modal to-date">
              <span>Fin</span>
              <input type="text" placeholder="01/05/15">
            </div>
          </div>
         <a class="btn-secondary left cancel">Cancelar</a>
         <a class="btn-primary right accept">Aceptar</a>
      </div>
    </div>

    <div class="grid-item lw2 md2 hq4" data-widget="hours-rutine">
      <div class="grid-item-content">
        <div class="close-icon">
          <span class="icon-top-line"></span>
          <span class="icon-bottom-line"></span>
        </div>
        <div class="edit-icon">
          <span class="icon-top-line"></span>
          <span class="icon-middle-line"></span>
          <span class="icon-bottom-line"></span>
        </div>
        <div class="titles">
          <h1>458</h1>
          <h3>HORAS</h3>
        </div>
        <span class="grid-name bottom right">TIEMPO INVERTIDO</span>
      </div>
      <div class="edit-wrapper">
        <div class="dates">
            <div class="text-modal from-date">
              <span>Inicio</span>
              <input type="text" placeholder="01/02/15">
            </div>
            <div class="text-modal to-date">
              <span>Fin</span>
              <input type="text" placeholder="01/05/15">
            </div>
          </div>
         <a class="btn-secondary left cancel">Cancelar</a>
         <a class="btn-primary right accept">Aceptar</a>
      </div>
    </div>

    <div class="grid-item lw1 md1 hq1" data-widget="graph-min-rutine">
      <div class="grid-item-content">
        <div class="close-icon">
          <span class="icon-top-line"></span>
          <span class="icon-bottom-line"></span>
        </div>
        <div class="edit-icon">
          <span class="icon-top-line"></span>
          <span class="icon-middle-line"></span>
          <span class="icon-bottom-line"></span>
        </div>
        <div class="canvas-holder">
          <canvas></canvas>
        </div>
        <span class="grid-name top left">MINUTOS DE ENTRENO - MAYO</span>
      </div>
      <div class="edit-wrapper">
        <div class="select-modal select-graph">
          <div class="option-selected">
            <span>Selecciona el mes</span>
            <i class="fa fa-chevron-down fa-fw"></i>
          </div>
          <div class="option-wrapper">
            <ul>
              <li>Marzo</li>
              <li>Abril</li>
              <li>Mayo</li>
            </ul>
          </div>
        </div>
        <div class="dates">
          <div class="text-modal from-date">
            <span>Inicio</span>
            <input type="text" placeholder="01/02/15">
          </div>
          <div class="text-modal to-date">
            <span>Fin</span>
            <input type="text" placeholder="01/05/15">
          </div>
        </div>
        <a class="btn-secondary left cancel">Cancelar</a>
        <a class="btn-primary right accept">Aceptar</a>
      </div>
    </div>

    <div class="grid-item lw1 md1 hq1" data-widget="graph-weight">
      <div class="grid-item-content">
        <div class="close-icon">
          <span class="icon-top-line"></span>
          <span class="icon-bottom-line"></span>
        </div>
        <div class="edit-icon">
          <span class="icon-top-line"></span>
          <span class="icon-middle-line"></span>
          <span class="icon-bottom-line"></span>
        </div>
        <div class="canvas-holder">
          <canvas></canvas>
        </div>
        <span class="grid-name top left">PESO CORPORAL</span>
      </div>
      <div class="edit-wrapper">
        <div class="select-modal select-graph">
          <div class="option-selected">
            <span>Selecciona el tipo de gráfica</span>
            <i class="fa fa-chevron-down fa-fw"></i>
          </div>
          <div class="option-wrapper">
            <ul>
              <li>Peso corporal</li>
              <li>Minutos invertidos</li>
              <li>Press banca</li>
              <li>Sentadilla</li>
              <li>Dominadas</li>
              <li>Peso muerto</li>
              <li>Dominadas</li>
              <li>Press militar</li>
            </ul>
          </div>
        </div>
        <div class="dates">
          <div class="text-modal from-date">
            <span>Inicio</span>
            <input type="text" placeholder="01/02/15">
          </div>
          <div class="text-modal to-date">
            <span>Fin</span>
            <input type="text" placeholder="01/05/15">
          </div>
        </div>
        <a class="btn-secondary left cancel">Cancelar</a>
        <a class="btn-primary right accept">Aceptar</a>
      </div>
    </div>

     <div class="grid-item lw1 md1 hq1" data-widget="graph-BP">
      <div class="grid-item-content">
        <div class="close-icon">
          <span class="icon-top-line"></span>
          <span class="icon-bottom-line"></span>
        </div>
        <div class="edit-icon">
          <span class="icon-top-line"></span>
          <span class="icon-middle-line"></span>
          <span class="icon-bottom-line"></span>
        </div> 
        <div class="canvas-holder">
          <canvas></canvas>
        </div>
        <span class="grid-name top left">PRESS BANCA</span>
      </div>
      <div class="edit-wrapper">
        <div class="select-modal select-graph">
          <div class="option-selected">
            <span>Selecciona el tipo de gráfica</span>
            <i class="fa fa-chevron-down fa-fw"></i>
          </div>
          <div class="option-wrapper">
            <ul>
              <li>Peso corporal</li>
              <li>Minutos invertidos</li>
              <li>Press banca</li>
              <li>Sentadilla</li>
              <li>Dominadas</li>
              <li>Peso muerto</li>
              <li>Dominadas</li>
              <li>Press militar</li>
            </ul>
          </div>
        </div>
        <div class="dates">
          <div class="text-modal from-date">
            <span>Inicio</span>
            <input type="text" placeholder="01/02/15">
          </div>
          <div class="text-modal to-date">
            <span>Fin</span>
            <input type="text" placeholder="01/05/15">
          </div>
        </div>
        <a class="btn-secondary left cancel">Cancelar</a>
        <a class="btn-primary right accept">Aceptar</a>
      </div>
    </div>

    <div class="grid-item lw1 md1 hq2" data-widget="basics-stats">
      <div class="grid-item-content">
        <div class="close-icon">
          <span class="icon-top-line"></span>
          <span class="icon-bottom-line"></span>
        </div>  
        <div class="max-stats">
          <ul>
              <li>
                <span class="name">DL</span>
                <span class="weight">145KG</span>
              </li>
              <li>
                <span class="name">BP</span>
                <span class="weight">115KG</span>
              </li>
              <li>
                <span class="name">SQ</span>
                <span class="weight">125KG</span>
              </li>
              <li>
                <span class="name">MP</span>
                <span class="weight">65KG</span>
              </li>
              <li>
                <span class="name">DO</span>
                <span class="weight">35KG</span>
              </li>
          </ul>
        </div>
        <div class="canvas-holder">
          <canvas></canvas>
        </div>
        <span class="grid-name top left">PESOS MÁXIMOS</span>
      </div>
    </div>

  </section>
</div>
<?php include "include/pre-footer.php"; ?>
<?php include "include/footer.php"; ?>