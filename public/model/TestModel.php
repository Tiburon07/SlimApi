<?php

namespace arcadia\model;

use Exception;
use PDO;
use PDOException;

class TestModel extends BaseModel
{

    /**
     * @param $id
     * @return mixed
     */
    public function loadCommand($id, $fetchType = PDO::FETCH_NUM){

        $con=$this->connect();
        $sql="SELECT id,name,description,min_value,max_value FROM command ";

        if($id > 0)
            $sql .= "WHERE id = :id";
        $stmt = $con->prepare($sql);
        if($id > 0)
            $stmt->bindValue(':id', $id,PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll($fetchType);
    }

    public function loadAllCommand($fetchType = PDO::FETCH_NUM){
        $con = $this->connect();
        $sql ="SELECT * FROM command";
        $stmt = $con->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll($fetchType);
    }

    /**
     * @param $data
     * @return mixed
     */
    public function saveCommand($data){
        $result['ERROR'] = 0;
        $dataCommand=$data['data'];

        $con = null;
        try{
            $con=$this->connect();

            //aggiornamento (id!=-1)
            if (-1 !== (int)$dataCommand['id']){
                $sql= 'UPDATE command set
                name = :name, 
                description = :description, 
                min_value = :minValue,
                max_value = :maxValue
                WHERE id=:id';
            }
            //inserimento nuovo comando (id=-1)
            else{
                $sql= 'INSERT INTO command (name,description,min_value,max_value) values 
              (:name,:description,:minValue,:maxValue)';
            }

            $stmt = $con->prepare($sql);

            //Bind dei dati
            $stmt->bindValue(':name', $dataCommand['arcadia-command-name'],\PDO::PARAM_STR);
            $stmt->bindValue(':description', $dataCommand['arcadia-command-description'],\PDO::PARAM_STR);
            $stmt->bindValue(':minValue', $dataCommand['arcadia-command-min-value'],\PDO::PARAM_STR);
            $stmt->bindValue(':maxValue', $dataCommand['arcadia-command-max-value'],\PDO::PARAM_STR);
            
            //aggiornamento (id!=-1)
            if (-1 !== (int)$dataCommand['id'])
                $stmt->bindValue(':id', $dataCommand['id'],\PDO::PARAM_INT);

            $stmt->execute();
        }catch (PDOException $pdo_EX){
            $result['ERROR']=-$pdo_EX->getCode();    
            $result['INFO'] = $pdo_EX->getMessage();  // caso valore chiave duplicato (name UNIQUE)
        }catch (Exception $exception){
            $result['ERROR']= $exception->getCode();
            $result['INFO'] = $exception->getMessage();
        }
        return $result;
    }

    /**
     * @param $id
     * @return mixed
     */
    public function deleteCommand($id){
        $result['ERROR'] = 0;
        try{
            $con=$this->connect();

            $sql="DELETE FROM command WHERE id = :id";

            $stmt = $con->prepare($sql);
            $stmt->bindValue(':id', $id,\PDO::PARAM_INT);
            $stmt->execute();

            if ($stmt->rowCount()<=0){
                $result['ERROR']=-200;
                $result['INFO']='No element deleted';
            }

        }catch (PDOException $pdo_EX){
            $result['ERROR']=-$pdo_EX->getCode(); 
            $result['INFO'] = $pdo_EX->getMessage();
        }catch (Exception $exception){
            $result['ERROR']= $exception->getCode();
            $result['INFO'] = $exception->getMessage();
        }
        return $result;
    }
}
