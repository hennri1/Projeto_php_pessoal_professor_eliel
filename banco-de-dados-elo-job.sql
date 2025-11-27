-- -----------------------------------------------------
-- Schema elo-job-lol
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `elo_job_lol` DEFAULT CHARACTER SET utf8 ;
USE `elo_job_lol` ;

-- -----------------------------------------------------
-- Table `elo_job_lol`.`jogador`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `elo_job_lol`.`jogador` (
  `id_jogador` INT NOT NULL AUTO_INCREMENT,
  `nome_jogador` VARCHAR(100) NOT NULL,
  `email_jogador` VARCHAR(100) NULL,
  `discord_jogador` VARCHAR(20) NULL,
  PRIMARY KEY (`id_jogador`)
) ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table `elo_job_lol`.`boostador`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `elo_job_lol`.`boostador` (
  `id_boostador` INT NOT NULL AUTO_INCREMENT,
  `nome_boostador` VARCHAR(100) NOT NULL,
  `discord_boostador` VARCHAR(20) NULL,
  `email_boostador` VARCHAR(100) NULL,
  PRIMARY KEY (`id_boostador`)
) ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table `elo_job_lol`.`servico`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `elo_job_lol`.`servico` (
  `id_servico` INT NOT NULL AUTO_INCREMENT,
  `jogador_id` INT NOT NULL,
  `boostador_id` INT NOT NULL,
  `rank_id` INT NOT NULL,
  `data_solicitacao` DATETIME NULL,
  `valor_servico` DECIMAL(10,2) NULL,
  PRIMARY KEY (`id_servico`),
  INDEX `fk_servico_jogador_idx` (`jogador_id` ASC),
  INDEX `fk_servico_boostador_idx` (`boostador_id` ASC),
  INDEX `fk_servico_rank_idx` (`rank_id` ASC),
  CONSTRAINT `fk_servico_jogador`
    FOREIGN KEY (`jogador_id`)
    REFERENCES `elo_job_lol`.`jogador` (`id_jogador`),
  CONSTRAINT `fk_servico_boostador`
    FOREIGN KEY (`boostador_id`)
    REFERENCES `elo_job_lol`.`boostador` (`id_boostador`),
  CONSTRAINT `fk_servico_rank`
    FOREIGN KEY (`rank_id`)
    REFERENCES `elo_job_lol`.`rank` (`id_rank`)
) ENGINE = InnoDB;
