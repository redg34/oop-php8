<?php
namespace App\Repositories\Impl;

/**
 * UserRepository
 * @author DaCoDeMaNiaK <jean-luc.aubert@aelion.fr>
 * @version 1.0.0
 * @see App\Repositories\RepositoryInterface
 */

use \MySQLi;

use App\Repositories\RepositoryInterface;
use App\Entities\User;
use App\Db\MariaDb\MariaDb;

final class UserRepository implements RepositoryInterface {
    public function findAll(): array {
        return [];
    }

    public function findOne(int $id) {
        return new User();
    }

    /**
     * Find a user by its login and password
     * @throw RuntimeException if query failed for any reason
     * @param String login
     * @param String password
     * @return User
     */
    public function findByLoginAndPassword(string $login, string $password): User {
        $sqlQuery = 'SELECT id, username, password FROM users WHERE ';
        $sqlQuery .= 'username = \'' . $login . '\' AND ';
        $sqlQuery .= 'password = PASSWORD(\'' . $password . '\');';

        /**
         * SELECT id, username, password FROM users WHERE 
         * username = 'jlaubert' -- AND ...
         */
        echo $sqlQuery . "\n";
        
        // Let's connect to RDBMS
        $mariaDB = new MariaDb();
        $connection = $mariaDB->getConnection();

        // Send query to RDBMS
        $result = $connection->execute_query($sqlQuery);

        if ($result) {
            $user = new User();
            $row = $result->fetch_array();
            if ($row) {
                $user->setId($row['id']);
                $user->setUsername($row['username']);
                $user->setPassword($row['password']);
    
                return $user;
            }
        }

        throw new \RuntimeException('User was not found');
    }
}