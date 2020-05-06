<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181016123817 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE article CHANGE mainfooter1 mainfooter1 TINYINT(1) DEFAULT \'1\' NOT NULL, CHANGE mainfooter2 mainfooter2 TINYINT(1) DEFAULT \'1\' NOT NULL');
        $this->addSql('ALTER TABLE news CHANGE mainfooter1 mainfooter1 TINYINT(1) DEFAULT \'1\' NOT NULL, CHANGE mainfooter2 mainfooter2 TINYINT(1) DEFAULT \'1\' NOT NULL');
        $this->addSql('ALTER TABLE country_list CHANGE mainfooter1 mainfooter1 TINYINT(1) DEFAULT \'1\' NOT NULL, CHANGE mainfooter2 mainfooter2 TINYINT(1) DEFAULT \'1\' NOT NULL');
        $this->addSql('ALTER TABLE softwares_list CHANGE mainfooter1 mainfooter1 TINYINT(1) DEFAULT \'1\' NOT NULL, CHANGE mainfooter2 mainfooter2 TINYINT(1) DEFAULT \'1\' NOT NULL');
        $this->addSql('ALTER TABLE bonus_value CHANGE mainfooter1 mainfooter1 TINYINT(1) DEFAULT \'1\' NOT NULL, CHANGE mainfooter2 mainfooter2 TINYINT(1) DEFAULT \'1\' NOT NULL');
        $this->addSql('ALTER TABLE games_list CHANGE mainfooter1 mainfooter1 TINYINT(1) DEFAULT \'1\' NOT NULL, CHANGE mainfooter2 mainfooter2 TINYINT(1) DEFAULT \'1\' NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE article CHANGE mainfooter1 mainfooter1 TINYINT(1) NOT NULL, CHANGE mainfooter2 mainfooter2 TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE bonus_value CHANGE mainfooter1 mainfooter1 TINYINT(1) NOT NULL, CHANGE mainfooter2 mainfooter2 TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE country_list CHANGE mainfooter1 mainfooter1 TINYINT(1) NOT NULL, CHANGE mainfooter2 mainfooter2 TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE games_list CHANGE mainfooter1 mainfooter1 TINYINT(1) NOT NULL, CHANGE mainfooter2 mainfooter2 TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE news CHANGE mainfooter1 mainfooter1 TINYINT(1) NOT NULL, CHANGE mainfooter2 mainfooter2 TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE softwares_list CHANGE mainfooter1 mainfooter1 TINYINT(1) NOT NULL, CHANGE mainfooter2 mainfooter2 TINYINT(1) NOT NULL');
    }
}
