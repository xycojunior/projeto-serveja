-- Tabela de LOGIN
CREATE TABLE `user_db` IF NOT EXISTS.(
    `id` INT(255) NOT NULL , 
    `nome` VARCHAR(255) NOT NULL , 
    `email` VARCHAR(255) NOT NULL , 
    `user_type` VARCHAR(255) NOT NULL , 
    PRIMARY KEY (`id`)
);
