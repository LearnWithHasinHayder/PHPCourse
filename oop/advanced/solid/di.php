<?php
//dependency inversion principle

class Authenticator{
    function authenticate($username, $password, $external=false, $externalService =false){
        if($external==true && 'google'==$externalService){
            $ga = new GoogleAuthenticator();
            $ga->authenticate();
        }elseif($external==true && 'github'==$externalService){
            $ga = new GithubAuthenticator();
            $ga->authenticate();
        }else{
            $la = new LocalAuthenticator();
            $la->authenticate();
        }
    }
}
interface AuthServiceProviderInterface{
    function authenticate();
}

class GithubAuthenticator implements AuthServiceProviderInterface{
    function authenticate(){
        
    }
}
class Authenticator{
    private $authServiceProvider;
    function __construct(AuthServiceProviderInterface $asp){
        $this->authServiceProvider = $asp;
    }
    function authenticate(){
        $this->asp->authenticate();
    }
}

$ga = new GithubAuthenticator();
$auth = new Authenticator($ga);
$auth->authenticate();

$la = new LocalAuthenticator($username, $password);
$la = new LocalAuthenticator($la);
$auth->authenticate();
