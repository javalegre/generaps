<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ArrozTipoCurados Controller
 *
 * @property \App\Model\Table\ArrozTipoCuradosTable $ArrozTipoCurados
 *
 * @method \App\Model\Entity\ArrozTipoCurado[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ArrozTipoCuradosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $arrozTipoCurados = $this->paginate($this->ArrozTipoCurados);

        $this->set(compact('arrozTipoCurados'));
    }

    /**
     * View method
     *
     * @param string|null $id Arroz Tipo Curado id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $arrozTipoCurado = $this->ArrozTipoCurados->get($id, [
            'contain' => ['Tecnicas']
        ]);

        $this->set('arrozTipoCurado', $arrozTipoCurado);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $arrozTipoCurado = $this->ArrozTipoCurados->newEntity();
        if ($this->request->is('post')) {
            $arrozTipoCurado = $this->ArrozTipoCurados->patchEntity($arrozTipoCurado, $this->request->getData());
            if ($this->ArrozTipoCurados->save($arrozTipoCurado)) {
                $this->Flash->success(__('The arroz tipo curado has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The arroz tipo curado could not be saved. Please, try again.'));
        }
        $this->set(compact('arrozTipoCurado'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Arroz Tipo Curado id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $arrozTipoCurado = $this->ArrozTipoCurados->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $arrozTipoCurado = $this->ArrozTipoCurados->patchEntity($arrozTipoCurado, $this->request->getData());
            if ($this->ArrozTipoCurados->save($arrozTipoCurado)) {
                $this->Flash->success(__('The arroz tipo curado has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The arroz tipo curado could not be saved. Please, try again.'));
        }
        $this->set(compact('arrozTipoCurado'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Arroz Tipo Curado id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $arrozTipoCurado = $this->ArrozTipoCurados->get($id);
        if ($this->ArrozTipoCurados->delete($arrozTipoCurado)) {
            $this->Flash->success(__('The arroz tipo curado has been deleted.'));
        } else {
            $this->Flash->error(__('The arroz tipo curado could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
