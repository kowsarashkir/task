You need Docker in order to run this.

To build:

```docker build -t phpsite:latest .```

to run:

```docker run -p 80:80 -v php:/var/www/html --name phpsite phpsite:latest```

to reflect dev changes whilst the container is runnings:

```docker restart phpsite```