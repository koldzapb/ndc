<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190327120325 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE custom_bonus CHANGE classicblackjack classicblackjack INT DEFAULT 0 NOT NULL, CHANGE classicblackjackb classicblackjackb TINYINT(1) NOT NULL, CHANGE classicblackjackd classicblackjackd TINYINT(1) NOT NULL, CHANGE otherblackjack otherblackjack INT DEFAULT 0 NOT NULL, CHANGE otherblackjackb otherblackjackb TINYINT(1) NOT NULL, CHANGE otherblackjackd otherblackjackd TINYINT(1) NOT NULL, CHANGE videopoker videopoker INT DEFAULT 0 NOT NULL, CHANGE craps craps INT DEFAULT 0 NOT NULL, CHANGE crapsd crapsd TINYINT(1) NOT NULL, CHANGE baccarat baccarat INT DEFAULT 0 NOT NULL, CHANGE baccaratb baccaratb TINYINT(1) NOT NULL, CHANGE baccaratd baccaratd TINYINT(1) NOT NULL, CHANGE pokergames pokergames INT DEFAULT 0 NOT NULL, CHANGE pokergamesb pokergamesb TINYINT(1) NOT NULL, CHANGE pokergamesd pokergamesd TINYINT(1) NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE custom_bonus CHANGE classicblackjack classicblackjack SMALLINT DEFAULT 0 NOT NULL, CHANGE classicblackjackb classicblackjackb TINYINT(1) DEFAULT \'0\' NOT NULL, CHANGE classicblackjackd classicblackjackd TINYINT(1) DEFAULT \'0\' NOT NULL, CHANGE otherblackjack otherblackjack SMALLINT DEFAULT 0 NOT NULL, CHANGE otherblackjackb otherblackjackb TINYINT(1) DEFAULT \'0\' NOT NULL, CHANGE otherblackjackd otherblackjackd TINYINT(1) DEFAULT \'0\' NOT NULL, CHANGE videopoker videopoker SMALLINT DEFAULT 0 NOT NULL, CHANGE craps craps SMALLINT DEFAULT 0 NOT NULL, CHANGE crapsd crapsd SMALLINT DEFAULT 0 NOT NULL, CHANGE baccarat baccarat SMALLINT DEFAULT 0 NOT NULL, CHANGE baccaratb baccaratb SMALLINT DEFAULT 0 NOT NULL, CHANGE baccaratd baccaratd SMALLINT DEFAULT 0 NOT NULL, CHANGE pokergames pokergames SMALLINT DEFAULT 0 NOT NULL, CHANGE pokergamesb pokergamesb SMALLINT DEFAULT 0 NOT NULL, CHANGE pokergamesd pokergamesd SMALLINT DEFAULT 0 NOT NULL');
    }
}
