CREATE TABLE category (
category_id INT AUTO_INCREMENT PRIMARY KEY,
category_name VARCHAR(100) NOT NULL,
category_entrydate DATETIME DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE product (
  product_id INT AUTO_INCREMENT PRIMARY KEY,
  product_name VARCHAR(100) NOT NULL,
  product_code VARCHAR(50) NOT NULL UNIQUE,
  product_category VARCHAR(100) NOT NULL,
  product_entry_date DATETIME DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE store_product (
  store_product_id INT AUTO_INCREMENT PRIMARY KEY,
  store_product_name VARCHAR(100) NOT NULL,
  store_product_quantity INT NOT NULL DEFAULT 0,
  store_product_entry_date DATETIME DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE spend_product (
  spend_product_id INT AUTO_INCREMENT PRIMARY KEY,
  spend_product_name VARCHAR(100) NOT NULL,
  spend_product_quantity INT NOT NULL DEFAULT 0,
  spend_product_entry_date DATETIME DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE users (
  user_id INT AUTO_INCREMENT PRIMARY KEY,
  user_first_name VARCHAR(50) NOT NULL,
  user_last_name VARCHAR(50) NOT NULL,
  user_email VARCHAR(100) NOT NULL UNIQUE,
  user_password VARCHAR(255) NOT NULL
);

CREATE TABLE images (
  image_id INT AUTO_INCREMENT PRIMARY KEY,
  image_name VARCHAR(255) NOT NULL
);