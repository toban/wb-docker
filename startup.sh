#!/bin/bash
set -o allexport; source .env; source local.env; set +o allexport
docker-compose up