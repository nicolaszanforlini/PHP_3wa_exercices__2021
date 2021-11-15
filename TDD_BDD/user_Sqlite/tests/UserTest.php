<?php

use PHPUnit\Framework\TestCase;

use App\User;
use App\Model;

class UserTest extends TestCase
{

    protected $model;
    protected $users = [['username' => 'Alan'],['username' => 'Sophie'],['username' => 'Bernard']];


    public function setUp(): void
    {
        $this->pdo = new \PDO('sqlite::memory:');
        $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

        $this->pdo->exec(
            "CREATE TABLE IF NOT EXISTS user
          (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            username VARCHAR( 225 )
          )
            "
        );
        $this->model = new Model($this->pdo);
        $this->model->hydrate($this->users);
    }

    /**
     * @test count method insert
     */
    public function testSeedsCreate()
    {
        $t = $this->model->all();
        $i = count($t);
        $this->assertEquals(3, $i);
    }

    /**
     * @test save method insert
     */
    public function testInsertSave()
    {
        //$this->assertDataSetsEqual($this->users, $this->model->all());
        $t []= [];
        $user = new User();
        $user->__set()
    }

     /**
     * @test save method update
     */
    public function testUpdateSave()
    {
     
    }

    /**
     * @test delete resource by id
     */
    public function testDelete()
    {

    }

}
