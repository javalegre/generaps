<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ProductoTipos Controller
 *
 * @property \App\Model\Table\ProductoTiposTable $ProductoTipos
 *
 * @method \App\Model\Entity\ProductoTipo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProductoTiposController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $productoTipos = $this->paginate($this->ProductoTipos);

        $this->set(compact('productoTipos'));
    }

    /**
     * View method
     *
     * @param string|null $id Producto Tipo id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $productoTipo = $this->ProductoTipos->get($id, [
            'contain' => ['Productos']
        ]);

        $this->set('productoTipo', $productoTipo);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $productoTipo = $this->ProductoTipos->newEntity();
        if ($this->request->is('post')) {
            $productoTipo = $this->ProductoTipos->patchEntity($productoTipo, $this->request->getData());
            if ($this->ProductoTipos->save($productoTipo)) {
                $this->Flash->success(__('The producto tipo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The producto tipo could not be saved. Please, try again.'));
        }
        $this->set(compact('productoTipo'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Producto Tipo id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $productoTipo = $this->ProductoTipos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $productoTipo = $this->ProductoTipos->patchEntity($productoTipo, $this->request->getData());
            if ($this->ProductoTipos->save($productoTipo)) {
                $this->Flash->success(__('The producto tipo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The producto tipo could not be saved. Please, try again.'));
        }
        $this->set(compact('productoTipo'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Producto Tipo id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $productoTipo = $this->ProductoTipos->get($id);
        if ($this->ProductoTipos->delete($productoTipo)) {
            $this->Flash->success(__('The producto tipo has been deleted.'));
        } else {
            $this->Flash->error(__('The producto tipo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
