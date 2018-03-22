<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * AplicacionTipos Controller
 *
 * @property \App\Model\Table\AplicacionTiposTable $AplicacionTipos
 *
 * @method \App\Model\Entity\AplicacionTipo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AplicacionTiposController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $aplicacionTipos = $this->paginate($this->AplicacionTipos);

        $this->set(compact('aplicacionTipos'));
    }

    /**
     * View method
     *
     * @param string|null $id Aplicacion Tipo id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $aplicacionTipo = $this->AplicacionTipos->get($id, [
            'contain' => ['Aplicaciones']
        ]);

        $this->set('aplicacionTipo', $aplicacionTipo);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $aplicacionTipo = $this->AplicacionTipos->newEntity();
        if ($this->request->is('post')) {
            $aplicacionTipo = $this->AplicacionTipos->patchEntity($aplicacionTipo, $this->request->getData());
            if ($this->AplicacionTipos->save($aplicacionTipo)) {
                $this->Flash->success(__('The aplicacion tipo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The aplicacion tipo could not be saved. Please, try again.'));
        }
        $this->set(compact('aplicacionTipo'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Aplicacion Tipo id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $aplicacionTipo = $this->AplicacionTipos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $aplicacionTipo = $this->AplicacionTipos->patchEntity($aplicacionTipo, $this->request->getData());
            if ($this->AplicacionTipos->save($aplicacionTipo)) {
                $this->Flash->success(__('The aplicacion tipo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The aplicacion tipo could not be saved. Please, try again.'));
        }
        $this->set(compact('aplicacionTipo'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Aplicacion Tipo id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $aplicacionTipo = $this->AplicacionTipos->get($id);
        if ($this->AplicacionTipos->delete($aplicacionTipo)) {
            $this->Flash->success(__('The aplicacion tipo has been deleted.'));
        } else {
            $this->Flash->error(__('The aplicacion tipo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
