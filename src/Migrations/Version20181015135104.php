<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181015135104 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE article CHANGE metadescription metadescription VARCHAR(320) DEFAULT NULL, CHANGE metatitle metatitle VARCHAR(70) DEFAULT NULL');
        $this->addSql('ALTER TABLE news CHANGE metadescription metadescription VARCHAR(320) DEFAULT NULL, CHANGE metatitle metatitle VARCHAR(70) DEFAULT NULL');
        $this->addSql('ALTER TABLE country_list CHANGE metatitle metatitle VARCHAR(110) DEFAULT NULL, CHANGE metadescription metadescription VARCHAR(320) DEFAULT NULL');
        $this->addSql('ALTER TABLE softwares_list CHANGE metatitle metatitle VARCHAR(70) DEFAULT NULL, CHANGE metadescription metadescription VARCHAR(320) DEFAULT NULL');
        $this->addSql('ALTER TABLE bonus_value CHANGE metaTitle metatitle VARCHAR(70) NOT NULL, CHANGE metaDescription metadescription VARCHAR(320) NOT NULL');
        $this->addSql('ALTER TABLE casino CHANGE metakeywords metakeywords VARCHAR(320) DEFAULT NULL, CHANGE title title VARCHAR(70) DEFAULT NULL');
        $this->addSql('ALTER TABLE main_page CHANGE metadescription metadescription VARCHAR(320) NOT NULL, CHANGE metatitle metatitle VARCHAR(70) NOT NULL');
        $this->addSql('ALTER TABLE games_list CHANGE metatitle metatitle VARCHAR(70) DEFAULT NULL, CHANGE metadescription metadescription VARCHAR(320) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE article CHANGE metatitle metatitle VARCHAR(255) DEFAULT NULL COLLATE utf8_unicode_ci, CHANGE metadescription metadescription VARCHAR(255) DEFAULT NULL COLLATE utf8_unicode_ci');
        $this->addSql('ALTER TABLE bonus_value CHANGE metatitle metaTitle VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, CHANGE metadescription metaDescription VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE casino CHANGE metakeywords metakeywords VARCHAR(255) DEFAULT NULL COLLATE utf8_unicode_ci, CHANGE title title VARCHAR(512) DEFAULT NULL COLLATE utf8_unicode_ci');
        $this->addSql('ALTER TABLE country_list CHANGE metatitle metatitle VARCHAR(255) DEFAULT NULL COLLATE utf8_unicode_ci, CHANGE metadescription metadescription VARCHAR(255) DEFAULT NULL COLLATE utf8_unicode_ci');
        $this->addSql('ALTER TABLE games_list CHANGE metatitle metatitle VARCHAR(255) DEFAULT NULL COLLATE utf8_unicode_ci, CHANGE metadescription metadescription VARCHAR(255) DEFAULT NULL COLLATE utf8_unicode_ci');
        $this->addSql('ALTER TABLE main_page CHANGE metatitle metatitle VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, CHANGE metadescription metadescription VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci');
        $this->addSql('ALTER TABLE news CHANGE metatitle metatitle VARCHAR(255) DEFAULT NULL COLLATE utf8_unicode_ci, CHANGE metadescription metadescription VARCHAR(255) DEFAULT NULL COLLATE utf8_unicode_ci');
        $this->addSql('ALTER TABLE softwares_list CHANGE metatitle metatitle VARCHAR(255) DEFAULT NULL COLLATE utf8_unicode_ci, CHANGE metadescription metadescription VARCHAR(255) DEFAULT NULL COLLATE utf8_unicode_ci');
    }
}
