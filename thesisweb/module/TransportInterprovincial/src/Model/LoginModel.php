<?php
namespace TransportInterprovincial\Model;

use RuntimeException;
use Laminas\Db\TableGateway\TableGatewayInterface;
use Laminas\Db\Sql\Sql;
class LoginModel extends BaseModel
{
    private $tableGateway;

    public function __construct(TableGatewayInterface $tableGateway)
    {
        $this->tableGateway = $tableGateway;
    }

    public function fetchAll()
    {
        return $this->tableGateway->select();
    }

    public function selectData($code)
    {
        $adapter = $this->tableGateway->getAdapter();

        $sql = new Sql($adapter);
        $select = $sql->select();
        $select->columns([
            'Count' => new \Zend\Db\Sql\Expression('COUNT(*)')
        ]);
        $select->from('user_master');
        $select->where(['password' => $code]);
        $statement = $sql->prepareStatementForSqlObject($select);
        $result = $statement->execute();
        foreach ($result as $value)
        return $value;
    }
    public function countLoginFalse($count_login_false) {
        $adapter = $this->tableGateway->getAdapter();

        $sql = new Sql($adapter);
        $update = $sql->update('user_master');
        $update->set([
            'count_login_false' => $count_login_false
        ]);
        $update->where(['user_id' => 'nqd712']);
        $statement = $sql->prepareStatementForSqlObject($update);
        $result = $statement->execute();
        return $result->count();
    }
}