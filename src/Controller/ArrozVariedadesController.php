<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ArrozVariedades Controller
 *
 * @property \App\Model\Table\ArrozVariedadesTable $ArrozVariedades
 *
 * @method \App\Model\Entity\ArrozVariedade[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ArrozVariedadesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $arrozVariedades = $this->paginate($this->ArrozVariedades);

        $this->set(compact('arrozVariedades'));
    }

    /**
     * View method
     *
     * @param string|null $id Arroz Variedade id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $arrozVariedade = $this->ArrozVariedades->get($id, [
            'contain' => ['Tecnicas']
        ]);

        $this->set('arrozVariedade', $arrozVariedade);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $arrozVariedade = $this->ArrozVariedades->newEntity();
        if ($this->request->is('post')) {
            $arrozVariedade = $this->ArrozVariedades->patchEntity($arrozVariedade, $this->request->getData());
            if ($this->ArrozVariedades->save($arrozVariedade)) {
                $this->Flash->success(__('The arroz variedade has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The arroz variedade could not be saved. Please, try again.'));
        }
        $this->set(compact('arrozVariedade'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Arroz Variedade id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $arrozVariedade = $this->ArrozVariedades->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $arrozVariedade = $this->ArrozVariedades->patchEntity($arrozVariedade, $this->request->getData());
            if ($this->ArrozVariedades->save($arrozVariedade)) {
                $this->Flash->success(__('The arroz variedade has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The arroz variedade could not be saved. Please, try again.'));
        }
        $this->set(compact('arrozVariedade'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Arroz Variedade id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $arrozVariedade = $this->ArrozVariedades->get($id);
        if ($this->ArrozVariedades->delete($arrozVariedade)) {
            $this->Flash->success(__('The arroz variedade has been deleted.'));
        } else {
            $this->Flash->error(__('The arroz variedade could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
