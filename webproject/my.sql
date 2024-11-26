CREATE DATABASE composting;

USE composting;

CREATE TABLE waste_conversion (
    id INT AUTO_INCREMENT PRIMARY KEY,
    waste_amount DECIMAL(10, 2),
    conversion_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    fertilizer_amount DECIMAL(10, 2)
);
