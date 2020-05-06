<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181008102953 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE software DROP slug, DROP heading, DROP maintext, DROP metatitle, DROP metadescription, DROP metakeywords, DROP navigation, DROP below_table_content');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE software ADD slug VARCHAR(64) NOT NULL COLLATE utf8_unicode_ci, ADD heading VARCHAR(255) DEFAULT NULL COLLATE utf8_unicode_ci, ADD maintext LONGTEXT DEFAULT NULL COLLATE utf8_unicode_ci, ADD metatitle VARCHAR(255) DEFAULT NULL COLLATE utf8_unicode_ci, ADD metadescription VARCHAR(255) DEFAULT NULL COLLATE utf8_unicode_ci, ADD metakeywords VARCHAR(255) DEFAULT NULL COLLATE utf8_unicode_ci, ADD navigation VARCHAR(255) DEFAULT NULL COLLATE utf8_unicode_ci, ADD below_table_content LONGTEXT NOT NULL COLLATE utf8_unicode_ci');
    }
}
