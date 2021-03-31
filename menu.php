<div class="l-sidebar">
    <div class="logo">
      <div class="logo__txt">D</div>
    </div>
    <div class="l-sidebar__content">
      <nav class="c-menu js-menu">
        <ul class="u-list">
          <?php 
            if($_SESSION['rol'] == "usuario")  {
          ?>
            <li class="c-menu__item is-active" data-toggle="tooltip" title="Registrar Usuario">
              <div class="c-menu__item__inner"><i class="fa fa-user"></i>
                <div class="c-menu-item__title"><span>Registrar Usuario</span></div>
              </div>
            </li>
          <?php 
            }
          ?>
          <?php 
            if($_SESSION['rol'] == "administrador")  {
          ?>
            <li class="c-menu__item has-submenu" data-toggle="tooltip" title="Listado de Usuarios">
              <div class="c-menu__item__inner"><i class="fa fa-list"></i>
                <div class="c-menu-item__title"><span>Listado de Usuarios</span></div>
                <div class="c-menu-item__expand js-expand-submenu"><i class="fa fa-angle-down"></i></div>
              </div>
            </li>
          <?php 
            }
          ?>
          <!-- <li class="c-menu__item has-submenu" data-toggle="tooltip" title="Statistics">
            <div class="c-menu__item__inner"><i class="fa fa-bar-chart"></i>
              <div class="c-menu-item__title"><span>Statistics</span></div>
            </div>
          </li>
          <li class="c-menu__item has-submenu" data-toggle="tooltip" title="Gifts">
            <div class="c-menu__item__inner"><i class="fa fa-gift"></i>
              <div class="c-menu-item__title"><span>Gifts</span></div>
            </div>
          </li>
          <li class="c-menu__item has-submenu" data-toggle="tooltip" title="Settings">
            <div class="c-menu__item__inner"><i class="fa fa-cogs"></i>
              <div class="c-menu-item__title"><span>Settings</span></div>
            </div>
          </li> -->
        </ul>
      </nav>
    </div>
  </div>