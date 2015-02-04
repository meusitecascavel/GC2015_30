<?php

	//Definir o usuário da sessão
	$login = strtoupper($this->session->userdata('nome'));

	//Buscar a empresa relacionada
	$this->db->where('login', $login);

	$query = $this->db->get('usuarios')->result();

	#$empresa = $query[0]->empresa;

	$empresa = "Meu Site Cascavel";

?>

<!-- BEGIN SIDEBPANEL-->

    <nav class="page-sidebar" data-pages="sidebar">

     

      <!-- BEGIN SIDEBAR MENU HEADER-->

      <div class="sidebar-header">

      	<?php

			$image_properties = array(

			  'src' => '/assets/img/logo_branco.png',

			  'alt' => 'Gestor Car é o melhor sistema para revendas de veículos',

			  'class' => 'brand',

			  'width' => '150',

			  'height' => '56',

			  'title' => 'Gestor Car',

			  'rel' => 'lightbox',

			);

			

			echo img($image_properties);

		?>

       

        <div class="sidebar-header-controls">

          <button type="button" class="btn btn-link visible-lg-inline" data-toggle-pin="sidebar"><i class="fa fs-12"></i>

          </button>

        </div>

      </div>

      <!-- END SIDEBAR MENU HEADER-->

      <!-- START SIDEBAR MENU -->

      <div class="sidebar-menu">

        <!-- BEGIN SIDEBAR MENU ITEMS-->

        <ul class="menu-items">

        	<li class="m-t-30 open">

            <a href="/index.php/dashboard" class="detailed">

              <span class="title">Dashboard</span>

              <span class="details">Voltar à página inicial</span>

            </a>

            <span class="icon-thumbnail bg-success"><i class="pg-home"></i></span>

          </li>

          

          <li class="">

            <a href="javascript:;">

              <span class="title">Usuários</span>

              <span class="arrow"></span>

            </a>

            <span class="icon-thumbnail"><i class="pg-folder_alt"></i></span>

            <ul class="sub-menu">

              <li class="">

                <a href="#">Listagem</a>

                <span class="icon-thumbnail">LI</span>

              </li>

              <li class="">

                <a href="#">Cadastrar</a>

                <span class="icon-thumbnail">CA</span>

              </li>
              
              <li class="">

                <a href="#">Relatórios</a>

                <span class="icon-thumbnail">RE</span>

              </li>
             

            </ul>

          </li>

          <li class="">

            <a href="javascript:;">

              <span class="title">Grupos</span>

              <span class="arrow

             "></span>

            </a>

            <span class="icon-thumbnail"><i class="pg-folder_alt"></i></span>

            <ul class="sub-menu">

              <li class="">

                <a href="#">Listagem</a>

                <span class="icon-thumbnail">LI</span>

              </li>

              <li class="">

                <a href="#">Cadastrar</a>

                <span class="icon-thumbnail">CA</span>

              </li>
               <li class="">

                <a href="#">Grupo x Empresa</a>

                <span class="icon-thumbnail">GE</span>

              </li>
              
              

            </ul>

          </li>

          <li class="">

            <a href="javascript:;">

              <span class="title">Empresas</span>

              <span class="arrow

             "></span>

            </a>

            <span class="icon-thumbnail"><i class="pg-folder_alt"></i></span>

            <ul class="sub-menu">

              <li class="">

                <a href="/index.php/empresa">Listagem</a>

                <span class="icon-thumbnail">LE</span>

              </li>

              <li class="">

                <a href="/index.php/empresa/adicionar">Cadastrar</a>

                <span class="icon-thumbnail">CE</span>

              </li>

              <li class="">

                <a href="/index.php/empresa/relatorios">Relatórios</a>

                <span class="icon-thumbnail">RE</span>

              </li>

            </ul>

          </li>

          

            <li class="">

            <a href="javascript:;">

              <span class="title">Portais</span>

              <span class="arrow

             "></span>

            </a>

            <span class="icon-thumbnail"><i class="pg-laptop"></i></span>

            <ul class="sub-menu">

              <li class="">

                <a href="#">Listagem</a>

                <span class="icon-thumbnail">LE</span>

              </li>

              <li class="">

                <a href="#">Cadastrar</a>

                <span class="icon-thumbnail">CV</span>

              </li>

              

              <li class="">

                <a href="#">Portais x Empresa</a>

                <span class="icon-thumbnail">PE</span>

              </li>

            </ul>

          </li>

          

          

          
          
          <li class="">

            <a href="javascript:;">

              <span class="title">Cidades</span>

              <span class="arrow

             "></span>

            </a>

            <span class="icon-thumbnail"><i class="pg-laptop"></i></span>

            <ul class="sub-menu">

              <li class="">

                <a href="#">Estados</a>

                <span class="icon-thumbnail">NF</span>

              </li>

              <li class="">

                <a href="#">Cidades</a>

                <span class="icon-thumbnail">CV</span>

              </li>

              <li class="">

                <a href="#">DDD</a>

                <span class="icon-thumbnail">CB</span>

              </li>

            </ul>

          </li>
          
          <li class="">

            <a href="javascript:;">

              <span class="title">Modelos</span>

              <span class="arrow

             "></span>

            </a>

            <span class="icon-thumbnail"><i class="pg-folder_alt"></i></span>

            <ul class="sub-menu">

              <li class="">

                <a href="#">Listar Marcas</a>

                <span class="icon-thumbnail">LM</span>

              </li>

              <li class="">

                <a href="#">Listar Modelos</a>

                <span class="icon-thumbnail">LM</span>

              </li>

              <li class="">

                <a href="#">Listar Versões</a>

                <span class="icon-thumbnail">LV</span>

              </li>
              
              <li class="">

                <a href="#">Cad. Marcas</a>

                <span class="icon-thumbnail">LM</span>

              </li>

              <li class="">

                <a href="#">Cad. Modelos</a>

                <span class="icon-thumbnail">LM</span>

              </li>

              <li class="">

                <a href="#">Cad. Versões</a>

                <span class="icon-thumbnail">LV</span>

              </li>

            </ul>

          </li>

          

          <li class="">

            <a href="javascript:;">

              <span class="title">GestorCar</span>

              <span class="arrow

             "></span>

            </a>

            <span class="icon-thumbnail"><i class="pg-laptop"></i></span>

            <ul class="sub-menu">

              <li class="">

                <a href="#">Notificações</a>

                <span class="icon-thumbnail">NF</span>

              </li>

              <li class="">

                <a href="#">Cores</a>

                <span class="icon-thumbnail">CV</span>

              </li>

              <li class="">

                <a href="#">Combustíveis</a>

                <span class="icon-thumbnail">CB</span>

              </li>

            </ul>

          </li>

          <li class="">

            <a href="javascript:;">

              <span class="title">Estoque</span>

              <span class="arrow

             "></span>

            </a>

            <span class="icon-thumbnail"><i class="pg-laptop"></i></span>

            <ul class="sub-menu">

              <li class="">

                <a href="#">Listagem</a>

                <span class="icon-thumbnail">LE</span>

              </li>
              
              <li class="">

                <a href="#">Repasses</a>

                <span class="icon-thumbnail">RV</span>

              </li>

              <li class="">

                <a href="#">Cadastrar</a>

                <span class="icon-thumbnail">CV</span>

              </li>

              <li class="">

                <a href="#">Relatórios</a>

                <span class="icon-thumbnail">RV</span>

              </li>

            </ul>

          </li>

          

        </ul>

        <div class="clearfix"></div>

      </div>

      <!-- END SIDEBAR MENU -->

    </nav>

    <!-- END SIDEBAR -->

    <!-- END SIDEBPANEL-->

