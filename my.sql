-- 2. Создать файл my.sql, в котором должна создаваться таблица с информацией об одногруппниках. 
-- В таблице должно быть четыре поля: id, name, age, address. Все поля в таблице обязательны для заполнения.
-- Необходимо добавить 5-10 одногруппников в данную таблицу.
-- Необходимо написать запрос на получение имен всех одногруппников (только имен, без всего остального), 
-- которые живут в Москве и их возраст находится в диапазоне [18, 30) лет. 


-- create
CREATE TABLE classmate (
  Id INTEGER PRIMARY KEY,
  name    TEXT NOT NULL,
  age     TEXT NOT NULL,
  address TEXT NOT NULL
);

-- insert
INSERT INTO classmate VALUES (1, 'Илья', '29', 'г. Москва, ул. Ленина 105');
INSERT INTO classmate VALUES (2, 'Пётр', '47', 'г. Сочи, ул. Сталина 9');
INSERT INTO classmate VALUES (3, 'Евгения', '22', 'г. Москва, ул. Центральная 1');
INSERT INTO classmate VALUES (4, 'Ирина', '56', 'г. Владивосток, ул. Летняя 25');
INSERT INTO classmate VALUES (5, 'Луна', '70', 'г. Москва, ул. Пустая 60');


-- fetch
SELECT name FROM classmate WHERE address like '%Москва%' and age >= 18 and age < 30;