<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181001133728 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE country ADD countrylist_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE country ADD CONSTRAINT FK_5373C96684E51A7B FOREIGN KEY (countrylist_id) REFERENCES country_list (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_5373C96684E51A7B ON country (countrylist_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE country DROP FOREIGN KEY FK_5373C96684E51A7B');
        $this->addSql('DROP INDEX UNIQ_5373C96684E51A7B ON country');
        $this->addSql('ALTER TABLE country DROP countrylist_id');
    }
}
