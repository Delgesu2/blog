<?php

namespace Framework\Manager;

use App\DBFactory;
use Framework\Modele\Token;

class TokenManager extends DBFactory
{
    public $data;

    /**
     * Create token
     * @param $token
     */
    public function createToken($token)
    {
        $req = $this->connect()->prepare("START TRANSACTION;
        DELETE FROM token;
        INSERT INTO token(token) VALUES (:token);
        COMMIT;");
        $req->execute([':token' => $token]);
    }

    /**
     * Read token
     * @param $token
     * @return Token
     */
    public function readToken($token)
    {
        $req = $this->connect()->prepare("SELECT token FROM token 
         WHERE token=:token");
        $req->execute([':token' => $token]);

        return $this->buildDomain($req->fetch());
    }


    /**
     * Hydrate object in loop
     * @param array $data
     * @return Token
     */
    public function buildDomain(array $data)
    {
        $token = new Token();
        foreach ($data as $key => $value)
        {
            $method = 'set'.ucfirst($key);
            if (method_exists($token, $method))
            {
                $token->$method($value);
            }
        }
        return $token;
    }
}

