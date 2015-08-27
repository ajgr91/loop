<?php include "include/header.php"; ?>
<div class="page fx-menu-push right left">
  <section class="page-info">
    <span class="page-title">Dashboard</span>
    <div class="btn modify-btn fright"><span>Personalizar</span><i>+</i></div>
  </section>

  <section class="grid" id="grid">
    <div class="grid-sizer"></div>
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

    <div class="grid-item lw1 md1 hq2" data-widget="workout">
      <div class="grid-item-content">
        <div class="close-icon">
          <span class="icon-top-line"></span>
          <span class="icon-bottom-line"></span>
        </div>
        <span class="grid-date top left">Lunes 13, Abril</span>
        <div class="titles">
          <h2>Hoy es</h2>
          <h1>torso-pierna</h1>
        </div>
        <span class="grid-name bottom right">RUTINA</span>
      </div>
    </div>

    <div class="grid-item lw2 md2 hq4" data-widget="lost-weight">
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
          <h1>-5KG</h1>
        </div>
        <span class="grid-name bottom right">PESO</span>
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

    <div class="grid-item lw1 md2 hq4" data-widget="note">
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
          <h1>No levantar los talones en peso muerto.</h1>
        </div>
      </div>
      <div class="edit-wrapper">
         <textarea name="nota" placeholder="Introduce tu nueva nota..."></textarea>
         <a class="btn-secondary left cancel">Cancelar</a>
         <a class="btn-primary right accept">Aceptar</a>
      </div>
    </div>

    <div class="grid-item lw2 md2 hq4" data-widget="sq-3RM">
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
          <h2>3RM</h2>
          <h1>135KG</h1>
        </div>
        <span class="grid-name bottom right">SQ</span>
      </div>
      <div class="edit-wrapper">
        <div class="select-modal select-rm">
          <div class="option-selected">
            <span>Repeticiones máximas</span>
            <i class="fa fa-chevron-down fa-fw"></i>
          </div>
          <div class="option-wrapper">
            <ul>
              <li>1RM</li>
              <li>2RM</li>
              <li>3RM</li>
            </ul>
          </div>
        </div>
        <div class="select-modal select-ex">
          <div class="option-selected">
            <span>Ejercicio muscular</span>
            <i class="fa fa-chevron-down fa-fw"></i>
          </div>
          <div class="option-wrapper">
            <ul>
              <li>1RM</li>
              <li>2RM</li>
              <li>3RM</li>
            </ul>
          </div>
        </div>
        <a class="btn-secondary left cancel">Cancelar</a>
        <a class="btn-primary right accept">Aceptar</a>
      </div>
    </div>

    <div class="grid-item lw2 md2 hq4" data-widget="bp-1RM">
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
          <h2>1RM</h2>
          <h1>105KG</h1>
        </div>
        <span class="grid-name bottom right">BP</span>
      </div>
      <div class="edit-wrapper">
        <div class="select-modal select-rm">
          <div class="option-selected">
            <span>Repeticiones máximas</span>
            <i class="fa fa-chevron-down fa-fw"></i>
          </div>
          <div class="option-wrapper">
            <ul>
              <li>1RM</li>
              <li>2RM</li>
              <li>3RM</li>
            </ul>
          </div>
        </div>
        <div class="select-modal select-ex">
          <div class="option-selected">
            <span>Ejercicio muscular</span>
            <i class="fa fa-chevron-down fa-fw"></i>
          </div>
          <div class="option-wrapper">
            <ul>
              <li>1RM</li>
              <li>2RM</li>
              <li>3RM</li>
            </ul>
          </div>
        </div>
        <a class="btn-secondary left cancel">Cancelar</a>
        <a class="btn-primary right accept">Aceptar</a>
      </div>
    </div>

    <div class="grid-item lw1 md1 hq2" data-widget="video">
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
        <span class="grid-name bottom right">Vídeo</span>
        <div class="video-player">
          <div class="background-img flash-out" style="background-image: url(/LOOP/img/img1.jpg);"></div>
          <div class="background-overlay"></div>
          <div class="icon-play"><i class="fa fa-play-circle"></i></div>
        </div>
      </div>
      <div id="ytplayer"></div>
      <div class="edit-wrapper">
        <div class="text-modal text-video">
          <span>Enlace</span>
          <input type="text" placeholder="Introduce la dirección web">
        </div>
         <a class="btn-secondary left cancel">Cancelar</a>
         <a class="btn-primary right accept">Aceptar</a>
      </div>
    </div>
  </section>
</div>
<?php include "include/pre-footer.php"; ?>
<?php include "include/footer.php"; ?>

<script>

                        var player = {
                            playVideo: function(container, videoId) {
                                if (typeof(YT) == 'undefined' || typeof(YT.Player) == 'undefined') {
                                    window.onYouTubePlayerAPIReady = function() {
                                        player.loadPlayer(container, videoId);
                                    };
                                    $.getScript('//www.youtube.com/player_api');
                                } else {
                                    player.loadPlayer(container, videoId);
                                }
                            },
                            loadPlayer: function(container, videoId) {
                                window.myPlayer = new YT.Player(container, {
                                    playerVars: {
                                        modestbranding: 1,
                                        rel: 1,
                                        controls: 1, 
                                        html5: 1 ,
                                        mute: 1,
                                        showinfo: 0,
                                        autoplay: 0,
                                        loop: 1,
                                        playlist: videoId
                                    },
                                    events: {
                                        'onReady': player.onPlayerReady,
                                        'onStateChange': player.onStateChange,
                                    },
                                    height: $('.info-block').height(),
                                    width: $('.info-block').width(),
                                    videoId: videoId,
                                });
                            },
                            onPlayerReady: function (event) {
                                event.target.mute();
                            },
                            onStateChange: function(event){
                                if(event.data === YT.PlayerState.ENDED){
                                    player.playVideo(containerId, videoId);
                                }
                            }
                        };

                        $('.background-video').css('display', 'block');
                        var containerId = 'ytplayer';
                        var videoId = 'bOYjaRGc7kE';
                        player.playVideo(containerId, videoId);


</script>