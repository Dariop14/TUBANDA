</header>
      <nav>
        <div class="menu" id="BarraResponsive">

          <?php
              // Si existe una sesión abierta cambiar las opciones del menu
              if(isset($_SESSION['uUsuario'])) {
          ?>
              <a href="logout.php">Cerrar Sesión</a>;
              <a href="nuevoPerfil.php">Publica</a>
          <?php
          // Se agrega al menú el username del perfil
          echo "<a href='perfil.php'>";
          echo "<strong>";
          echo $_SESSION['uUsuario'];
          echo "</strong>";
          echo "</a>";
          echo "</a>";

                }else {
          ?>
             <!-- Si no existe una sesión abierta, se muestra otras opciones -->
                <a href="javascript:desplegarRegistro();">Registrarse</a>
                <a href="javascript:desplegar();">Iniciar Sesion</a>
          <?php
                }
          ?>
          <!-- Se agrega las opciones del menu que no cambian -->
        <a href="premium.php">Servicios</a>
        <a href="bandas.php">Bandas</a>
        <a href="artistas.php">Musicos</a>
        <a href="index.php">Home</a>
        <a href="javascript:void(0);" class="icon" onclick="MenuResponsive()">&#9776;</a>

        </div>

      </nav>
