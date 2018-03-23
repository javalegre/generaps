    <!-- top navigation -->
    <div class="top_nav">
        <div class="nav_menu">
            <nav class="" role="navigation">
               <div class="nav toggle">
                    <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                </div>                
                <ul class="nav navbar-nav navbar-right">
                    <li class="">
                        <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                            <?= $this->Html->image($this->request->session()->read('Auth.User.ruta_imagen'))?>
                            <?= $this->request->session()->read('Auth.User.username') ?>
                            <span class=" fa fa-angle-down"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-usermenu pull-right">
                            <li><?= $this->Html->link('<i class="fa fa-user"></i> Perfil', ['controller' => 'users', 'action' => 'edit', $this->request->session()->read('Auth.User.id')], ['escape'=>false]) ?></li>
                            <li>
                                <a href="<?= $this->Url->build(['controller'=>'users','action'=>'settins'])?>">
                                    <span class="badge bg-red pull-right">50%</span>
                                    <span><?= __('Settings')?></span>
                                </a>
                            </li>
                            <li><a href="<?= $this->Url->build(['controller'=>'faqs','action'=>'index'])?>"><?= __('Help')?></a></li>
                            <li><a href="<?= $this->Url->build(['controller'=>'users','action'=>'logout'])?>"><i class="fa fa-sign-out pull-right"></i> <?= __('Log Out')?></a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- /top navigation -->