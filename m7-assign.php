a. Write a query to select all columns and rows from the employees table.

sql
Copy code
SELECT * FROM employees;


b. Write a query to select only the name and salary columns of all employees with a salary greater than 50000.

sql
Copy code
SELECT name, salary FROM employees WHERE salary > 50000;



c. Write a query to calculate the average salary of all employees.

sql
Copy code
SELECT AVG(salary) FROM employees;



d. Write a query to count the number of employees who work in the "Marketing" department.
SELECT COUNT(*) FROM employees WHERE department_id = (SELECT id FROM departments WHERE name = 'Marketing');


e. Write a query to update the salary column of the employee with an id of 1001 to 60000.
UPDATE employees SET salary = 60000 WHERE id = 1001;



//f. Write a query to delete all employees whose salary is less than 30000.

DELETE FROM employees WHERE salary < 30000;



//================================

This query deletes all employees from the employees table whose salary is less than 30000.

a. Write a query to select all columns and rows from the departments table.

DELETE FROM employees WHERE salary < 30000;


b. Write a query to select only the name and manager columns of the "Finance" department.
SELECT name, manager FROM departments WHERE name = 'Finance';


c. Write a query to calculate the total number of employees in each department.
SELECT departments.name, COUNT(*) FROM employees INNER JOIN departments ON employees.department_id = departments.id GROUP BY departments.name;



d. Write a query to insert a new department called "Research" with a manager named "John Doe".

INSERT INTO departments (name, manager) VALUES ('Research', 'John Doe');






















