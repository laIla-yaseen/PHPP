<?php
/*

task 1    استرجاع البيانات من جدول

SELEST * FROM employees ;

task 2    استرجاع أعمدة محددة

SELEST name ,salary FROM employees ;

task 3   تصفية النتائج باستخدام شرط 

SELEST * FROM employees WHERE salary > 50000;

task 4    استخدام عامل LIKE للبحث بالنمط

SELEST * FROM employees WHERE name LIKE "j%" ;

task 5     استخدام عامل IN لتصفية البيانات

SELECT * FROM employees WHERE department_id IN (1, 2, 3);


task 6   ترتيب نتائج الاستعلام

SELECT * FROM employees ORDER BY hire_date DESC;

TASK 7   حساب عدد الأسطر

SELECT COUNT(*) FROM employees; 

TASK 8    حساب مجموع عمود

SELECT SUM(salary) FROM employees ;

task 9     حساب متوسط عمود

SELECT AVG(salary) FROM employees ;

task 10     العثور على القيم الدنيا والعليا

SELECT MIN(salary) FROM employees ;

SELECT MAX(salary) FROM employees ;

task 11  ما الفرق بين EHERE & HAVING
 
SELECT *
FROM employees
WHERE salary > 50000;

SELECT department_id, AVG(salary) AS average_salary
FROM employees
GROUP BY department_id
HAVING AVG(salary) > 50000;


task 12 one _to_one

 FOREIGN KEY (employee_id) REFERENCES employees(employee_id)

 task 13 one_to_many 

     FOREIGN KEY (department_id) REFERENCES departments(department_id)

     task 14 many_to_many 

      PRIMARY KEY (student_id, course_id),
    FOREIGN KEY (student_id) REFERENCES students(student_id),
    FOREIGN KEY (course_id) REFERENCES courses(course_id)


    task 15 

    ALTER TABLE employees
ADD CONSTRAINT fk_department
FOREIGN KEY (department_id)
REFERENCES departments(department_id);


task 16

ALTER TABLE employees
MODIFY name VARCHAR(100) NOT NULL;


task 17 

ALTER TABLE employees
ADD CONSTRAINT unique_email
UNIQUE (email);


task 18

ALTER TABLE employees
ADD CONSTRAINT check_salary
CHECK (salary > 0);


task 19 

ALTER TABLE employees
ADD status VARCHAR(20) DEFAULT 'Active';




























*/