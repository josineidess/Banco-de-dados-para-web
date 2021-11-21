select name as name, CAST(salary*10/100 AS DECIMAL(10,2)) as tax from people 
where salary > 3000;
