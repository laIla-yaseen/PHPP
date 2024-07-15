<?php
/*
task 1
   // فهم قواعد البيانات
**Understanding Databases**

A database is an organized system for storing and managing data.
 Think of it like a digital filing cabinet where information is kept in a structured way, 
 making it easy to find and use. 
 Databases store various types of data in tables, which are like spreadsheets with rows and columns.
  These tables can be linked together to show relationships between different pieces of information. 
  For example, a database might store customer information in one table and their orders in another,
   linking them so you can easily see which customer made which order.

   // أساسيات SQL
**SQL Basics**

SQL, or Structured Query Language, is a language used to communicate with and manage databases. 
It lets you perform tasks such as retrieving data, adding new information, updating existing records, and deleting data. 
SQL provides a standard way to interact with databases, making it essential for efficiently handling and manipulating data. 
For instance, if you want to find all orders made by a specific customer, you would use SQL to query the database and get the results.

task 2

 Types of Databases

**1. Comparison Chart: Relational vs. Non-Relational Databases**

| **Aspect**         | **Relational Databases**                     | **Non-Relational Databases**                |
|--------------------|---------------------------------------------|--------------------------------------------|
| **Data Structure** | Uses tables with rows and columns.          | Uses various formats like key-value pairs, documents, or graphs. |
| **Schema**         | Requires a fixed schema.                    | Schema can be flexible or dynamic.         |
| **Query Language** | Uses SQL for queries.                       | Uses different query languages or APIs.    |
| **Examples**       | MySQL, PostgreSQL, Oracle Database           | MongoDB, Redis, Neo4j                      |

**2. Research: Summary on MySQL**

MySQL is an open-source relational database management system that uses SQL to manage and query data.
 It stores data in structured tables and supports transactions to ensure data reliability. 
 It is popular for web applications, e-commerce sites, and data warehousing due to its scalability,
  performance, and strong community support.

task 3

// أنواع البيانات الرقمية في MySQL
### Numeric Data Types in MySQL

Here are the main numeric data types in MySQL, with simple descriptions and examples:

1. **INT (Integer)**
   - **Description**: Stores whole numbers.
   - **Examples**: `10`, `-50`, `1000`

2. **FLOAT**
   - **Description**: Stores numbers with decimal points, but with approximate precision.
   - **Examples**: `3.14`, `-0.75`

3. **DOUBLE**
   - **Description**: Stores numbers with decimal points, with more precision than FLOAT.
   - **Examples**: `123.456789`, `-9876.54321`

4. **DECIMAL**
   - **Description**: Stores exact numbers with a fixed number of decimal places.
   - **Examples**: `99.99`, `12345.67`
task 4
// أنواع البيانات النصية في MySQL

### String Data Types in MySQL

Here are the main string data types in MySQL, with simple descriptions and examples:

1. **CHAR**
   - **Description**: Fixed-length strings. Short strings are padded with spaces.
   - **Examples**: `CHAR(5)` might store `abc  ` (with spaces).

2. **VARCHAR**
   - **Description**: Variable-length strings. No extra spaces are added.
   - **Examples**: `VARCHAR(10)` can store `hello` or `world123`.

3. **TEXT**
   - **Description**: Long text strings, up to 65,535 characters.
   - **Examples**: `TEXT` can store paragraphs or lengthy descriptions.

4. **MEDIUMTEXT**
   - **Description**: Medium-length text, up to 16,777,215 characters.
   - **Examples**: `MEDIUMTEXT` can store very long documents.

5. **LONGTEXT**
   - **Description**: Very long text, up to 4,294,967,295 characters.
   - **Examples**: `LONGTEXT` is used for extremely large texts like books.

6. **BINARY**
   - **Description**: Fixed-length binary data.
   - **Examples**: `BINARY(4)` stores 4 bytes of binary data.

7. **VARBINARY**
   - **Description**: Variable-length binary data.
   - **Examples**: `VARBINARY(255)` stores up to 255 bytes of binary data.
task 5
//أنواع بيانات التاريخ والوقت في MySQL


### Date and Time Data Types in MySQL

Here are the main date and time data types in MySQL:

1. **DATE**
   - **Description**: Stores dates (year, month, day).
   - **Examples**: `2024-07-15`, `1999-12-31`

2. **DATETIME**
   - **Description**: Stores both date and time.
   - **Examples**: `2024-07-15 14:30:00`, `1999-12-31 23:59:59`

3. **TIMESTAMP**
   - **Description**: Stores date and time with timezone info, used for tracking changes.
   - **Examples**: `2024-07-15 14:30:00`, `1999-12-31 23:59:59`

4. **TIME**
   - **Description**: Stores time of day.
   - **Examples**: `14:30:00`, `23:59:59`

5. **YEAR**
   - **Description**: Stores just the year.
   - **Examples**: `2024`, `1999`

task 6
 // شرح المفاتيح الرئيسية (Primary Keys)
### Explanation of Primary Keys

A primary key is a unique identifier for each record in a database table. It ensures that each record is distinct and can be easily found. 

**Importance:**
- **Uniqueness**: No two records can have the same primary key.
- **Efficient Access**: Helps quickly find and access specific records.
- **Relationships**: Links records across different tables.

In short, a primary key helps keep data organized and easily retrievable.

task 7

// الفرق بين قيود NULL و NOT NULL

### Difference Between NULL and NOT NULL Constraints

**NULL Constraint:**
- **Description**: Allows a column to have no value (empty or missing data).
- **Example**: 
  ```sql
  INSERT INTO employees (first_name, last_name, middle_name) VALUES ('Alice', 'Smith', NULL);
  ```

**NOT NULL Constraint:**
- **Description**: Requires a column to always have a value; it cannot be empty.
- **Example**: 
  ```sql
  INSERT INTO employees (first_name, last_name, email) VALUES ('Bob', 'Brown', 'bob.brown@example.com');
  ```

**Summary**: 
- **NULL**: Data can be missing.
- **NOT NULL**: Data must be present.

task 8

//بزيادة القيمة في عمود تلقائيًا 

### Explanation of AUTO_INCREMENT

**AUTO_INCREMENT** is a MySQL feature that automatically increases the value in a column each time a new record is added. It's often used for unique IDs.

**Example:**

1. Create a table with an AUTO_INCREMENT column:
   ```sql
   CREATE TABLE employees (
       id INT AUTO_INCREMENT PRIMARY KEY,
       first_name VARCHAR(50),
       last_name VARCHAR(50)
   );
   ```

2. Insert records without specifying the `id`:
   ```sql
   INSERT INTO employees (first_name, last_name) VALUES ('Alice', 'Johnson');
   INSERT INTO employees (first_name, last_name) VALUES ('Bob', 'Smith');
   ```

**Results:**

The `id` column will automatically have values `1`, `2`, etc., for each new record.

**Summary**: AUTO_INCREMENT automatically assigns a unique number to each new record in a column.

task 9-10-11-12
    1. CREATE DATABASE StudentDB ;

    2.CREATE TABLE STUDENTS (
ID INT PRIMARY KEY AUTO_INCREMENT,
    NAME VARCHAR(100) NOT NULL , 
    EMAIL VARCHAR(100) ,
    ENROLLMENT_DATE DATe 

);

3. INSERT INTO students (NAME , EMAIL , ENROLLMENT_DATE)
VALUES ('LOLO' , 'LOLO.doe@example.com' , '2024-08-28');

INSERT INTO students (NAME , EMAIL , ENROLLMENT_DATE)
VALUES ('RORO' , 'RORO.doe@example.com' , '2024-04-14');

4. UPDATE students SET EMAIL='LAILA.email@example.com' WHERE ID = 1 ;

5. DELETE FROM students WHERE ID =1 ;

6. USE studentdb ;

task 13-14-15

1. CREATE DATABASE PracticeDB ;

2. CREATE TABLE Employees (
    emp_id INT AUTO_INCREMENT PRIMARY KEY,
    emp_name VARCHAR(100) NOT NULL,
    emp_position VARCHAR(100),
    hire_date DATE
);

3. CREATE TABLE managers (
    name  CHAR(20),
salaries DECIMAL(10, 2),
  working_time time 

);

4.INSERT INTO Employees (emp_name, emp_position, hire_date) VALUES
('John Doe', 'Software Engineer', '2023-01-15'),
('Jane Smith', 'Marketing Manager', '2022-05-23'),
('Emily Johnson', 'Product Designer', '2024-03-10');

5. UPDATE Employees
SET emp_position = 'Senior Marketing Manager'
WHERE emp_name = 'Jane Smith';

6. UPDATE Employees
SET emp_position = 'Senior Marketing Manager'
WHERE emp_name = 'Jane Smith';

7.DELETE FROM Employees
WHERE emp_name = 'John Doe';



















*/