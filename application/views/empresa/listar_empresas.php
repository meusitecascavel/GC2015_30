<!-- START PAGE CONTENT WRAPPER -->
      <div class="page-content-wrapper">
        <!-- START PAGE CONTENT -->
        <div class="content sm-gutter">
         
         
         
         
         
         
         <!-- START CONTAINER FLUID -->
          <div class="container-fluid container-fixed-lg bg-white">
            <!-- START PANEL -->
            <div class="panel panel-transparent">
              <div class="panel-heading">
                <div class="panel-title">Empresas Cadastradas
                </div>
                <div class="export-options-container pull-right"></div>
                <div class="clearfix"></div>
              </div>
              <div class="panel-body">
               	<?php
		 		
				 	$array_empresas = array();
					foreach($empresas as $empresa){
						
			
						$array_empresas[] = array(
							
							$empresa->id,
							
							'<img src="'.$empresa->logo.'" width="80" style="height:59px"/>',
							
							$empresa->nome,
							$empresa->dominio,
							$empresa->telefone,
							$empresa->publicado,
							
							'<a href="empresa/alterar/'.$empresa->id.'">
								<button class="btn btn-success" type="button">
									<i class="fa fa-pencil"></i>
								</button>
							</a>',
							
							'<a href="empresa/excluir/'.$empresa->id.'">
								<button class="btn btn-success" type="button">
									<i class="fa fa-trash-o"></i>
								</button>
							</a>'
						);
						
					}
					
					
					
					$this->table->set_heading('#','Logo','Razão Social','Domínio','Telefone', 'Publicado', '','');
					
					$tmpl = array ( 'table_open'  => '<table class="table table-striped">' );

					$this->table->set_template($tmpl); 
					echo $this->table->generate($array_empresas, 'class="table table-striped"');
					
				?>
               
               
                
              </div>
            </div>
            <!-- END PANEL -->
          </div>
          <!-- END CONTAINER FLUID -->
         
         
        </div>
        <!-- END PAGE CONTENT -->
        <!-- START COPYRIGHT -->
        <!-- START CONTAINER FLUID -->
        <div class="container-fluid container-fixed-lg footer">
          <div class="copyright sm-text-center">
            <p class="small no-margin pull-left sm-pull-reset">
              <span class="hint-text">Desenvolvido em 2015</span>
              <span class="font-montserrat">Gestor Car</span>.
              <span class="hint-text">Todos os direitos reservados. </span>
            </p>
            <div class="clearfix"></div>
          </div>
        </div>
        <!-- END COPYRIGHT -->
      </div>
      <!-- END PAGE CONTENT WRAPPER -->
    </div>
    <!-- END PAGE CONTAINER -->
   