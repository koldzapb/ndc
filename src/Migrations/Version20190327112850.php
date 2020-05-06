<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190327112850 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE custom_bonus CHANGE classicblackjack classicblackjack SMALLINT DEFAULT 0 NOT NULL, CHANGE classicblackjackb classicblackjackb TINYINT(1) DEFAULT \'0\' NOT NULL, CHANGE classicblackjackd classicblackjackd TINYINT(1) DEFAULT \'0\' NOT NULL, CHANGE otherblackjack otherblackjack SMALLINT DEFAULT 0 NOT NULL, CHANGE otherblackjackb otherblackjackb TINYINT(1) DEFAULT \'0\' NOT NULL, CHANGE otherblackjackd otherblackjackd TINYINT(1) DEFAULT \'0\' NOT NULL, CHANGE videopoker videopoker SMALLINT DEFAULT 0 NOT NULL, CHANGE videopokerb videopokerb SMALLINT DEFAULT 0 NOT NULL, CHANGE videopokerd videopokerd TINYINT(1) DEFAULT \'0\' NOT NULL, CHANGE craps craps SMALLINT DEFAULT 0 NOT NULL, CHANGE crapsb crapsb TINYINT(1) DEFAULT \'0\' NOT NULL, CHANGE crapsd crapsd TINYINT(1) DEFAULT \'0\' NOT NULL, CHANGE baccarat baccarat SMALLINT DEFAULT 0 NOT NULL, CHANGE baccaratb baccaratb TINYINT(1) DEFAULT \'0\' NOT NULL, CHANGE baccaratd baccaratd TINYINT(1) DEFAULT \'0\' NOT NULL, CHANGE pokergames pokergames SMALLINT DEFAULT 0 NOT NULL, CHANGE pokergamesb pokergamesb TINYINT(1) DEFAULT \'0\' NOT NULL, CHANGE pokergamesd pokergamesd TINYINT(1) DEFAULT \'0\' NOT NULL, CHANGE casinowar casinowar SMALLINT DEFAULT 0 NOT NULL, CHANGE casinowarb casinowarb TINYINT(1) DEFAULT \'0\' NOT NULL, CHANGE casinoward casinoward TINYINT(1) DEFAULT \'0\' NOT NULL, CHANGE sicbo sicbo SMALLINT DEFAULT 0 NOT NULL, CHANGE sicbob sicbob TINYINT(1) DEFAULT \'0\' NOT NULL, CHANGE sicbod sicbod TINYINT(1) DEFAULT \'0\' NOT NULL, CHANGE americanroulette americanroulette SMALLINT DEFAULT 0 NOT NULL, CHANGE americanrouletteb americanrouletteb TINYINT(1) DEFAULT \'0\' NOT NULL, CHANGE americanrouletted americanrouletted TINYINT(1) DEFAULT \'0\' NOT NULL, CHANGE otherroulette otherroulette SMALLINT DEFAULT 0 NOT NULL, CHANGE otherrouletteb otherrouletteb TINYINT(1) DEFAULT \'0\' NOT NULL, CHANGE otherrouletted otherrouletted TINYINT(1) DEFAULT \'0\' NOT NULL, CHANGE slots slots SMALLINT DEFAULT 0 NOT NULL, CHANGE slotsb slotsb TINYINT(1) DEFAULT \'0\' NOT NULL, CHANGE slotsd slotsd TINYINT(1) DEFAULT \'0\' NOT NULL, CHANGE parlorgames parlorgames SMALLINT DEFAULT 0 NOT NULL, CHANGE parlorgamesb parlorgamesb TINYINT(1) DEFAULT \'0\' NOT NULL, CHANGE parlorgamesd parlorgamesd TINYINT(1) DEFAULT \'0\' NOT NULL, CHANGE bonusgiven bonusgiven TINYINT(1) DEFAULT \'0\' NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE custom_bonus CHANGE classicblackjack classicblackjack SMALLINT NOT NULL, CHANGE classicblackjackb classicblackjackb TINYINT(1) NOT NULL, CHANGE classicblackjackd classicblackjackd TINYINT(1) NOT NULL, CHANGE otherblackjack otherblackjack SMALLINT NOT NULL, CHANGE otherblackjackb otherblackjackb TINYINT(1) NOT NULL, CHANGE otherblackjackd otherblackjackd TINYINT(1) NOT NULL, CHANGE videopoker videopoker SMALLINT NOT NULL, CHANGE videopokerb videopokerb SMALLINT NOT NULL, CHANGE videopokerd videopokerd TINYINT(1) NOT NULL, CHANGE craps craps SMALLINT NOT NULL, CHANGE crapsb crapsb TINYINT(1) NOT NULL, CHANGE crapsd crapsd TINYINT(1) NOT NULL, CHANGE baccarat baccarat SMALLINT NOT NULL, CHANGE baccaratb baccaratb TINYINT(1) NOT NULL, CHANGE baccaratd baccaratd TINYINT(1) NOT NULL, CHANGE pokergames pokergames SMALLINT NOT NULL, CHANGE pokergamesb pokergamesb TINYINT(1) NOT NULL, CHANGE pokergamesd pokergamesd TINYINT(1) NOT NULL, CHANGE casinowar casinowar SMALLINT NOT NULL, CHANGE casinowarb casinowarb TINYINT(1) NOT NULL, CHANGE casinoward casinoward TINYINT(1) NOT NULL, CHANGE sicbo sicbo SMALLINT NOT NULL, CHANGE sicbob sicbob TINYINT(1) NOT NULL, CHANGE sicbod sicbod TINYINT(1) NOT NULL, CHANGE americanroulette americanroulette SMALLINT NOT NULL, CHANGE americanrouletteb americanrouletteb TINYINT(1) NOT NULL, CHANGE americanrouletted americanrouletted TINYINT(1) NOT NULL, CHANGE otherroulette otherroulette SMALLINT NOT NULL, CHANGE otherrouletteb otherrouletteb TINYINT(1) NOT NULL, CHANGE otherrouletted otherrouletted TINYINT(1) NOT NULL, CHANGE slots slots SMALLINT NOT NULL, CHANGE slotsb slotsb TINYINT(1) NOT NULL, CHANGE slotsd slotsd TINYINT(1) NOT NULL, CHANGE parlorgames parlorgames SMALLINT NOT NULL, CHANGE parlorgamesb parlorgamesb TINYINT(1) NOT NULL, CHANGE parlorgamesd parlorgamesd TINYINT(1) NOT NULL, CHANGE bonusgiven bonusgiven TINYINT(1) NOT NULL');
    }
}
