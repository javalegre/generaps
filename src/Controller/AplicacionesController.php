<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Aplicaciones Controller
 *
 * @property \App\Model\Table\AplicacionesTable $Aplicaciones
 *
 * @method \App\Model\Entity\Aplicacione[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AplicacionesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Campanias', 'Lotes', 'AplicacionTipos']
        ];
        $aplicaciones = $this->paginate($this->Aplicaciones);

        $this->set(compact('aplicaciones'));
    }

    /**
     * View method
     *
     * @param string|null $id Aplicacione id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $aplicacione = $this->Aplicaciones->get($id, [
            'contain' => ['Campanias', 'Lotes', 'AplicacionTipos', 'AplicacionDetalles']
        ]);

        $this->set('aplicacione', $aplicacione);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $aplicacione = $this->Aplicaciones->newEntity();
        if ($this->request->is('post')) {
            $aplicacione = $this->Aplicaciones->patchEntity($aplicacione, $this->request->getData());
            if ($this->Aplicaciones->save($aplicacione)) {
                $this->Flash->success(__('The aplicacione has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The aplicacione could not be saved. Please, try again.'));
        }
        $campanias = $this->Aplicaciones->Campanias->find('list', ['limit' => 200]);
        $lotes = $this->Aplicaciones->Lotes->find('list', ['limit' => 200]);
        $aplicacionTipos = $this->Aplicaciones->AplicacionTipos->find('list', ['limit' => 200]);
        $this->set(compact('aplicacione', 'campanias', 'lotes', 'aplicacionTipos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Aplicacione id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $aplicacione = $this->Aplicaciones->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $aplicacione = $this->Aplicaciones->patchEntity($aplicacione, $this->request->getData());
            if ($this->Aplicaciones->save($aplicacione)) {
                $this->Flash->success(__('The aplicacione has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The aplicacione could not be saved. Please, try again.'));
        }
        $campanias = $this->Aplicaciones->Campanias->find('list', ['limit' => 200]);
        $lotes = $this->Aplicaciones->Lotes->find('list', ['limit' => 200]);
        $aplicacionTipos = $this->Aplicaciones->AplicacionTipos->find('list', ['limit' => 200]);
        $this->set(compact('aplicacione', 'campanias', 'lotes', 'aplicacionTipos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Aplicacione id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $aplicacione = $this->Aplicaciones->get($id);
        if ($this->Aplicaciones->delete($aplicacione)) {
            $this->Flash->success(__('The aplicacione has been deleted.'));
        } else {
            $this->Flash->error(__('The aplicacione could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
