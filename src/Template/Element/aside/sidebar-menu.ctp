    <!-- sidebar menu -->
    <!--
// < ? php
//     if ($this->Acl->check(['controller' => 'Campanias', 'action' => '*'])) {
//         echo 'Menú a Campañas';
//     } else {
//         echo 'No está autorizado a ingresar a Campañas';
//     }  ? > -->

 <!-- < ? = $this->Acl->link('Link title', ['controller' =>'origenes', 'action' => 'add'], ['escape' => true]) ? > -->
    <div class="">
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <h3>Sistemas</h3>
                <ul class="nav side-menu">
                    <li><a><i class="fa fa-truck"></i>M.I.P.<span class="fa fa-chevron-down"></span></a>
                        <!--
                        <ul class="nav child_menu">
                            <li>< ?= $this->Html->link('<i class="fa fa-file-text-o"></i> Nuevo Despacho',['controller' => 'origenes', 'action' => 'add', '_full' => true], ['escape'=>false]) ?></li>
                            <li>< ?= $this->Html->link('<i class="fa fa-list"></i> Listar',['controller' => 'origenes', 'action' => 'index', '_full' => true], ['escape'=>false]) ?> </li>
                        </ul>
                        -->
                    </li>
                    <li><a><i class="fa fa-truck fa-flip-horizontal"></i>Termometría<span class="fa fa-chevron-down"></span></a>
                        <!--
                        <ul class="nav child_menu">
                            <li>< ?= $this->Html->link('<i class="fa fa-file-text-o"></i> Recibir Camión',['controller' => 'recepciones', 'action' => 'add', '_full' => true], ['escape'=>false]) ?> </li>
                            <li>< ?= $this->Html->link('<i class="fa fa-list"></i> Listar',['controller' => 'recepciones', 'action' => 'index', '_full' => true], ['escape'=>false]) ?></li>
                        </ul>
                        -->
                    </li>
                    <!--
                    <li><a><i class="fa fa-table"></i> Descargas <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li>< ?= $this->Html->link('<i class="fa fa-file-text-o"></i> Realizar descarga',['controller' => 'descargas', 'action' => 'add', '_full' => true], ['escape'=>false]) ?></li>
                            <li>< ?= $this->Html->link('<i class="fa fa-download"></i> Vaciar Fosa',['controller' => 'fosasvaciados', 'action' => 'add', '_full' => true], ['escape'=>false]) ?></li>
                            <li>< ?= $this->Html->link('<i class="fa fa-list"></i> Listar descargas',['controller' => 'descargas', 'action' => 'index', '_full' => true], ['escape'=>false]) ?></li>
                            <li>< ?= $this->Html->link('<i class="fa fa-list"></i> Listar Vaciados de Fosas',['controller' => 'fosasvaciados', 'action' => 'index', '_full' => true], ['escape'=>false]) ?></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-bar-chart-o"></i> Secado <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li>< ?= $this->Html->link('<i class="fa fa-file-text-o"></i> Control Pre Limpieza',['controller' => 'prelimpiezas', 'action' => 'add', '_full' => true], ['escape'=>false]) ?></li>
                            <li>< ?= $this->Html->link('<i class="fa fa-file-text-o"></i> Registro Control de Secado',['controller' => 'secadoras_control_secados', 'action' => 'add', '_full' => true], ['escape'=>false]) ?></li>
                            <li>< ?= $this->Html->link('<i class="fa fa-list"></i> Listar Controles Pre Limpiezas',['controller' => 'prelimpiezas', 'action' => 'index', '_full' => true], ['escape'=>false]) ?></li>
                        </ul>
                    </li> 
                    -->
                </ul>
            </div>
        </div>
    </div>
    <!--holaif ($this->AclManager->Acl->check(['Users' => ['id' => $this->request->session()->read('Auth.User.id')]], $action)) {-->