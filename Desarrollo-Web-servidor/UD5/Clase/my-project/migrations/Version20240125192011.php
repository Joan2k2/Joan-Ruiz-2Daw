<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240125192011 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE cliente RENAME INDEX idx_f41c9b25890ab892 TO IDX_F41C9B25ABAC2C0C');
        $this->addSql('ALTER TABLE emp DROP FOREIGN KEY FK_310BB40FB89AE546');
        $this->addSql('DROP INDEX IDX_310BB40FB89AE546 ON emp');
        $this->addSql('ALTER TABLE emp CHANGE dept_no repr_cod INT DEFAULT NULL');
        $this->addSql('ALTER TABLE emp ADD CONSTRAINT FK_310BB40FABAC2C0C FOREIGN KEY (repr_cod) REFERENCES dept (dept_no)');
        $this->addSql('CREATE INDEX IDX_310BB40FABAC2C0C ON emp (repr_cod)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE emp DROP FOREIGN KEY FK_310BB40FABAC2C0C');
        $this->addSql('DROP INDEX IDX_310BB40FABAC2C0C ON emp');
        $this->addSql('ALTER TABLE emp CHANGE repr_cod dept_no INT DEFAULT NULL');
        $this->addSql('ALTER TABLE emp ADD CONSTRAINT FK_310BB40FB89AE546 FOREIGN KEY (dept_no) REFERENCES dept (dept_no)');
        $this->addSql('CREATE INDEX IDX_310BB40FB89AE546 ON emp (dept_no)');
        $this->addSql('ALTER TABLE cliente RENAME INDEX idx_f41c9b25abac2c0c TO IDX_F41C9B25890AB892');
    }
}
