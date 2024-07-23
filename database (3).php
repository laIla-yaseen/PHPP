<?php
/*

task 1 •	Inner Join:

SELECT employees.last_name , departments.department_name
FROM employees
INNER JOIN departments
ON employees.department_id = departments.department_id


task 2 •	Left Join:


task 3 •	RIGHT Join:

SELECT departments.department_name , employees.first_name
FROM departments 
RIGHT JOIN employees
ON departments.department_id = employees.employee_id


task 4 •	Full Outer Join:


SELECT employees.first_name, projects.project_name
FROM employees
LEFT JOIN employee_projects ON employees.employee_id = employee_projects.employee_id
LEFT JOIN projects ON employee_projects.project_id = projects.project_id

UNION

SELECT employees.first_name, projects.project_name
FROM employees
RIGHT JOIN employee_projects ON employees.employee_id = employee_projects.employee_id
RIGHT JOIN projects ON employee_projects.project_id = projects.project_id;


task 5 •	Self Join:

SELECT e1.first_name AS employee_name,  
       e2.first_name AS manager_name
FROM employees e1
LEFT JOIN employees e2 ON e1.manager_id = e2.employee_id;


task 6 •	Cross Join:

SELECT e.first_name AS employee_name, d.department_name
FROM employees e
CROSS JOIN departments d;

task 7 •	Join with Alias:

SELECT e.first_name AS employee_name, e.last_name AS employee_last_name, d.department_name
FROM employees AS e
JOIN departments AS d ON e.department_id = d.department_id;

task 8 •	Join with Aggregate Function:

SELECT d.department_name, AVG(s.amount) AS average_salary
FROM employees AS e
JOIN salaries AS s ON e.employee_id = s.employee_id
JOIN departments AS d ON e.department_id = d.department_id
GROUP BY d.department_name;


task 9 •	Join with Conditional Filtering:

SELECT e.first_name, e.last_name, p.project_name, p.start_date
FROM employees e
JOIN employee_projects ep ON e.employee_id = ep.employee_id
JOIN projects p ON ep.project_id = p.project_id
WHERE p.start_date > '2023-01-01';


task 10 •	Join with WHERE Clause:

SELECT e.first_name, e.last_name, d.department_name
FROM employees e
JOIN departments d ON e.department_id = d.department_id
WHERE d.department_name = 'Engineering';


TASK 11 •	Join with ON Clause:

SELECT orders.order_id, orders.order_date , customers.customer_name
FROM orders
JOIN customers
on orders.customer_id = customers.customer_id

TASK 12 •	Join with USING Clause

SELECT employees.employee_id, employees.first_name , departments.department_name
FROM employees 
JOIN departments USING (department_id)

TASK 13 •	Join with Group By:

SELECT c.customer_name, COUNT(o.order_id) AS total_orders
FROM orders o
JOIN customers c ON o.customer_id = c.customer_id
GROUP BY c.customer_name;


TASK 14 •	Join with HAVING Clause:

SELECT c.customer_name, COUNT(o.order_id) AS total_orders
FROM orders o
JOIN customers c ON o.customer_id = c.customer_id
GROUP BY c.customer_name
HAVING COUNT(o.order_id) > 5;


TASK 15 •	Join with CASE Statement:

SELECT e.employee_id, e.first_name, e.last_name, d.department_name,
       CASE
           WHEN d.department_name = 'HR' THEN 'Human Resources'
           WHEN d.department_name = 'Engineering' THEN 'Technical'
           
           ELSE 'Other'
       END AS department_classification
FROM employees e
JOIN departments d ON e.department_id = d.department_id;

TASK 16 •	Join with ORDER BY:

SELECT e.employee_id, e.first_name, d.department_name
FROM employees e
JOIN departments d ON e.department_id = d.department_id
ORDER BY d.department_name, e.last_name, e.first_name;



TASK 17 •	Inner Join:

SELECT e.employee_id, e.first_name, e.last_name, d.department_name, p.project_name
FROM employees e
JOIN departments d ON e.department_id = d.department_id
JOIN projects p ON e.employee_id = p.project_id;  


TASK 18 •	Left Join:

SELECT e.employee_id, e.first_name, e.last_name, p.project_name, c.client_name
FROM employees e
LEFT JOIN projects p ON e.employee_id = p.project_id  -- يفترض وجود علاقة بين الموظف والمشروع
LEFT JOIN clients c ON p.client_id = c.client_id;


TASK 19  •	Right Join:

SELECT d.department_name, e.employee_id, e.first_name,  s.amount 
FROM departments d
RIGHT JOIN employees e ON d.department_id = e.department_id
RIGHT JOIN salaries s ON e.employee_id = s.employee_id;


TASK 20 •	Full Outer Join:













*/