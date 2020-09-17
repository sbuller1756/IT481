
CREATE TABLE 'users' (
id INT(11) AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(80),
name VARCHAR (80),
password VARCHAR(80))

INSERT INTO `users` (`id`, `username`, `name`, `password`) VALUES
(1, 'User_CEO', 'James Bond', '1234'),
(2, 'User_HR', 'Sara Lee', '1234'),
(3, 'User_Sales', 'Tom Cruise', '1234')

