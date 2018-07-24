SELECT * 
FROM articles 
JOIN users ON articles.id_user = users.id 
WHERE users.id = 10;