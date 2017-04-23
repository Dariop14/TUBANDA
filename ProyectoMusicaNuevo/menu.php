</header>


<!-- Inicia el contenido -->



      <nav>
        <div class="menu" id="BarraResponsive">

          <?php
              if(isset($_SESSION['uUsuario'])) {
          ?>

              <a href="logout.php">Cerrar Sesión</a>;

          <?php

          echo "<a href='perfil.php'>";
          echo "<strong>";
          echo $_SESSION['uUsuario'];
          echo "</strong>";
          echo "</a>";
          echo "</a>";

                }else {
          ?>
                <a href="javascript:desplegarRegistro();">Registrarse</a>
                <a href="javascript:desplegar();">Iniciar Sesion</a>
          <?php
                }
          ?>

        <a href="premium.php">Premium</a>
        <a href="bandas.php">Bandas</a>
        <a href="artistas.php">Musicos</a>
        <a href="index.php">Home</a>
        <a href="javascript:void(0);" class="icon" onclick="MenuResponsive()">&#9776;</a>

        </div>

      </nav>
