git clone https://lstanisl@forge.iut-larochelle.fr/lstanisl/pwssymfony.git

docker rm $(docker ps -q -a)
docker compose up --build -d

docker exec -it iut-php bash
composer install
