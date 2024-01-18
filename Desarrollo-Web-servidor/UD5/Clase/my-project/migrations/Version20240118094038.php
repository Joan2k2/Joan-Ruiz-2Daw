<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240118094038 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
       
        $this->addSql('ALTER TABLE emp ADD dept_no_id INT NOT NULL');
        $this->addSql('ALTER TABLE emp ADD CONSTRAINT FK_310BB40FB89AE546 FOREIGN KEY (dept_no_id) REFERENCES dept (DEPT_NO)');
        $this->addSql('CREATE INDEX IDX_310BB40FB89AE546 ON emp (dept_no_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE emp DROP FOREIGN KEY FK_310BB40FB89AE546');
        $this->addSql('DROP INDEX IDX_310BB40FB89AE546 ON emp');
        $this->addSql('ALTER TABLE emp DROP dept_no_id');
       
    }
}
