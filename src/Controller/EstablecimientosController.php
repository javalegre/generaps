<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Establecimientos Controller
 *
 * @property \App\Model\Table\EstablecimientosTable $Establecimientos
 *
 * @method \App\Model\Entity\Establecimiento[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EstablecimientosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Responsables', 'EstablecimientoTipos']
        ];
        $establecimientos = $this->paginate($this->Establecimientos);

        $this->set(compact('establecimientos'));
    }

    /**
     * View method
     *
     * @param string|null $id Establecimiento id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $establecimiento = $this->Establecimientos->get($id, [
            'contain' => ['Responsables', 'EstablecimientoTipos', 'Sectores']
        ]);

        $this->set('establecimiento', $establecimiento);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $establecimiento = $this->Establecimientos->newEntity();
        if ($this->request->is('post')) {
            $establecimiento = $this->Establecimientos->patchEntity($establecimiento, $this->request->getData());
            if ($this->Establecimientos->save($establecimiento)) {
                $this->Flash->success(__('The establecimiento has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The establecimiento could not be saved. Please, try again.'));
        }
        $responsables = $this->Establecimientos->Responsables->find('list', ['limit' => 200]);
        $establecimientoTipos = $this->Establecimientos->EstablecimientoTipos->find('list', ['limit' => 200]);
        $this->set(compact('establecimiento', 'responsables', 'establecimientoTipos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Establecimiento id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $establecimiento = $this->Establecimientos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $establecimiento = $this->Establecimientos->patchEntity($establecimiento, $this->request->getData());
            if ($this->Establecimientos->save($establecimiento)) {
                $this->Flash->success(__('The establecimiento has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The establecimiento could not be saved. Please, try again.'));
        }
        $responsables = $this->Establecimientos->Responsables->find('list', ['limit' => 200]);
        $establecimientoTipos = $this->Establecimientos->EstablecimientoTipos->find('list', ['limit' => 200]);
        $this->set(compact('establecimiento', 'responsables', 'establecimientoTipos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Establecimiento id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $establecimiento = $this->Establecimientos->get($id);
        if ($this->Establecimientos->delete($establecimiento)) {
            $this->Flash->success(__('The establecimiento has been deleted.'));
        } else {
            $this->Flash->error(__('The establecimiento could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
