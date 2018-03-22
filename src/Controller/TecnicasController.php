<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Tecnicas Controller
 *
 * @property \App\Model\Table\TecnicasTable $Tecnicas
 *
 * @method \App\Model\Entity\Tecnica[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TecnicasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Campanias', 'Lotes', 'SistemaLaboreos', 'ArrozVariedades', 'ArrozTipoCurados']
        ];
        $tecnicas = $this->paginate($this->Tecnicas);

        $this->set(compact('tecnicas'));
    }

    /**
     * View method
     *
     * @param string|null $id Tecnica id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tecnica = $this->Tecnicas->get($id, [
            'contain' => ['Campanias', 'Lotes', 'SistemaLaboreos', 'ArrozVariedades', 'ArrozTipoCurados', 'TecnicaResponsables']
        ]);

        $this->set('tecnica', $tecnica);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tecnica = $this->Tecnicas->newEntity();
        if ($this->request->is('post')) {
            $tecnica = $this->Tecnicas->patchEntity($tecnica, $this->request->getData());
            if ($this->Tecnicas->save($tecnica)) {
                $this->Flash->success(__('The tecnica has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tecnica could not be saved. Please, try again.'));
        }
        $campanias = $this->Tecnicas->Campanias->find('list', ['limit' => 200]);
        $lotes = $this->Tecnicas->Lotes->find('list', ['limit' => 200]);
        $sistemaLaboreos = $this->Tecnicas->SistemaLaboreos->find('list', ['limit' => 200]);
        $arrozVariedades = $this->Tecnicas->ArrozVariedades->find('list', ['limit' => 200]);
        $arrozTipoCurados = $this->Tecnicas->ArrozTipoCurados->find('list', ['limit' => 200]);
        $this->set(compact('tecnica', 'campanias', 'lotes', 'sistemaLaboreos', 'arrozVariedades', 'arrozTipoCurados'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Tecnica id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tecnica = $this->Tecnicas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tecnica = $this->Tecnicas->patchEntity($tecnica, $this->request->getData());
            if ($this->Tecnicas->save($tecnica)) {
                $this->Flash->success(__('The tecnica has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tecnica could not be saved. Please, try again.'));
        }
        $campanias = $this->Tecnicas->Campanias->find('list', ['limit' => 200]);
        $lotes = $this->Tecnicas->Lotes->find('list', ['limit' => 200]);
        $sistemaLaboreos = $this->Tecnicas->SistemaLaboreos->find('list', ['limit' => 200]);
        $arrozVariedades = $this->Tecnicas->ArrozVariedades->find('list', ['limit' => 200]);
        $arrozTipoCurados = $this->Tecnicas->ArrozTipoCurados->find('list', ['limit' => 200]);
        $this->set(compact('tecnica', 'campanias', 'lotes', 'sistemaLaboreos', 'arrozVariedades', 'arrozTipoCurados'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Tecnica id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tecnica = $this->Tecnicas->get($id);
        if ($this->Tecnicas->delete($tecnica)) {
            $this->Flash->success(__('The tecnica has been deleted.'));
        } else {
            $this->Flash->error(__('The tecnica could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
