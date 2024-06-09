# What's this?

This is a sample of CakePHP4 application with AWS Serverless Architecture.

# Local Dev

1. Make `.env` file from `.env.sample`
2. You need to install docker & docker composer

```
docker-compose build
docker-compose up -d
```

# build & deploy

Make `samconfig.yml` if not exists, from `samconfig.sample.yml`

```
sam package
sam deploy
```
