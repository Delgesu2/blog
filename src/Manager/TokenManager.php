<?php

namespace Framework\Manager;

use App\DBFactory;
use Framework\Modele\Token;

class TokenManager extends DBFactory
{
    public $data;

    // Create token
    public function createToken($token)
    {
        $req = $this->connect()->prepare("START TRANSACTION;
        DELETE FROM token;
        INSERT INTO token(token) VALUES (:token);
        COMMIT;");
        $req->execute([':token' => $token]);
    }

    // Read token
    public function readToken()
    {
        $req = $this->connect()->prepare("SELECT token FROM token");
        $req->execute();

        return $this->buildDomain($req->fetch());
    }

    // Delete token
    public function delToken()
    {
        $req = $this->connect()->prepare("DELETE FROM token");
		$req = execute();
	}

    // Hydratation
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

