<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * EstablecimientoTipos Controller
 *
 * @property \App\Model\Table\EstablecimientoTiposTable $EstablecimientoTipos
 *
 * @method \App\Model\Entity\EstablecimientoTipo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EstablecimientoTiposController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $establecimientoTipos = $this->paginate($this->EstablecimientoTipos);

        $this->set(compact('establecimientoTipos'));
    }

    /**
     * View method
     *
     * @param string|null $id Establecimiento Tipo id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $establecimientoTipo = $this->EstablecimientoTipos->get($id, [
            'contain' => ['Establecimientos']
        ]);

        $this->set('establecimientoTipo', $establecimientoTipo);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $establecimientoTipo = $this->EstablecimientoTipos->newEntity();
        if ($this->request->is('post')) {
            $establecimientoTipo = $this->EstablecimientoTipos->patchEntity($establecimientoTipo, $this->request->getData());
            if ($this->EstablecimientoTipos->save($establecimientoTipo)) {
                $this->Flash->success(__('The establecimiento tipo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The establecimiento tipo could not be saved. Please, try again.'));
        }
        $this->set(compact('establecimientoTipo'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Establecimiento Tipo id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $establecimientoTipo = $this->EstablecimientoTipos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $establecimientoTipo = $this->EstablecimientoTipos->patchEntity($establecimientoTipo, $this->request->getData());
            if ($this->EstablecimientoTipos->save($establecimientoTipo)) {
                $this->Flash->success(__('The establecimiento tipo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The establecimiento tipo could not be saved. Please, try again.'));
        }
        $this->set(compact('establecimientoTipo'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Establecimiento Tipo id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $establecimientoTipo = $this->EstablecimientoTipos->get($id);
        if ($this->EstablecimientoTipos->delete($establecimientoTipo)) {
            $this->Flash->success(__('The establecimiento tipo has been deleted.'));
        } else {
            $this->Flash->error(__('The establecimiento tipo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
