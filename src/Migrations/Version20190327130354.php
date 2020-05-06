<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190327130354 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE custom_bonus_restricted_countries DROP FOREIGN KEY FK_16FA664C8C86B102');
        $this->addSql('DROP TABLE custom_bonus');
        $this->addSql('DROP TABLE custom_bonus_restricted_countries');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE custom_bonus (id INT AUTO_INCREMENT NOT NULL, casino_id INT DEFAULT NULL, bonustype_id INT DEFAULT NULL, extraintable LONGTEXT DEFAULT NULL COLLATE utf8mb4_unicode_ci, cashable TINYINT(1) DEFAULT NULL, bonuspercent SMALLINT DEFAULT NULL, maxbonus NUMERIC(13, 4) NOT NULL, exclusive TINYINT(1) DEFAULT \'0\', code VARCHAR(40) DEFAULT NULL COLLATE utf8mb4_unicode_ci, symbol VARCHAR(16) DEFAULT NULL COLLATE utf8mb4_unicode_ci, classicblackjack INT DEFAULT 0 NOT NULL, classicblackjackb TINYINT(1) NOT NULL, classicblackjackd TINYINT(1) NOT NULL, otherblackjack INT DEFAULT 0 NOT NULL, otherblackjackb TINYINT(1) NOT NULL, otherblackjackd TINYINT(1) NOT NULL, videopoker INT DEFAULT 0 NOT NULL, videopokerb TINYINT(1) NOT NULL, videopokerd TINYINT(1) DEFAULT \'0\' NOT NULL, craps INT DEFAULT 0 NOT NULL, crapsb TINYINT(1) NOT NULL, crapsd TINYINT(1) NOT NULL, baccarat INT DEFAULT 0 NOT NULL, baccaratb TINYINT(1) NOT NULL, baccaratd TINYINT(1) NOT NULL, pokergames INT DEFAULT 0 NOT NULL, pokergamesb TINYINT(1) NOT NULL, pokergamesd TINYINT(1) NOT NULL, casinowar INT DEFAULT 0 NOT NULL, casinowarb TINYINT(1) NOT NULL, casinoward TINYINT(1) NOT NULL, sicbo INT DEFAULT 0 NOT NULL, sicbob TINYINT(1) NOT NULL, sicbod TINYINT(1) NOT NULL, americanroulette INT DEFAULT 0 NOT NULL, americanrouletteb TINYINT(1) NOT NULL, americanrouletted TINYINT(1) NOT NULL, otherroulette INT DEFAULT 0 NOT NULL, otherrouletteb TINYINT(1) NOT NULL, otherrouletted TINYINT(1) NOT NULL, slots INT DEFAULT 0 NOT NULL, slotsb TINYINT(1) NOT NULL, slotsd TINYINT(1) NOT NULL, parlorgames INT DEFAULT 0 NOT NULL, parlorgamesb TINYINT(1) NOT NULL, parlorgamesd TINYINT(1) DEFAULT \'0\' NOT NULL, bonusgiven TINYINT(1) DEFAULT \'0\' NOT NULL, bonusurl VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, forumthread VARCHAR(255) DEFAULT NULL COLLATE utf8mb4_unicode_ci, timeadded DATETIME NOT NULL, timeupdated DATETIME NOT NULL, tcurl VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, bonusranking INT DEFAULT NULL, wr VARCHAR(10) DEFAULT NULL COLLATE utf8mb4_unicode_ci, freespins INT DEFAULT NULL, show_only_first_value TINYINT(1) NOT NULL, INDEX IDX_5C958713B19AAF95 (casino_id), INDEX IDX_5C958713737521C1 (bonustype_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE custom_bonus_restricted_countries (custom_bonus_id INT NOT NULL, country_id INT NOT NULL, INDEX IDX_16FA664C8C86B102 (custom_bonus_id), INDEX IDX_16FA664CF92F3E70 (country_id), PRIMARY KEY(custom_bonus_id, country_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE custom_bonus ADD CONSTRAINT FK_5C958713737521C1 FOREIGN KEY (bonustype_id) REFERENCES bonus_type (id)');
        $this->addSql('ALTER TABLE custom_bonus ADD CONSTRAINT FK_5C958713B19AAF95 FOREIGN KEY (casino_id) REFERENCES casino (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE custom_bonus_restricted_countries ADD CONSTRAINT FK_16FA664C8C86B102 FOREIGN KEY (custom_bonus_id) REFERENCES custom_bonus (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE custom_bonus_restricted_countries ADD CONSTRAINT FK_16FA664CF92F3E70 FOREIGN KEY (country_id) REFERENCES country (id) ON DELETE CASCADE');
    }
}
