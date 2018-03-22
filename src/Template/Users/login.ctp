
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
  