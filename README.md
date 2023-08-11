<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>


## Sobre o Projeto

Projeto criado para consultar usuário do github e cep

- Consulta do Usuario
- Consulta do cep
- Exportação da tabela de ceps buscados



## Instalação do Projetos


```sh 
git clone https://github.com/ferreiraajr/laravelapi.git
```
Entra na pasta criada
```sh
cd laravelapi
````
Inicia o docker e build de imagens
```sh
./vendor/bin/sail up -d  
````
Copia e cria o arquivo de configuracao do laravel
```sh
cp .env.example .env
````
Gera a chave do sistema
```sh
./vendor/bin/sail artisan key:generate  
````
Se houver problemas com permissão rode o comando abaixo (se estiver na pasta no projeto, volte uma pasta):
```sh
sudo chmod -R 777 laravelapi  
````
