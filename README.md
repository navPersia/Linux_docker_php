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

docker system prune -a 

git pull https://navpersia:Killerfrost1994@github.com/navPersia/linux_docker_php.git
docker-compose up -d

```

<P>manament tool</P>

```shell
docker volume create portainer_data
$ docker run -d -p 8000:8000 -p 9000:9000 -v /var/run/docker.sock:/var/run/docker.sock -v portainer_data:/data portainer/portainer
```

<P>Made by Navid RADKUSHA - 2019</P>
<P>navidradkusha.sinner.be</P>



