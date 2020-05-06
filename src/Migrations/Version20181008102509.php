<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181008102509 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE country DROP slug, DROP metatitle, DROP metadescription, DROP metakeywords, DROP heading, DROP maintext, DROP below_table_text');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE country ADD slug VARCHAR(64) DEFAULT NULL COLLATE utf8_unicode_ci, ADD metatitle VARCHAR(255) DEFAULT NULL COLLATE utf8_unicode_ci, ADD metadescription VARCHAR(255) DEFAULT NULL COLLATE utf8_unicode_ci, ADD metakeywords VARCHAR(255) DEFAULT NULL COLLATE utf8_unicode_ci, ADD heading VARCHAR(255) DEFAULT NULL COLLATE utf8_unicode_ci, ADD maintext LONGTEXT DEFAULT NULL COLLATE utf8_unicode_ci, ADD below_table_text LONGTEXT DEFAULT NULL COLLATE utf8_unicode_ci');
    }
}
