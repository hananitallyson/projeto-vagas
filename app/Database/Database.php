<?php

namespace App\Database;

use \PDO;
use \PDOException;

class Database {
    private $host = '127.0.0.1';
    private $name = 'db';
    private $user = 'root';
    private $pdo;
    private $table;

    public function __construct($table) {
        $this->table = $table;
        $this->connect();
    }
    
    public function connect() {
        try {
            $this->pdo = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->name,$this->user);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

    public function execute($query, $params = []) {
        try {
            $statement = $this->pdo->prepare($query);
            $statement->execute($params);
            return $statement;
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

    public function insert($values) {
        $fields = array_keys($values);
        $binds = array_pad([], count($fields), '?');

        $query = 'INSERT INTO ' . $this->table . ' (' . implode(',', $fields) .') VALUES (' . implode(',', $binds) .')';

        $this->execute($query, array_values($values));
    }

    public function select($where = null, $order = null, $limit = null, $fields = '*') {
        $where = strlen($where) ? 'WHERE ' . $where : '';
        $order = strlen($order) ? 'ORDER BY ' . $order : '';
        $limit = strlen($limit) ? 'LIMIT ' . $limit : '';

        $query = 'SELECT ' . $fields . ' FROM ' . $this->table . ' ' . $where . ' ' . $order . ' ' . $limit;

        return $this->execute($query);
    }

    public function update($where, $values) {
        $fields = array_keys($values);

        $query = 'UPDATE ' . $this->table . ' SET ' . implode('=?,', $fields) . '=? WHERE id =' . $where . ';';

        $this->execute($query, array_values($values));

        return true;
    }

    public function delete($where) {
        $query = 'DELETE FROM ' . $this->table . ' WHERE id =' . $where . ';';

        $this->execute($query);
        return true;
    }

}