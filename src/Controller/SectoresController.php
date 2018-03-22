<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Sectores Controller
 *
 * @property \App\Model\Table\SectoresTable $Sectores
 *
 * @method \App\Model\Entity\Sectore[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SectoresController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Establecimientos', 'Campanias']
        ];
        $sectores = $this->paginate($this->Sectores);

        $this->set(compact('sectores'));
    }

    /**
     * View method
     *
     * @param string|null $id Sectore id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $sectore = $this->Sectores->get($id, [
            'contain' => ['Establecimientos', 'Campanias']
        ]);

        $this->set('sectore', $sectore);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $sectore = $this->Sectores->newEntity();
        if ($this->request->is('post')) {
            $sectore = $this->Sectores->patchEntity($sectore, $this->request->getData());
            if ($this->Sectores->save($sectore)) {
                $this->Flash->success(__('The sectore has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sectore could not be saved. Please, try again.'));
        }
        $establecimientos = $this->Sectores->Establecimientos->find('list', ['limit' => 200]);
        $campanias = $this->Sectores->Campanias->find('list', ['limit' => 200]);
        $this->set(compact('sectore', 'establecimientos', 'campanias'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Sectore id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $sectore = $this->Sectores->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sectore = $this->Sectores->patchEntity($sectore, $this->request->getData());
            if ($this->Sectores->save($sectore)) {
                $this->Flash->success(__('The sectore has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sectore could not be saved. Please, try again.'));
        }
        $establecimientos = $this->Sectores->Establecimientos->find('list', ['limit' => 200]);
        $campanias = $this->Sectores->Campanias->find('list', ['limit' => 200]);
        $this->set(compact('sectore', 'establecimientos', 'campanias'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Sectore id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $sectore = $this->Sectores->get($id);
        if ($this->Sectores->delete($sectore)) {
            $this->Flash->success(__('The sectore has been deleted.'));
        } else {
            $this->Flash->error(__('The sectore could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
