<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property int $group_id
 * @property int $role_id
 * @property string $username
 * @property string $password
 * @property string $nombre
 * @property string $ruta_imagen
 * @property string $email
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Group $group
 * @property \App\Model\Entity\Role $role
 */
class User extends Entity {
    
    /* Para poder encriptar el password */
    protected function _setPassword($value) {
        if (strlen($value)){
            $hasher = new DefaultPasswordHasher();

            return $hasher->hash($value);
        }
    }
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'group_id' => true,
        'role_id' => true,
        'username' => true,
        'password' => true,
        'nombre' => true,
        'ruta_imagen' => true,
        'email' => true,
        'created' => true,
        'modified' => true,
        'group' => true,
        'role' => true
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];

    public function parentNode() {
        if (!$this->id) {
            return null;
        }
        if (isset($this->role_id)) {
            $roleId = $this->role_id;
        } else {
            $Users = TableRegistry::get('Users');
            $user = $Users->find('all', ['fields' => ['role_id']])->where(['id' => $this->id])->first();
            $roleId = $user->role_id;
        }
        if (!$roleId) {
            return null;
        }
        return ['Roles' => ['id' => $roleId]];
    }

}
