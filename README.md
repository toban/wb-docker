# wb-docker

Copy the `local.env.template` to `local.env` and replace the passwords and secrets with your own.

to set the variables in the shell and start docker-compose run

```
set -o allexport; source .env; source local.env; set +o allexport
docker-compose up
```

