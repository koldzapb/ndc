<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181003112543 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE softwares_list ADD metatitle VARCHAR(255) DEFAULT NULL, ADD metadescription VARCHAR(255) DEFAULT NULL, ADD metakeywords VARCHAR(255) DEFAULT NULL, ADD content LONGTEXT DEFAULT NULL, ADD below_content LONGTEXT DEFAULT NULL, ADD mainfooter1 TINYINT(1) NOT NULL, ADD mainfooter2 TINYINT(1) NOT NULL, CHANGE page_title heading VARCHAR(64) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE softwares_list DROP metatitle, DROP metadescription, DROP metakeywords, DROP content, DROP below_content, DROP mainfooter1, DROP mainfooter2, CHANGE heading page_title VARCHAR(64) DEFAULT NULL COLLATE utf8_unicode_ci');
    }
}
