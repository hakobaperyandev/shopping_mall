Routes
Products
Base URL: /api/products

Categories
Base URL: /api/categories

----------------------------------------------------------------------------------------------------------------------------

GET /api/products
Retrieves a list of all products with their associated categories.

----------------------------------------------------------------------------------------------------------------------------

POST /api/products

Creates a new product. Requires a request body with the following fields:

title: string (required)
description: string (required)
sku: string (required, exactly 8 characters, unique)
category_id: integer (required, must exist in categories)
price: numeric (required, up to 99999.99, with up to 2 decimal places)

----------------------------------------------------------------------------------------------------------------------------

GET /api/products/{product}
Retrieves a specific product by its ID.

----------------------------------------------------------------------------------------------------------------------------

PUT /api/products/{product}
Updates an existing product by its ID. Requires a request body with the same fields as POST /api/products. The sku must be unique except for the current product being updated.

----------------------------------------------------------------------------------------------------------------------------

DELETE /api/products/{product}
Deletes a specific product by its ID. Returns a success message upon successful deletion.

----------------------------------------------------------------------------------------------------------------------------

GET /api/categories
Retrieves a list of all categories. This endpoint does not require any parameters.

----------------------------------------------------------------------------------------------------------------------------


SETUP 
----------------------------------------------------------------------------------------------------------------------------

git clone <repository-url>
cd <repository-directory>

composer install

cp .env.example .env

php artisan migrate --seed


php artisan serve
