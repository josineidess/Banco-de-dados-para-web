select name from customers
where id in (select id_customers from legal_person);