<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190327114329 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE custom_bonus CHANGE videopokerd videopokerd SMALLINT DEFAULT 0 NOT NULL, CHANGE crapsb crapsb SMALLINT DEFAULT 0 NOT NULL, CHANGE crapsd crapsd SMALLINT DEFAULT 0 NOT NULL, CHANGE baccaratb baccaratb SMALLINT DEFAULT 0 NOT NULL, CHANGE baccaratd baccaratd SMALLINT DEFAULT 0 NOT NULL, CHANGE pokergamesb pokergamesb SMALLINT DEFAULT 0 NOT NULL, CHANGE pokergamesd pokergamesd SMALLINT DEFAULT 0 NOT NULL, CHANGE casinowarb casinowarb SMALLINT DEFAULT 0 NOT NULL, CHANGE casinoward casinoward SMALLINT DEFAULT 0 NOT NULL, CHANGE sicbob sicbob SMALLINT DEFAULT 0 NOT NULL, CHANGE sicbod sicbod SMALLINT DEFAULT 0 NOT NULL, CHANGE americanrouletteb americanrouletteb SMALLINT DEFAULT 0 NOT NULL, CHANGE americanrouletted americanrouletted SMALLINT DEFAULT 0 NOT NULL, CHANGE otherrouletteb otherrouletteb SMALLINT DEFAULT 0 NOT NULL, CHANGE otherrouletted otherrouletted SMALLINT DEFAULT 0 NOT NULL, CHANGE slotsb slotsb SMALLINT DEFAULT 0 NOT NULL, CHANGE slotsd slotsd SMALLINT DEFAULT 0 NOT NULL, CHANGE parlorgamesb parlorgamesb SMALLINT DEFAULT 0 NOT NULL, CHANGE parlorgamesd parlorgamesd SMALLINT DEFAULT 0 NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE custom_bonus CHANGE videopokerd videopokerd TINYINT(1) DEFAULT \'0\' NOT NULL, CHANGE crapsb crapsb TINYINT(1) DEFAULT \'0\' NOT NULL, CHANGE crapsd crapsd TINYINT(1) DEFAULT \'0\' NOT NULL, CHANGE baccaratb baccaratb TINYINT(1) DEFAULT \'0\' NOT NULL, CHANGE baccaratd baccaratd TINYINT(1) DEFAULT \'0\' NOT NULL, CHANGE pokergamesb pokergamesb TINYINT(1) DEFAULT \'0\' NOT NULL, CHANGE pokergamesd pokergamesd TINYINT(1) DEFAULT \'0\' NOT NULL, CHANGE casinowarb casinowarb TINYINT(1) DEFAULT \'0\' NOT NULL, CHANGE casinoward casinoward TINYINT(1) DEFAULT \'0\' NOT NULL, CHANGE sicbob sicbob TINYINT(1) DEFAULT \'0\' NOT NULL, CHANGE sicbod sicbod TINYINT(1) DEFAULT \'0\' NOT NULL, CHANGE americanrouletteb americanrouletteb TINYINT(1) DEFAULT \'0\' NOT NULL, CHANGE americanrouletted americanrouletted TINYINT(1) DEFAULT \'0\' NOT NULL, CHANGE otherrouletteb otherrouletteb TINYINT(1) DEFAULT \'0\' NOT NULL, CHANGE otherrouletted otherrouletted TINYINT(1) DEFAULT \'0\' NOT NULL, CHANGE slotsb slotsb TINYINT(1) DEFAULT \'0\' NOT NULL, CHANGE slotsd slotsd TINYINT(1) DEFAULT \'0\' NOT NULL, CHANGE parlorgamesb parlorgamesb TINYINT(1) DEFAULT \'0\' NOT NULL, CHANGE parlorgamesd parlorgamesd TINYINT(1) DEFAULT \'0\' NOT NULL');
    }
}
