# metodos-http-get-post-com-php

## Principais métodos  HTTP
- `HTTP`: Hypertext Transfer Protocol, envio de dados na web.

- `GET`: Solicita dados de um servidor
- `POST`: Envia dados para um servidor
- `PUT`:  Atualiza dados em um servidor
- `DELETE`: Deleta dados de um servidor

### Características do método GET
- Os dados saão enviados na URL, após o ponto de interrogação (?).
- Os dados são visíveis na URL.
- Os dados são limitados em tamanho.
- Os dados são enviados para o servidor sempre que a página é carregada.
- Utilizado para buscar informações

### MÉTODO GET

-html

~~~html
<h1>FORM GET</h1>

<form action="processaGET.php" method="get">
    <label for="nome">Nome:</label>
    <input type="text" name="nome">

    <label for="idade">Idade:</label>
    <input type="number" name="idade">

    <input type="submit" value="Enviar">

</form>
~~~

-php

~~~php
<?php
//Recebendo dados do método GET
echo "Ola, "  . $_GET['nome'] . "! Você tem "  . $_GET['idade'] . " anos.";
?>
~~~

### Características do método POST
- Utilizado  para enviar dados para o servidor.
- Os dados são enviados no corpo da requisição (HTTP).
- Sem limite prático de tamanho para os dados enviados.
- Mais seguro que o GET, pois os dados não são visíveis na URL.

### MÉTODO POST

~~~php
<?php
//Recebendo dados do método POST
echo "Ola, "  . $_POST['nome'] . "! Você tem "  . $_POST['idade'] . " anos.";
?>
~~~




