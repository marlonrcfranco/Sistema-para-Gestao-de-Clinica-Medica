[![GitHub repo size](https://img.shields.io/github/repo-size/marlonrcfranco/Sistema-para-Gestao-de-Clinica-Medica)](https://github.com/marlonrcfranco/Sistema-para-Gestao-de-Clinica-Medica)
[![GitHub top language](https://img.shields.io/github/languages/top/marlonrcfranco/Sistema-para-Gestao-de-Clinica-Medica)](https://github.com/marlonrcfranco/Sistema-para-Gestao-de-Clinica-Medica)
![GitHub contributors](https://img.shields.io/github/contributors/marlonrcfranco/Sistema-para-Gestao-de-Clinica-Medica)
[![GitHub stars](https://img.shields.io/github/stars/marlonrcfranco/Sistema-para-Gestao-de-Clinica-Medica?style=social)](https://github.com/marlonrcfranco/Sistema-para-Gestao-de-Clinica-Medica/stargazers)

# SISTEMA PARA GESTÃO DE CLÍNICA MÉDICA

Implementação de um Sistema para Gestão de Clínicas Médicas (simplificado), que por sua vez integra o trabalho avaliado homônimo da disciplina de Sistemas para Internet II (Turma U) da Universidade Federal do Rio Grande - FURG, sob orientação do Prof. Dr. Ewerson Carvalho.

## Autores

* **Marlon R C Franco** - *59782* - [Marlonrcfranco](https://github.com/marlonrcfranco)
* **Rafael Monteiro Bulsing** - *85477* - [rafabulsing](https://github.com/rafabulsing)
* **Rafael Neves Romeu** - *88921* - [Rafael-Romeu](https://github.com/Rafael-Romeu)


### Pré-requisitos

- Linux
- Apache
- PHP 7.2
- Mozilla Firefox

### Instalação (Docker)
Em um terminal dentro do diretório do projeto, execute o seguinte comando:
```
./build_image.sh
```
Em seguida, abra o navegador e acesse http://localhost:8080
A tela de login deverá ser apresentada.


### Instalação

- Extraia os arquivos do .zip

- Copie o conteúdo da pasta extraída e cole-os dentro do diretório do seu servidor (geralmente em _/var/www/html_);
	
- Entre no diretório do servidor e abra o terminal (Ctrl+Alt+T);

- Digite no terminal o comando: 
```
sudo chmod 777 -R /var/www/html
```
para libera as permissões de leitura e escrita nos arquivos recém copiados (substitua o '_/var/www/html_' pelo caminho completo do diretorio do seu servidor, caso não seja este;
	
- Abra o navegador Mozilla Firefox (necessariamente deve ser este navegador);

- Na barra de endereços, digite a URL:
```
localhost/Paginas/Login.php
```
substitua "localhost" pelo IP:PORTA da sua máquina, caso seja necessário;


## IMPORTANTE

* Erro de '_permission denied_': 
Entre no diretório do seu servidor, abra o terminal (Ctrl+Alt+T) e digite o comando para liberar as permissões de leitura e escrita nos arquivos recém copiados:
```
sudo chmod 777 -R /var/www/html
```
(substitua o '_/var/www/html_' pelo caminho completo do diretorio do servidor, caso não seja este.

