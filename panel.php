<?php 
session_start();
// var_dump($_SESSION);
?>
<?php

if(isset($_POST["submit"])) {
  var_dump($_POST);die;
}
?>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<!DOCTYPE html><html class=''>
<head><script src='//production-assets.codepen.io/assets/editor/live/console_runner-079c09a0e3b9ff743e39ee2d5637b9216b3545af0de366d4b9aad9dc87e26bfd.js'></script><script src='//production-assets.codepen.io/assets/editor/live/events_runner-73716630c22bbc8cff4bd0f07b135f00a0bdc5d14629260c3ec49e5606f98fdd.js'></script><script src='//production-assets.codepen.io/assets/editor/live/css_live_reload_init-2c0dc5167d60a5af3ee189d570b1835129687ea2a61bee3513dee3a50c115a77.js'></script><meta charset='UTF-8'><meta name="robots" content="noindex"><link rel="shortcut icon" type="image/x-icon" href="//production-assets.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico" /><link rel="mask-icon" type="" href="//production-assets.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111" /><link rel="canonical" href="https://codepen.io/jaca90/pen/vZJZMx?depth=everything&order=popularity&page=10&q=statistics&show_forks=false" />
<link rel="stylesheet" href="estilosPanel.css">
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css'><link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'><link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css'>
<style class="cp-pen-styles">@import url("https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700&subset=latin-ext");
</style></head><body>

<body class="sidebar-is-reduced">
  <header class="l-header">
    <div class="l-header__inner clearfix">
      <div class="c-header-icon js-hamburger">
        <div class="hamburger-toggle"><span class="bar-top"></span><span class="bar-mid"></span><span class="bar-bot"></span></div>
      </div>
      <div class="c-header-icon has-dropdown"><span class="c-badge c-badge--header-icon animated shake">87</span><i class="fa fa-bell"></i>
        <div class="c-dropdown c-dropdown--notifications">
          <div class="c-dropdown__header"></div>
          <div class="c-dropdown__content"></div>
        </div>
      </div>
      <div class="c-search">
        <input class="c-search__input u-input" placeholder="Search..." type="text"/>
      </div>
      <div class="header-icons-group">
        <div class="c-header-icon basket"><span class="c-badge c-badge--header-icon animated shake">12</span><i class="fa fa-shopping-basket"></i></div>
        <div class="c-header-icon logout"><a href="./index.html"><i class="fa fa-power-off"></i></a></div>
      </div>
    </div>
  </header>
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
</body>
<main class="l-main">
  <div class="content-wrapper content-wrapper--with-bg">
    <h1 class="page-title">Registrar Usuario</h1>
    <div class="container">

        <form class="well form-horizontal" action="" method="post" id="registration_form">
            <fieldset>

          
                <legend>Registra un Usuario</legend>
                <div class="form-group">
                    <label class="col-md-4 control-label">Name</label>
                    <div class="col-md-4 ">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input name="name" maxlength="30" placeholder="Name" class="form-control" type="text" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" >
                        </div>
                    </div>
                </div>
             
                <div class="form-group">
                    <label class="col-md-4 control-label">E-Mail</label>
                    <div class="col-md-4 ">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                            <input name="email" maxlength="30" placeholder="E-Mail" class="form-control" type="text">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label">Password</label>
                    <div class="col-md-4 ">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input name="password" maxlength="16" placeholder="**********" class="form-control" type="password">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label">Confirm Password</label>
                    <div class="col-md-4 ">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input name="confirmpassword" maxlength="16" placeholder="**********" class="form-control" type="password">
                        </div>
                    </div>
                </div>       
                      
                <div class="alert alert-success" role="alert" style=" display: none;" id="registration_success">Registration Successfully Completed.</div>
                

                <div class="form-group">
                    <label class="col-md-4 control-label"></label>
                    <div class="col-md-4">
                        <button type="submit" class="btn btn-primary login-button">Register</button>
                    </div>
                </div>

            </fieldset>
        </form>
    </div>
  </div>
</main>
<script src='//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js'></script><script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script><script src='https://use.fontawesome.com/2188c74ac9.js'></script><script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>
<script>
     $(document).ready(function () {
        $('#registration_form').bootstrapValidator({
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                name: {
                    validators: {
                        stringLength: {
                            min: 3,
                            message: 'Please enter atleast 3 characters'
                        },
                        notEmpty: {
                            message: 'Please enter  your name'
                        }
                    }
                },
                email: {
                    validators: {
                        notEmpty: {
                            message: 'Please enter your email address'
                        },
                        emailAddress: {
                            message: 'Please enter a valid email address'
                        }
                    }
                },
                password: {
                    validators: {
                        stringLength: {
                            min: 8,
                            message: 'Please enter at least 8 characters and no more than 16',
                            max: 16
                        },
                        identical: {
                            field: 'confirmpassword',
                            message: 'The password and the confirm password are not the same'
                        },
                        notEmpty: {
                            message: 'Please enter your password'
                        }

                    }
                },
                confirmpassword: {
                    validators: {
                        notEmpty: {
                            message: 'Please confirm your password'
                        },
                        identical: {
                            field: 'password',
                            message: 'The password and the confirm password are not the same'
                        }

                    }
                }

            },
            submitHandler: function(validator, form) {
                $('#registration_success').slideDown({ opacity: "show" }, "slow");                
                $.post(form.attr('action'),form.serialize(),
                    function() {
                        
                    },
                    'json');
            }
        });

    });
</script>
<script >"use strict";

var Dashboard = function () {
	var global = {
		tooltipOptions: {
			placement: "right"
		},
		menuClass: ".c-menu"
	};

	var menuChangeActive = function menuChangeActive(el) {
		var hasSubmenu = $(el).hasClass("has-submenu");
		$(global.menuClass + " .is-active").removeClass("is-active");
		$(el).addClass("is-active");

		// if (hasSubmenu) {
		// 	$(el).find("ul").slideDown();
		// }
	};

	var sidebarChangeWidth = function sidebarChangeWidth() {
		var $menuItemsTitle = $("li .menu-item__title");

		$("body").toggleClass("sidebar-is-reduced sidebar-is-expanded");
		$(".hamburger-toggle").toggleClass("is-opened");

		if ($("body").hasClass("sidebar-is-expanded")) {
			$('[data-toggle="tooltip"]').tooltip("destroy");
		} else {
			$('[data-toggle="tooltip"]').tooltip(global.tooltipOptions);
		}
	};

	return {
		init: function init() {
			$(".js-hamburger").on("click", sidebarChangeWidth);

			$(".js-menu li").on("click", function (e) {
				menuChangeActive(e.currentTarget);
			});

			$('[data-toggle="tooltip"]').tooltip(global.tooltipOptions);
		}
	};
}();

Dashboard.init();
//# sourceURL=pen.js
</script>
</body></html>