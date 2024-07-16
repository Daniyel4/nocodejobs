<?php


declare(strict_types=1);

namespace Framework;

use PDO;


class Database{


            public PDO $dbConnect;

    public function __construct(
        string $driver,
        array $config,
        string $username,
        string $password
    )
    {
    }

            


}