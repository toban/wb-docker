#!/bin/bash
set -o allexport; source $1; source local.env; set +o allexport
docker-compose up