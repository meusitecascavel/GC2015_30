<div class="page-content-wrapper">
	<div class="content">
    <!-- START CONTAINER FLUID -->
          <div class="container-fluid container-fixed-lg">
            <div class="row">
              
              <div class="col-md-12">
                <!-- START PANEL -->
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <div class="panel-title">
                     	Cadastrar Empresa
                    </div>
                  </div>
                  <div class="panel-body">
                    
                    
                    <?php
					
					$attributes = array('class' => 'form-horizontal', 'id' => 'formcadastro');
					echo form_open_multipart('empresa/adicionar', $attributes);		
						
						echo "<span class='validacoes'>" . validation_errors() . "</span>";
	

					?>
                    
                    <form role="form">
                      <div class="form-group">
                        <label>Nome da Empresa</label>
                        <?php
						$atributos = array(
							"name"	=>	"nome",
							"id"	=>	"nome",
							"value"	=>	set_value('nome')
						);
						echo form_input($atributos, '','class="form-control"');
						
						?>
                      </div>
                      <div class="form-group">
                        <label>Domínio</label>
                         <?php
						$atributos = array(
							"name"	=>	"dominio",
							"id"	=>	"dominio",
							"value"	=>	set_value('dominio')
						);
						echo form_input($atributos, '','class="form-control"');
						
						?>
                      </div>
                      <div class="form-group">
                        <label>Telefone</label>
                        <span class="help">preencha com o DDD</span>
                         <?php
						$atributos = array(
							"name"	=>	"telefone",
							"id"	=>	"telefone",
							"value"	=>	set_value('telefone')
						);
						echo form_input($atributos, '','class="form-control"');
						
						?>
                      </div>
                      
                      <div class="form-group">
                        <label>Endereço</label>
                         <?php
						$atributos = array(
							"name"	=>	"endereco",
							"id"	=>	"endereco",
							"value"	=>	set_value('endereco')
						);
						echo form_input($atributos, '','class="form-control"');
						
						?>
                      </div>
                      
                      <div class="form-group">
                        <label>Cidade</label>
                         <?php
						$atributos = array(
							"name"	=>	"cidade",
							"id"	=>	"cidade",
							"value"	=>	set_value('cidade')
						);
						echo form_input($atributos, '','class="form-control"');
						
						?>
                      </div>
                      
                      <div class="form-group">
                        <label>UF</label>
                         <?php
						$atributos = array(
							"name"	=>	"uf",
							"id"	=>	"uf",
							"value"	=>	set_value('uf')
						);
						echo form_input($atributos, '','class="form-control"');
						
						?>
                      </div>
                      
                      <div class="form-group">
                        <label>CNPJ</label>
                         <?php
						$atributos = array(
							"name"	=>	"cnpj",
							"id"	=>	"cnpj",
							"value"	=>	set_value('cnpj')
						);
						echo form_input($atributos, '','class="form-control"');
						
						?>
                      </div>
                      
                      <div class="form-group">
                        <label>Email - Gestorcar</label>
                         <?php
						$atributos = array(
							"name"	=>	"email_gestorcar",
							"id"	=>	"email_gestorcar",
							"value"	=>	set_value('email_gestorcar')
						);
						echo form_input($atributos, '','class="form-control"');
						
						?>
                      </div>
                      
                      <div class="form-group">
                        <label>Email - Proposta</label>
                         <?php
						$atributos = array(
							"name"	=>	"email_proposta",
							"id"	=>	"email_proposta",
							"value"	=>	set_value('email_proposta')
						);
						echo form_input($atributos, '','class="form-control"');
						
						?>
                      </div>
                      
                      <div class="form-group">
                      	<label>Módulo Repasse</label>
                      	<input type="checkbox" data-init-plugin="switchery" checked=""  value="mod_repasse" name="mod_repasse" id="mod_repasse"/>
                        
                        <label>Site</label>
                      	<input type="checkbox" data-init-plugin="switchery" checked=""  value="site" name="site" id="site"/>
                      </div>
                    <?php
					echo form_submit("btnSubmit","Adicionar", 'class="btn btn-primary"');
					echo form_close();
					?>
                  </div>
                </div>
                <!-- END PANEL -->
              </div>
            </div>
          </div>
          <!-- END CONTAINER FLUID -->
     </div>
  </div>