  		<div class="login_wrapper">
                    <div class="animate form login_form">
                        <section class="login_content">
                            <div class="login-box">
                                <div class="card card-login mx-auto mt-5">
                                    <div class="card-header">ADECO - Control de Acceso</div>
                                        <div class="card-body">
                                            <?= $this->Form->create() ?>
                                            <fieldset>
                                                <div class="form-group">
                                                    <?= $this->Form->control('username',['label'=>'Nombre de usuario', 'placeholder'=>'Ingrese su usuario']) ?>
                                                </div>
                                                <div class="form-group">
                                                    <?= $this->Form->control('password',['label'=>'Contraseña', 'type'=>'password', 'placeholder'=>'Ingrese su contraseña']) ?>
                                                </div>
                                            </fieldset>
                                            <?= $this->Form->button('Ingresar al sistema',['class'=>'btn btn-dark btn-md btn-block']) ?>
                                            <?= $this->Form->end() ?>
                                        </div>
                                    <div><?= $this->Flash->render('auth') ?></div>
                                </div>
                            </div>
                        </section>
                    </div>
		</div>