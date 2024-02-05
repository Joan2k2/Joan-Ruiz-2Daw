<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240125194440 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE emp DROP FOREIGN KEY FK_310BB40FABAC2C0C');
        $this->addSql('DROP INDEX IDX_310BB40FABAC2C0C ON emp');
        $this->addSql('ALTER TABLE emp CHANGE repr_cod dept_no INT DEFAULT NULL');
        $this->addSql('ALTER TABLE emp ADD CONSTRAINT FK_310BB40FE6B0AD08 FOREIGN KEY (dept_no) REFERENCES dept (dept_no)');
        $this->addSql('CREATE INDEX IDX_310BB40FE6B0AD08 ON emp (dept_no)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE emp DROP FOREIGN KEY FK_310BB40FE6B0AD08');
        $this->addSql('DROP INDEX IDX_310BB40FE6B0AD08 ON emp');
        $this->addSql('ALTER TABLE emp CHANGE dept_no repr_cod INT DEFAULT NULL');
        $this->addSql('ALTER TABLE emp ADD CONSTRAINT FK_310BB40FABAC2C0C FOREIGN KEY (repr_cod) REFERENCES dept (dept_no)');
        $this->addSql('CREATE INDEX IDX_310BB40FABAC2C0C ON emp (repr_cod)');
    }
}