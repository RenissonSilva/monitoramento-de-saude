# monitoramento-de-saude
Prova de web 2 - Sistema de monitoramento de saúde

### OBS : Para fazer login você deve pegar um dos e-mails que foram gerados pela seed (seja do médico ou paciente).Senha é 'ipi2019' para todos.

# Como rodar o projeto

Primeiramente faça o clone do projeto 

    git clone https://github.com/RenissonSilva/monitoramento-de-saude

Entre na pasta

    cd monitoramento-de-saude/checkup/
    
Baixe o composer

    composer install
    
Atualize o composer

    composer update
   
Faça uma cópia do arquivo .env.example

    cp .env.example .env
    
Modifique as seguintes informações do arquivo .env. Coloque o nome do seu database, username e senha

    DB_DATABASE=laravel
    DB_USERNAME=root
    DB_PASSWORD=

Dê o comando à seguir para criar as tabelas e populá-las.

    php artisan migrate:fresh --seed
    
Gere a chave

    php artisan key:generate
    
Instale o npm
    
    npm install
    
Rode o npm para compilar o css e javascript 
    
    npm run prod
    
Rode o servidor

    php artisan serve
    
Acesse no navegador o sistema, através do link

    http://127.0.0.1:8000/
