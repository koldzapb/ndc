<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181011103939 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE article ADD metatitle VARCHAR(255) DEFAULT NULL, ADD heading VARCHAR(255) DEFAULT NULL, ADD content LONGTEXT DEFAULT NULL, DROP interest_section');
        $this->addSql('ALTER TABLE news ADD metatitle VARCHAR(255) DEFAULT NULL, ADD heading VARCHAR(255) DEFAULT NULL, ADD content LONGTEXT DEFAULT NULL');
        $this->addSql('ALTER TABLE main_page ADD metatitle VARCHAR(255) NOT NULL, ADD heading VARCHAR(255) NOT NULL, ADD content LONGTEXT NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE article ADD interest_section TINYINT(1) DEFAULT NULL, DROP metatitle, DROP heading, DROP content');
        $this->addSql('ALTER TABLE main_page DROP metatitle, DROP heading, DROP content');
        $this->addSql('ALTER TABLE news DROP metatitle, DROP heading, DROP content');
    }
}
