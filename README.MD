## PLATINE PHP
**Platine PHP is a lightweight, high-performance, simple and elegant PHP Web framework**

[![Project Status](http://opensource.box.com/badges/active.svg)](http://opensource.box.com/badges)
[![Latest Stable Version](https://poser.pugx.org/platine-php/app/v/stable)](https://packagist.org/packages/platine-php/app)
[![Latest Unstable Version](https://poser.pugx.org/platine-php/app/v/unstable)](https://packagist.org/packages/platine-php/app)
[![Total Downloads](https://poser.pugx.org/platine-php/app/downloads)](https://packagist.org/packages/platine-php/app)
[![License](https://poser.pugx.org/platine-php/app/license)](https://packagist.org/packages/platine-php/app)  
[![Quality Score](https://img.shields.io/scrutinizer/g/platine-php/app.svg?style=flat-square)](https://scrutinizer-ci.com/g/platine-php/app)
[![Codacy Badge](https://app.codacy.com/project/badge/Grade/775a3aa3cc1a4e4282381633bf003128)](https://app.codacy.com/gh/platine-php/app/dashboard?utm_source=gh&utm_medium=referral&utm_content=&utm_campaign=Badge_grade)
[![Codacy Badge](https://app.codacy.com/project/badge/Coverage/775a3aa3cc1a4e4282381633bf003128)](https://app.codacy.com/gh/platine-php/app/dashboard?utm_source=gh&utm_medium=referral&utm_content=&utm_campaign=Badge_coverage)

### Requirements 
You can use **Platine** for web or command line application. For web application: 
- Any web server **(Apache, nginx, lighttp, etc.)**
- **PHP >= 7.4**, **PHP 8** 

For CLI application just PHP executable is enough. 

### Installation
Platine Application can be installed using composer
```bash
composer create-project platine-php/app
```

### Install on docker
If you want to test platine using docker follow the step below:
- Build the platine image
```bash
docker-compose build app
```
- Run the containers
```bash
docker-compose up -d
```
- Install composer dependencies
```bash
docker-compose exec app composer install --no-interaction --optimize-autoloader --no-dev
```
Then open `http://server_domain_or_IP:8000`, for example `http://localhost:8000`.  

### License
MIT License See [LICENSE.MD](LICENSE.MD)

### Resources 
 - [Documentation](https://docs.platine-php.com)  
 - Tutorial Youtube (French): [Budget Management Application](https://www.youtube.com/playlist?list=PLbUHyVcL-6Q8H6ip40eSdpt4MjRXYGPz9)
