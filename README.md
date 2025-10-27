# Symfony + Kamal

A Symfony Docker app deployed with [kamal](https://github.com/basecamp/kamal).

- PHP 8.4
- FrankenPHP
- Kamal
- Deployed to a single VPS on Digital Ocean

# Roadmap

- [x] Setup symfony-docker
- [x] Setup kamal
- [x] Deploy on a Digital Ocean droplet
- [ ] Hide env vars using Symfony secrets or a lastpass configuration
- [ ] Hide server IP address
- [ ] Add Mercure deployment
- [ ] Add monitoring

# Notable files

- `config/deploy.yml`

## Getting Started

1. Clone this project `git clone https://github.com/florentdestremau/symfony-kamal.git`
2. If not already done, [install Docker Compose](https://docs.docker.com/compose/install/) (v2.10+)
2. Run `make start` to build fresh images and start the Docker containers
3. Run `make up` to start the project afterwards.
4. Open `https://symfony-kamal.localhost` in your favorite web browser
5. Run `make down` to stop the Docker containers.
