
    <!-- START PAGE-CONTAINER -->
    <div class="login-wrapper ">
      <!-- START Login Background Pic Wrapper-->
      <div class="bg-pic">
        <!-- START Background Pic-->
        <img src="assets/img/introimage.jpg" data-src="assets/img/introimage.jpg" data-src-retina="assets/img/introimage.jpg" alt="" class="lazy">
        <!-- END Background Pic-->
        <!-- START Background Caption-->
        <div class="bg-caption pull-bottom sm-pull-bottom text-white p-l-20 m-b-20">
          <h2 class="semi-bold text-white">
					Seja bem vindo à revolução web da gestão de veículos</h2>
          <p class="small">
            as imagens utilizadas aqui são meramente ilustrativas. 2015 - Gestor Car
          </p>
        </div>
        <!-- END Background Caption-->
      </div>
      <!-- END Login Background Pic Wrapper-->
      <!-- START Login Right Container-->
      <div class="login-container bg-white">
        <div class="p-l-50 m-l-20 p-r-50 m-r-20 p-t-50 m-t-30 sm-p-l-15 sm-p-r-15 sm-p-t-40">
          <div class="logo">
          	<img src="assets/img/logo.png" alt="logo" data-src="assets/img/logo.png" data-src-retina="assets/img/logo_2x.png" width="233" height="87">
          </div>
          <p class="p-t-35" style="text-align:center;">Bem vindo(a) ao Gestor Car! <br/> Efetue login no sistema</p>
          
          
          <?php 
		  		
				$atributos = array('class' => 'p-t-15', 'id' => 'form-login');
		  		
		  		echo form_open('home/login',$atributos);
          ?>	
          		
          <!-- START Login Form -->
          <form id="form-login" class="p-t-15" role="form" action="index.html">
            <!-- START Form Control-->
            <div class="form-group form-group-default">
              <label>Login</label>
              <div class="controls">
                <?php  echo form_input('usuario','', 'class="form-control" placeholder="Usuário"'); ?>
              </div>
            </div>
            <!-- END Form Control-->
            <!-- START Form Control-->
            <div class="form-group form-group-default">
              <label>Senha</label>
              <div class="controls">
                <?php echo form_password('senha', '', 'class="form-control" placeholder="Senha"'); ?>
              </div>
            </div>
            <?php echo form_submit('btnSubmit', 'Efetuar Login', 'class="btn btn-primary btn-cons m-t-1"'); ?>
          </form>
          <!--END Login Form-->
          <?php
		  	echo form_close();
          ?>
        </div>
      </div>
      <!-- END Login Right Container-->
    </div>
    <!-- END PAGE CONTAINER -->