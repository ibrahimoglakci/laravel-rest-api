<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# Laravel REST API Project

This project is a RESTful API application developed with Laravel.

## API Endpoints

- `GET /api/v1/products`: Used to retrieve all products.

- `GET /api/v1/product/{id}`: Used to retrieve a specific product.

- `POST /api/v1/product`: Used to add a new product.

- `PUT /api/v1/product/{id}`: Used to update an existing product.

- `DELETE /api/v1/product/{id}`: Used to delete a specific product.

## Usage

Follow these steps once the project is running locally:

#1. Clone the project:
   ```bash
   git clone https://github.com/ibrahimoglakci/restapi.git
```


#Install the required dependencies:
 ```bash
  composer install
```

#Create the database:
 ```bash
  php artisan migrate
```

#Run the project:
 ```bash
  php artisan serve
```


## Example Usage

#Listing Products

 ```bash
  curl https://localhost:8000/api/v1/products
```

#Viewing a Specific Product
```bash
curl https://localhost:8000/api/v1/product/1
```

#Adding a new Product

```bash
curl -X POST -H "Content-Type: application/json" -d '{"name": "New Product", "price": 20.0}' https://localhost:8000/api/v1/product
```

#Updating a Product

```bash
curl -X PUT -H "Content-Type: application/json" -d '{"name": "Updated Product", "price": 25.0}' https://localhost:8000/api/v1/product/1
```

#Deleting a Product
```bash
curl -X DELETE https://localhost:8000/api/v1/product/1
```







   
