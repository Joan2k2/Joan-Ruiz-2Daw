<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240125190026 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE cliente ADD repr_cod INT DEFAULT NULL');
        $this->addSql('ALTER TABLE cliente ADD CONSTRAINT FK_F41C9B25890AB892 FOREIGN KEY (repr_cod) REFERENCES emp (emp_no)');
        $this->addSql('CREATE INDEX IDX_F41C9B25890AB892 ON cliente (repr_cod)');
        $this->addSql('ALTER TABLE emp ADD dept_no INT DEFAULT NULL');
        $this->addSql('ALTER TABLE emp ADD CONSTRAINT FK_310BB40FB89AE546 FOREIGN KEY (dept_no) REFERENCES dept (dept_no)');
        $this->addSql('CREATE INDEX IDX_310BB40FB89AE546 ON emp (dept_no)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE emp DROP FOREIGN KEY FK_310BB40FB89AE546');
        $this->addSql('DROP INDEX IDX_310BB40FB89AE546 ON emp');
        $this->addSql('ALTER TABLE emp DROP dept_no');
        $this->addSql('ALTER TABLE cliente DROP FOREIGN KEY FK_F41C9B25890AB892');
        $this->addSql('DROP INDEX IDX_F41C9B25890AB892 ON cliente');
        $this->addSql('ALTER TABLE cliente DROP repr_cod');
    }
}
