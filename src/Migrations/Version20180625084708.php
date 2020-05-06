<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180625084708 extends AbstractMigration
{
    public function up(Schema $schema):void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE author (id INT AUTO_INCREMENT NOT NULL, authorname VARCHAR(32) NOT NULL, authorurl VARCHAR(32) NOT NULL, createdat DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE casino ADD reviewtextauthor_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE casino ADD CONSTRAINT FK_830F47976D61A33B FOREIGN KEY (reviewtextauthor_id) REFERENCES author (id)');
        $this->addSql('CREATE INDEX IDX_830F47976D61A33B ON casino (reviewtextauthor_id)');
    }

    public function down(Schema $schema):void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE casino DROP FOREIGN KEY FK_830F47976D61A33B');
        $this->addSql('DROP TABLE author');
        $this->addSql('DROP INDEX IDX_830F47976D61A33B ON casino');
        $this->addSql('ALTER TABLE casino DROP reviewtextauthor_id');
    }
}
