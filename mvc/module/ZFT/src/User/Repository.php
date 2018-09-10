<?php

namespace ZFT\User;

use Zend\Db\TableGateway\TableGateway;

class Repository {

    private $identityMap = [];

    /** @var TableGateway  */
    private $usersTable;
    public function __construct(TableGateway $usersTable) {
        $this->usersTable = $usersTable;
    }

    public function getUserById($id) {
        if(array_key_exists($id, $this->identityMap)) {
            return $this->identityMap[$id];
        }

        $userResultSet = $this->usersTable->select(['id' => $id]); // WHERE id = 1
        $user = $userResultSet->current();


        $this->identityMap[$id] = $user;
        return $user;
    }

    public function getUsersByGroup(Group $group) {

    }

    public function getAll() {

    }

    public function commit() {

    }
}
