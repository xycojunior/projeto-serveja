-- Tabela de LOGIN
CREATE TABLE `pessoa` IF NOT EXISTS.(
    `id` INT(255) NOT NULL AUTO_INCREMENT , 
    `nome` VARCHAR(255) NOT NULL , 
    `email` VARCHAR(255) NOT NULL , 
    `CPF` VARCHAR(11) NOT NULL , 
    PRIMARY KEY (`id`)
);
