<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181003090414 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE games_list ADD mainfooter1 TINYINT(1) NOT NULL, ADD mainfooter2 TINYINT(1) NOT NULL, CHANGE page_title heading VARCHAR(64) DEFAULT NULL, CHANGE below_table_content below_content LONGTEXT NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE games_list DROP mainfooter1, DROP mainfooter2, CHANGE heading page_title VARCHAR(64) DEFAULT NULL COLLATE utf8_unicode_ci, CHANGE below_content below_table_content LONGTEXT NOT NULL COLLATE utf8_unicode_ci');
    }
}
