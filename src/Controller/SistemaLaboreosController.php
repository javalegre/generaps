<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * SistemaLaboreos Controller
 *
 * @property \App\Model\Table\SistemaLaboreosTable $SistemaLaboreos
 *
 * @method \App\Model\Entity\SistemaLaboreo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SistemaLaboreosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $sistemaLaboreos = $this->paginate($this->SistemaLaboreos);

        $this->set(compact('sistemaLaboreos'));
    }

    /**
     * View method
     *
     * @param string|null $id Sistema Laboreo id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $sistemaLaboreo = $this->SistemaLaboreos->get($id, [
            'contain' => ['Tecnicas']
        ]);

        $this->set('sistemaLaboreo', $sistemaLaboreo);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $sistemaLaboreo = $this->SistemaLaboreos->newEntity();
        if ($this->request->is('post')) {
            $sistemaLaboreo = $this->SistemaLaboreos->patchEntity($sistemaLaboreo, $this->request->getData());
            if ($this->SistemaLaboreos->save($sistemaLaboreo)) {
                $this->Flash->success(__('The sistema laboreo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sistema laboreo could not be saved. Please, try again.'));
        }
        $this->set(compact('sistemaLaboreo'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Sistema Laboreo id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $sistemaLaboreo = $this->SistemaLaboreos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sistemaLaboreo = $this->SistemaLaboreos->patchEntity($sistemaLaboreo, $this->request->getData());
            if ($this->SistemaLaboreos->save($sistemaLaboreo)) {
                $this->Flash->success(__('The sistema laboreo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sistema laboreo could not be saved. Please, try again.'));
        }
        $this->set(compact('sistemaLaboreo'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Sistema Laboreo id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $sistemaLaboreo = $this->SistemaLaboreos->get($id);
        if ($this->SistemaLaboreos->delete($sistemaLaboreo)) {
            $this->Flash->success(__('The sistema laboreo has been deleted.'));
        } else {
            $this->Flash->error(__('The sistema laboreo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
