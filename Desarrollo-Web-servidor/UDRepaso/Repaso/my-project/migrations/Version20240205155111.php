<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240205155111 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE productos (product_no INT AUTO_INCREMENT NOT NULL, dept_no INT DEFAULT NULL, nombre VARCHAR(255) NOT NULL, precio INT NOT NULL, INDEX IDX_767490E6E6B0AD08 (dept_no), PRIMARY KEY(product_no)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE productos ADD CONSTRAINT FK_767490E6E6B0AD08 FOREIGN KEY (dept_no) REFERENCES dept (dept_no)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE productos DROP FOREIGN KEY FK_767490E6E6B0AD08');
        $this->addSql('DROP TABLE productos');
    }
}
