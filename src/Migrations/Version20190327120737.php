<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190327120737 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE custom_bonus CHANGE casinowar casinowar INT DEFAULT 0 NOT NULL, CHANGE casinowarb casinowarb TINYINT(1) NOT NULL, CHANGE casinoward casinoward TINYINT(1) NOT NULL, CHANGE sicbo sicbo INT DEFAULT 0 NOT NULL, CHANGE sicbob sicbob TINYINT(1) NOT NULL, CHANGE sicbod sicbod SMALLINT NOT NULL, CHANGE americanroulette americanroulette INT DEFAULT 0 NOT NULL, CHANGE americanrouletteb americanrouletteb TINYINT(1) NOT NULL, CHANGE americanrouletted americanrouletted TINYINT(1) NOT NULL, CHANGE otherroulette otherroulette INT DEFAULT 0 NOT NULL, CHANGE otherrouletteb otherrouletteb TINYINT(1) NOT NULL, CHANGE otherrouletted otherrouletted TINYINT(1) NOT NULL, CHANGE slots slots INT DEFAULT 0 NOT NULL, CHANGE slotsb slotsb TINYINT(1) NOT NULL, CHANGE slotsd slotsd TINYINT(1) NOT NULL, CHANGE parlorgames parlorgames INT DEFAULT 0 NOT NULL, CHANGE parlorgamesb parlorgamesb TINYINT(1) NOT NULL, CHANGE parlorgamesd parlorgamesd TINYINT(1) DEFAULT \'0\' NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE custom_bonus CHANGE casinowar casinowar SMALLINT DEFAULT 0 NOT NULL, CHANGE casinowarb casinowarb SMALLINT DEFAULT 0 NOT NULL, CHANGE casinoward casinoward SMALLINT DEFAULT 0 NOT NULL, CHANGE sicbo sicbo SMALLINT DEFAULT 0 NOT NULL, CHANGE sicbob sicbob SMALLINT DEFAULT 0 NOT NULL, CHANGE sicbod sicbod SMALLINT DEFAULT 0 NOT NULL, CHANGE americanroulette americanroulette SMALLINT DEFAULT 0 NOT NULL, CHANGE americanrouletteb americanrouletteb SMALLINT DEFAULT 0 NOT NULL, CHANGE americanrouletted americanrouletted SMALLINT DEFAULT 0 NOT NULL, CHANGE otherroulette otherroulette SMALLINT DEFAULT 0 NOT NULL, CHANGE otherrouletteb otherrouletteb SMALLINT DEFAULT 0 NOT NULL, CHANGE otherrouletted otherrouletted SMALLINT DEFAULT 0 NOT NULL, CHANGE slots slots SMALLINT DEFAULT 0 NOT NULL, CHANGE slotsb slotsb SMALLINT DEFAULT 0 NOT NULL, CHANGE slotsd slotsd SMALLINT DEFAULT 0 NOT NULL, CHANGE parlorgames parlorgames SMALLINT DEFAULT 0 NOT NULL, CHANGE parlorgamesb parlorgamesb SMALLINT DEFAULT 0 NOT NULL, CHANGE parlorgamesd parlorgamesd SMALLINT DEFAULT 0 NOT NULL');
    }
}
