<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * AplicacionDetalles Controller
 *
 * @property \App\Model\Table\AplicacionDetallesTable $AplicacionDetalles
 *
 * @method \App\Model\Entity\AplicacionDetalle[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AplicacionDetallesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Aplicaciones', 'Productos']
        ];
        $aplicacionDetalles = $this->paginate($this->AplicacionDetalles);

        $this->set(compact('aplicacionDetalles'));
    }

    /**
     * View method
     *
     * @param string|null $id Aplicacion Detalle id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $aplicacionDetalle = $this->AplicacionDetalles->get($id, [
            'contain' => ['Aplicaciones', 'Productos']
        ]);

        $this->set('aplicacionDetalle', $aplicacionDetalle);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $aplicacionDetalle = $this->AplicacionDetalles->newEntity();
        if ($this->request->is('post')) {
            $aplicacionDetalle = $this->AplicacionDetalles->patchEntity($aplicacionDetalle, $this->request->getData());
            if ($this->AplicacionDetalles->save($aplicacionDetalle)) {
                $this->Flash->success(__('The aplicacion detalle has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The aplicacion detalle could not be saved. Please, try again.'));
        }
        $aplicaciones = $this->AplicacionDetalles->Aplicaciones->find('list', ['limit' => 200]);
        $productos = $this->AplicacionDetalles->Productos->find('list', ['limit' => 200]);
        $this->set(compact('aplicacionDetalle', 'aplicaciones', 'productos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Aplicacion Detalle id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $aplicacionDetalle = $this->AplicacionDetalles->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $aplicacionDetalle = $this->AplicacionDetalles->patchEntity($aplicacionDetalle, $this->request->getData());
            if ($this->AplicacionDetalles->save($aplicacionDetalle)) {
                $this->Flash->success(__('The aplicacion detalle has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The aplicacion detalle could not be saved. Please, try again.'));
        }
        $aplicaciones = $this->AplicacionDetalles->Aplicaciones->find('list', ['limit' => 200]);
        $productos = $this->AplicacionDetalles->Productos->find('list', ['limit' => 200]);
        $this->set(compact('aplicacionDetalle', 'aplicaciones', 'productos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Aplicacion Detalle id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $aplicacionDetalle = $this->AplicacionDetalles->get($id);
        if ($this->AplicacionDetalles->delete($aplicacionDetalle)) {
            $this->Flash->success(__('The aplicacion detalle has been deleted.'));
        } else {
            $this->Flash->error(__('The aplicacion detalle could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
