<?php

namespace ZFTest\User;

use ZFT\User;

/** PHP 5 version
class IdentityMapStub implements User\IdentityMapInterface {

}

class DataMapperStub implements User\DataMapperInterface {

}
*/

class UserRepositoryTest extends \PHPUnit_Framework_TestCase {
    public function testCanCreateUserRepositoryObject() {
        /* PHP 5 version
        $identityMapStub = new IdentityMapStub();
        $dataMapperStub = new DataMapperStub();
        */

        $dataMapperStub = new class() implements User\DataMapperInterface {

        };

        $repository = new User\Repository($dataMapperStub);

        $this->assertInstanceOf(User\Repository::class, $repository);
    }

    public function testGetSameObjectWithMultipleRequests() {
        $dataMapperStub = new class() implements User\DataMapperInterface {

        };

        $repository = new User\Repository($dataMapperStub);

        $user2 = $repository->getUserById(2);
        $user3 = $repository->getUserById(3);
        $user4 = $repository->getUserById(2);

        $this->assertSame($user2, $user4);
    }
}