<div class="page-container">

      <!-- START HEADER -->

      <div class="header ">

        <!-- START MOBILE CONTROLS -->

        <!-- LEFT SIDE -->

        <div class="pull-left full-height visible-sm visible-xs">

          <!-- START ACTION BAR -->

          <div class="sm-action-bar">

            <a href="#" class="btn-link toggle-sidebar" data-toggle="sidebar">

              <span class="icon-set menu-hambuger"></span>

            </a>

          </div>

          <!-- END ACTION BAR -->

        </div>

        <!-- RIGHT SIDE -->

        <div class="pull-right full-height visible-sm visible-xs">

          <!-- START ACTION BAR -->

          

          <!-- END ACTION BAR -->

        </div>

        <!-- END MOBILE CONTROLS -->

        <div class=" pull-left sm-table">

          <div class="header-inner">

            <div class="brand inline">

            	<?php

					$image_properties = array(

					  'src' => '/assets/img/logo.png',

					  'alt' => 'Gestor Car é o melhor sistema para revendas de veículos',

					  'class' => '',

					  'width' => '150',

					  'height' => '56',

					  'title' => 'Gestor Car',

					  'rel' => 'lightbox',

					);

					

					echo img($image_properties);

				

				?>

              

            </div>

            <!-- START NOTIFICATION LIST -->

            <ul class="notification-list no-margin hidden-sm hidden-xs b-grey b-l b-r no-style p-l-30 p-r-20">

              <li class="p-r-15 inline">

                <div class="dropdown">

                  <a href="javascript:;" id="notification-center" class="icon-set globe-fill" data-toggle="dropdown">

                    <span class="bubble"></span>

                  </a>

                  <!-- START Notification Dropdown -->

                  <div class="dropdown-menu notification-toggle" role="menu" aria-labelledby="notification-center">

                    <!-- START Notification -->

                    <div class="notification-panel">

                      <!-- START Notification Body-->

                      <div class="notification-body scrollable">

                        <!-- START Notification Item-->

                        <div class="notification-item unread clearfix">

                          <!-- START Notification Item-->

                          <div class="heading open">

                            <a href="#" class="text-complete">

                              <i class="pg-map fs-16 m-r-10"></i>

                              <span class="bold">Uso de notificações</span>

                              <span class="fs-12 m-l-10">Ysler Jr.</span>

                            </a>

                            <div class="pull-right">

                              <div class="thumbnail-wrapper d16 circular inline m-t-15 m-r-10 toggle-more-details">

                                <div><i class="fa fa-angle-left"></i>

                                </div>

                              </div>

                              <span class=" time">poucos segundos atrás</span>

                            </div>

                            <div class="more-details">

                              <div class="more-details-inner">

                                <h5 class="semi-bold fs-16">“Aê! Todo mundo é muito bem vindo ao protótipo do gestorcar 3.0.”</h5>

                                

                              </div>

                            </div>

                          </div>

                          <!-- END Notification Item-->

                          

                        </div>

                        

                      <!-- START Notification Footer-->

                      <div class="notification-footer text-center">

                        <a href="#" class="">Ler todas as notificações</a>

                        <a data-toggle="refresh" class="portlet-refresh text-black pull-right" href="#">

                          <i class="pg-refresh_new"></i>

                        </a>

                      </div>

                      <!-- START Notification Footer-->

                    </div>

                    <!-- END Notification -->

                  </div>

                  <!-- END Notification Dropdown -->

                </div>

              </li>

              <li class="p-r-15 inline">

                <a href="#" class="icon-set clip "></a>

              </li>

              <li class="p-r-15 inline">

                <a href="#" class="icon-set grid-box"></a>

              </li>

            </ul>

            <!-- END NOTIFICATIONS LIST -->

            </div>

        </div>

        

        <div class=" pull-right">

          <!-- START User Info-->

          <div class="visible-lg visible-md m-t-10">

            <div class="pull-left p-r-10 p-t-10 fs-16 font-heading">

              Seja Bem Vindo: <?php echo $login; echo " | "; echo anchor('home/logout','Sair', 'title = "Efetuar Logout"'); ?>

            </div>

            

          </div>

          <!-- END User Info-->

        </div>

      </div>

      <!-- END HEADER -->