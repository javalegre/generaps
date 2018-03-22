<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Campanias Controller
 *
 * @property \App\Model\Table\CampaniasTable $Campanias
 *
 * @method \App\Model\Entity\Campania[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CampaniasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $campanias = $this->paginate($this->Campanias);

        $this->set(compact('campanias'));
    }

    /**
     * View method
     *
     * @param string|null $id Campania id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $campania = $this->Campanias->get($id, [
            'contain' => ['Aplicaciones', 'Sectores', 'Tecnicas']
        ]);

        $this->set('campania', $campania);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $campania = $this->Campanias->newEntity();
        if ($this->request->is('post')) {
            $campania = $this->Campanias->patchEntity($campania, $this->request->getData());
            if ($this->Campanias->save($campania)) {
                $this->Flash->success(__('The campania has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The campania could not be saved. Please, try again.'));
        }
        $this->set(compact('campania'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Campania id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $campania = $this->Campanias->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $campania = $this->Campanias->patchEntity($campania, $this->request->getData());
            if ($this->Campanias->save($campania)) {
                $this->Flash->success(__('The campania has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The campania could not be saved. Please, try again.'));
        }
        $this->set(compact('campania'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Campania id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $campania = $this->Campanias->get($id);
        if ($this->Campanias->delete($campania)) {
            $this->Flash->success(__('The campania has been deleted.'));
        } else {
            $this->Flash->error(__('The campania could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
