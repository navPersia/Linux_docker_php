```shell
git clone https://github.com/navPersia/linux_docker_php.git
cd linux_docker_php/
docker-compose up -d
```
<P>--get the last version--</P>

```shell
sudo docker stop navid-webserver
sudo docker stop navid-mysql
sudo docker stop navid-phpmyadmin

docker system prune

docker system prune -a -y

git pull
docker-compose up -d
```

<P>Made by Navid RADKUSHA - 2019</P>
<P>navidradkusha.sinner.be</P>


