# Symfony-React Authentication Demo powered by Auth0

A project to showcase integration of Auth0 into a Symfony-React project for Authentication and Authorization


## Getting Started

### Clone the repository
```bash
$ git clone https://github.com/yemiwebby/symfony-auth0-api.git
```

### Change directory
```bash
$ cd symfony-auth0-api
```

### Use composer to install dependencies

```bash
$ composer install
```

### Frontend dependencies

Run the command below from the project's root directory in another terminal

## Install yarn globally

```bash
$ npm install yarn --global
```
### Then install dependencies

```bash
$ yarn install
```

Do ensure that you have two separate terminals opened on your machine. One of them will be used to start the Symfony app while the other will keep the frontend running.

### Start the application

#### Backend ( Server )
```bash
$ php bin/console server:run
```


#### Frontend
```bash
$ yarn run encore dev --watch
```

## Prerequisites
 [Node.js](https://nodejs.org/en/) and [Yarn package manager](https://yarnpkg.com/lang/en/docs/install/#mac-stable)

## Built With

[Auth0]() - 
[Symfony](https://symfony.com/) - Is a set of reusable PHP components
[React](https://reactjs.org/) - A JavaScript library for building user interfaces.
[Webpack Encore](https://github.com/symfony/webpack-encore) - Webpack Encore is a simpler way to integrate Webpack into your application.
