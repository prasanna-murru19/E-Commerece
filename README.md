Project Overview
This e-commerce platform is designed for Customers and Admins to handle shopping and management functionalities. Below are concise, sectioned explanations for each part of the project.

1. User Section
This section explains how users interact with the website.

 1. How can users register on the platform?
 Answer: Users can create an account on the register.php page by providing their name, email, and password. This allows them to access personalized features like the shopping cart.
 2. How can users log in and log out?
 Login: Users log in on the login.php page using their email and password.
 Logout: The logout.php page ends the session, ensuring user data is secure.
 3. How can users view products?
 Answer: All products are displayed on the homepage (index.php). Users can see product names, prices, descriptions, and images.
 4. How can users add products to their cart?
 Answer: On the index.php page, users click "Add to Cart" to save items. The system records these items in the cart for the logged-in user.
 5. How can users manage their cart?
 Answer: The cart.php page lets users view, update, or remove items from their cart. It also shows the total cost of selected products.
 
2. Admin Section
This section explains how admins manage the platform.

 1. How do admins log in and log out?
 Login: Admins log in via admin/login.php using their credentials.
 Logout: The admin/logout.php page ends the admin session securely.
 2. What is the admin dashboard?
 Answer: The admin/dashboard.php page provides a control panel with options to add, edit, and delete products.
 3. How do admins add products?
 Answer: The admin/add_product.php page allows admins to add new products by filling out a form with product details and uploading an image.
 4. How do admins manage products?
 Answer: The admin/manage_products.php page shows all products in a table with options to:Edit product details & Delete products from the store.
 
3. Database Section
This section explains how the database is structured.

 1. What does the users table do?
 Answer: The users table stores information about all users (customers and admins):
 Usernames, emails, hashed passwords.
 A role field to differentiate between customers (user) and admins (admin).
 2. What does the products table do?
 Answer: The products table contains product details:
 Names, prices, descriptions, and image filenames.
 3. What does the cart table do?
 Answer: The cart table keeps track of items added to users' carts: Links users to products and stores the quantity of each item.
 
4. Flow of the Website
This section explains the flow of user actions.

 1. What happens when a user registers?
 Answer: The system validates the input, hashes the password, and saves the user data in the users table.
 2. What happens when a user logs in?
 Answer: The system verifies the email and password, then starts a session to allow personalized access.
 3. What happens when a product is added to the cart?
 Answer: The system saves the product details in the cart table, linked to the logged-in user's ID.
 4. What happens when an admin adds a product?
 Answer: The system uploads the product image, saves the product details in the products table, and displays it on the homepage.
 5. What happens when an admin deletes a product?
 Answer: The system removes the product entry from the products table, making it unavailable on the website.
