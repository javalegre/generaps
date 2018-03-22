    <!-- menu profile quick info -->
    <div class="profile">
        <div class="profile_pic">
            <?php echo $this->Html->image($this->request->session()->read('Auth.User.ruta_imagen'),['class'=>'img-circle profile_img'])?>
        </div>
        <div class="profile_info">
            <span>Bienvenido,</span>
            <h2> <?= $this->request->session()->read('Auth.User.nombre') ?></h2>
        </div>
        <span><br></span>

    </div>
    
    <!-- /menu profile quick info -->
