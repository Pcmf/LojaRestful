<?php
require_once 'classes/Artigos.php';
require_once 'classes/Categorias.php';
require_once 'classes/Clientes.php';
require_once 'classes/Cores.php';
require_once 'classes/Fornecedores.php';
require_once 'classes/Paises.php';
require_once 'classes/Stock.php';
require_once 'classes/Tamanhos.php';
require_once 'classes/TipoCliente.php';
require_once 'classes/Familias.php';
/**
 * RESTFull para loja 1
 * 
 * 
 */
if ($_SERVER['REQUEST_METHOD'] == "GET") {
        if ($_GET['url'] == "artigo") {
            $artigo = new Artigos();
            if(isset($_GET['id'])){
               echo json_encode($artigo->getOne($_GET['id']));
               http_response_code(200);
            } else {
                echo json_encode($artigo->getAll());
                http_response_code(200);
            }
        } elseif ($_GET['url'] == "categoria") {
            $categoria = new Categorias();
            if(isset($_GET['id'])){
               echo json_encode($categoria->getOne($_GET['id']));
               http_response_code(200);
            } else {
                echo json_encode($categoria->getAll());
                http_response_code(200);
            }
        } elseif ($_GET['url'] == "familia") {
            $familia = new Familias();
            if(isset($_GET['id'])){
               echo json_encode($familia->getOne($_GET['id']));
               http_response_code(200);
            } else {
                echo json_encode($familia->getAll());
                http_response_code(200);
            }
        }  elseif ($_GET['url'] == "cliente") {
            $cliente = new Clientes();
            if(isset($_GET['id'])){
               echo json_encode($cliente->getOne($_GET['id']));
               http_response_code(200);
            } else {
                echo json_encode($cliente->getAll());
                http_response_code(200);
            }
        } elseif ($_GET['url'] == "cor") {
            $cor = new Cores();
            if(isset($_GET['id'])){
               echo json_encode($cor->getOne($_GET['id']));
               http_response_code(200);
            } else {
                echo json_encode($cor->getAll());
                http_response_code(200);
            }
        } elseif ($_GET['url'] == "fornecedor") {
            $fornecedor = new Fornecedores();
            if(isset($_GET['id'])){
               echo json_encode($fornecedor->getOne($_GET['id']));
               http_response_code(200);
            } else {
                echo json_encode($fornecedor->getAll());
                http_response_code(200);
            } 
        } elseif ($_GET['url'] == "pais") {
            $pais = new Paises();
            if(isset($_GET['id'])){
               echo json_encode($pais->getOne($_GET['id']));
               http_response_code(200);
            } else {
                echo json_encode($pais->getAll());
                http_response_code(200);
            } 
        } elseif ($_GET['url'] == "stock") {
            $stock = new Stock();
            if(isset($_GET['artigo']) && isset($_GET['cor']) && isset($_GET['tamanho'])){
               echo json_encode($stock->getOnen($_GET['artigo'], $_GET['cor'], $_GET['tamanho']));
               http_response_code(200);
            } else {
                echo json_encode($stock->getAll($_GET['artigo']));
                http_response_code(200);
            }  
        } elseif ($_GET['url'] == "tamanho") {
            $tamanho = new Tamanhos();
            if(isset($_GET['id'])){
               echo json_encode($tamanho->getOne($_GET['id']));
               http_response_code(200);
            } else {
                echo json_encode($tamanho->getAll());
                http_response_code(200);
            } 
        } elseif ($_GET['url'] == "tipocliente") {
            $tipocliente = new TipoCliente();
            if(isset($_GET['id'])){
               echo json_encode($tipocliente->getOne($_GET['id']));
               http_response_code(200);
            } else {
                echo json_encode($tipocliente->getAll());
                http_response_code(200);
            } 
        } else {
            http_response_code(401);
        }
//Fim dos GET
} elseif ($_SERVER['REQUEST_METHOD'] == "POST") 
    {
    $postBody = file_get_contents("php://input");
    $postBody = json_decode($postBody);
    //Artigos
    if ($_GET['url'] == "artigo") {
        $artigo = new Artigos();
        echo $artigo->set($postBody);
        http_response_code(200);
    //Categorias
    } elseif ($_GET['url'] == "categoria") {
        $categoria = new Categorias();
        echo $categoria->set($postBody);
        http_response_code(200);            
    //Clientes    
    } elseif ($_GET['url'] == "cliente") {
        $cliente = new Clientes();
        echo $cliente->set($postBody);
        http_response_code(200);            
    //Cores    
    } elseif ($_GET['url'] == "cor") {
        $cor = new Cores();
        echo $cor->set($postBody);
        http_response_code(200);            
    //Fornecedores
    } elseif ($_GET['url'] == "fornecedor") {
        $fornecedor = new Fornecedores();
        echo $fornecedor->set($postBody);
        http_response_code(200);            
    //Stock
    } elseif ($_GET['url'] == "stock") {
        $stock = new Stock();
        echo $stock->set($postBody);
        http_response_code(200);            
    //Tamanhos
    } elseif ($_GET['url'] == "tamanho") {
        $tamanho = new Tamanhos();
        echo $tamanho->set($postBody);
        http_response_code(200);            
    //Familias
    } elseif ($_GET['url'] == "familia") {
        $familia = new Familias();
        echo $familia->set($postBody);
        http_response_code(200); 
    //Paise
    } elseif ($_GET['url'] == "pais") {
        $pais = new Paises();
        echo $pais->set($postBody);
        http_response_code(200);            
    } else {
        http_response_code(401);
    }

 //Fim dos POST       
} elseif ($_SERVER['REQUEST_METHOD'] == "PUT") {
    $postBody = file_get_contents("php://input");
    $postBody = json_decode($postBody);
   
        //Artigos
    if ($_GET['url'] == "artigo") {
        $artigo = new Artigos();
        if(isset($_GET['id'])){
            echo $artigo->edit($_GET['id'],$postBody);
            http_response_code(200);
        } else {
            http_response_code(401);
        }
    //Categorias
    } elseif ($_GET['url'] == "categoria") {
        $categoria = new Categorias();
        if(isset($_GET['id'])){
            echo $categoria->edit($_GET['id'],$postBody);
            http_response_code(200); 
        } else {
            http_response_code(401);
        }
    //Clientes    
    } elseif ($_GET['url'] == "cliente") {
        $cliente = new Clientes();
        if(isset($_GET['id'])){
            echo $cliente->edit($_GET['id'],$postBody);
            http_response_code(200); 
        } else {
            http_response_code(401);
        }          
    //Cores    
    } elseif ($_GET['url'] == "cor") {
        $cor = new Cores();
        if(isset($_GET['id'])){
            echo $cor->edit($_GET['id'],$postBody);
            http_response_code(200); 
        } else {
            http_response_code(401);
        }            
    //Fornecedores
    } elseif ($_GET['url'] == "fornecedor") {
        $fornecedor = new Fornecedores();
        if(isset($_GET['id'])){
            echo $fornecedor->edit($_GET['id'],$postBody);
            http_response_code(200); 
        } else {
            http_response_code(401);
        }          
    //Stock
    } elseif ($_GET['url'] == "stock") {
        $stock = new Stock();
        if(isset($_GET['id'])){
            echo $stock->edit($_GET['id'],$postBody);
            http_response_code(200); 
        } else {
            http_response_code(401);
        }             
    //Tamanhos
    } elseif ($_GET['url'] == "tamanho") {
        $tamanho = new Tamanhos();
        if(isset($_GET['id'])){
            echo $tamanho->edit($_GET['id'],$postBody);
            http_response_code(200); 
        } else {
            http_response_code(401);
        }             
    } elseif ($_GET['url'] == "familia") {
        $familia = new Familias();
        if(isset($_GET['id'])){
            echo $familia->edit($_GET['id'],$postBody);
            http_response_code(200); 
        } else {
            http_response_code(401);
        }             
    } elseif ($_GET['url'] == "pais") {
        $pais = new Paises();
        if(isset($_GET['id'])){
            echo $pais->edit($_GET['id'],$postBody);
            http_response_code(200); 
        } else {
            http_response_code(401);
        }             
    } else {
        http_response_code(401);
    }
    
    //DELETE
} elseif ($_SERVER['REQUEST_METHOD'] == "DELETE") {
    if($_GET['url'] == 'categoria'){
        $categoria = new Categorias();
        echo $categoria->delete($_GET['id']);
        http_response_code(200);
    } elseif ($_GET['url'] == 'familia'){
        $familia = new Familias();
        echo $familia->delete($_GET['id']);
        http_response_code(200);
    } elseif ($_GET['url'] == 'pais'){
        $pais = new Paises();
        echo $pais->delete($_GET['id']);
        http_response_code(200);
    } elseif ($_GET['url'] == 'cor'){
        $cor = new Cores();
        echo $cor->delete($_GET['id']);
        http_response_code(200);
    } elseif ($_GET['url'] == 'cliente'){
        $cliente = new Clientes();
        echo $cliente->delete($_GET['id']);
        http_response_code(200);
    }
}