<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TecnicaResponsables Controller
 *
 * @property \App\Model\Table\TecnicaResponsablesTable $TecnicaResponsables
 *
 * @method \App\Model\Entity\TecnicaResponsable[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TecnicaResponsablesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Tecnicas']
        ];
        $tecnicaResponsables = $this->paginate($this->TecnicaResponsables);

        $this->set(compact('tecnicaResponsables'));
    }

    /**
     * View method
     *
     * @param string|null $id Tecnica Responsable id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tecnicaResponsable = $this->TecnicaResponsables->get($id, [
            'contain' => ['Users', 'Tecnicas']
        ]);

        $this->set('tecnicaResponsable', $tecnicaResponsable);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tecnicaResponsable = $this->TecnicaResponsables->newEntity();
        if ($this->request->is('post')) {
            $tecnicaResponsable = $this->TecnicaResponsables->patchEntity($tecnicaResponsable, $this->request->getData());
            if ($this->TecnicaResponsables->save($tecnicaResponsable)) {
                $this->Flash->success(__('The tecnica responsable has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tecnica responsable could not be saved. Please, try again.'));
        }
        $users = $this->TecnicaResponsables->Users->find('list', ['limit' => 200]);
        $tecnicas = $this->TecnicaResponsables->Tecnicas->find('list', ['limit' => 200]);
        $this->set(compact('tecnicaResponsable', 'users', 'tecnicas'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Tecnica Responsable id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tecnicaResponsable = $this->TecnicaResponsables->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tecnicaResponsable = $this->TecnicaResponsables->patchEntity($tecnicaResponsable, $this->request->getData());
            if ($this->TecnicaResponsables->save($tecnicaResponsable)) {
                $this->Flash->success(__('The tecnica responsable has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tecnica responsable could not be saved. Please, try again.'));
        }
        $users = $this->TecnicaResponsables->Users->find('list', ['limit' => 200]);
        $tecnicas = $this->TecnicaResponsables->Tecnicas->find('list', ['limit' => 200]);
        $this->set(compact('tecnicaResponsable', 'users', 'tecnicas'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Tecnica Responsable id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tecnicaResponsable = $this->TecnicaResponsables->get($id);
        if ($this->TecnicaResponsables->delete($tecnicaResponsable)) {
            $this->Flash->success(__('The tecnica responsable has been deleted.'));
        } else {
            $this->Flash->error(__('The tecnica responsable could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
