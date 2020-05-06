<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190327084903 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE custom_bonus (id INT AUTO_INCREMENT NOT NULL, casino_id INT DEFAULT NULL, extraintable LONGTEXT DEFAULT NULL, cashable TINYINT(1) DEFAULT NULL, bonuspercent SMALLINT DEFAULT NULL, maxbonus NUMERIC(13, 4) NOT NULL, exclusive TINYINT(1) DEFAULT \'0\', code VARCHAR(40) DEFAULT NULL, symbol VARCHAR(16) DEFAULT NULL, classicblackjack SMALLINT NOT NULL, classicblackjackb TINYINT(1) NOT NULL, classicblackjackd TINYINT(1) NOT NULL, otherblackjack SMALLINT NOT NULL, otherblackjackb TINYINT(1) NOT NULL, otherblackjackd TINYINT(1) NOT NULL, videopoker SMALLINT NOT NULL, videopokerb SMALLINT NOT NULL, videopokerd TINYINT(1) NOT NULL, craps SMALLINT NOT NULL, crapsb TINYINT(1) NOT NULL, crapsd TINYINT(1) NOT NULL, baccarat SMALLINT NOT NULL, baccaratb TINYINT(1) NOT NULL, baccaratd TINYINT(1) NOT NULL, pokergames SMALLINT NOT NULL, pokergamesb TINYINT(1) NOT NULL, pokergamesd TINYINT(1) NOT NULL, casinowar SMALLINT NOT NULL, casinowarb TINYINT(1) NOT NULL, casinoward TINYINT(1) NOT NULL, sicbo SMALLINT NOT NULL, sicbob TINYINT(1) NOT NULL, sicbod TINYINT(1) NOT NULL, americanroulette SMALLINT NOT NULL, americanrouletteb TINYINT(1) NOT NULL, americanrouletted TINYINT(1) NOT NULL, otherroulette SMALLINT NOT NULL, otherrouletteb TINYINT(1) NOT NULL, otherrouletted TINYINT(1) NOT NULL, slots SMALLINT NOT NULL, slotsb TINYINT(1) NOT NULL, slotsd TINYINT(1) NOT NULL, parlorgames SMALLINT NOT NULL, parlorgamesb TINYINT(1) NOT NULL, parlorgamesd TINYINT(1) NOT NULL, bonusgiven TINYINT(1) NOT NULL, bonusurl VARCHAR(255) NOT NULL, forumthread VARCHAR(255) DEFAULT NULL, timeadded DATETIME NOT NULL, timeupdated DATETIME NOT NULL, tcurl VARCHAR(255) NOT NULL, bonusranking INT DEFAULT NULL, wr VARCHAR(10) DEFAULT NULL, freespins INT DEFAULT NULL, show_only_first_value TINYINT(1) NOT NULL, INDEX IDX_5C958713B19AAF95 (casino_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE custom_bonus_restricted_countries (custom_bonus_id INT NOT NULL, country_id INT NOT NULL, INDEX IDX_16FA664C8C86B102 (custom_bonus_id), INDEX IDX_16FA664CF92F3E70 (country_id), PRIMARY KEY(custom_bonus_id, country_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE custom_bonuses_types (bonus_type_id INT NOT NULL, custom_bonus_id INT NOT NULL, INDEX IDX_4DAE388134D7649B (bonus_type_id), INDEX IDX_4DAE38818C86B102 (custom_bonus_id), PRIMARY KEY(bonus_type_id, custom_bonus_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE custom_bonus ADD CONSTRAINT FK_5C958713B19AAF95 FOREIGN KEY (casino_id) REFERENCES casino (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE custom_bonus_restricted_countries ADD CONSTRAINT FK_16FA664C8C86B102 FOREIGN KEY (custom_bonus_id) REFERENCES custom_bonus (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE custom_bonus_restricted_countries ADD CONSTRAINT FK_16FA664CF92F3E70 FOREIGN KEY (country_id) REFERENCES country (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE custom_bonuses_types ADD CONSTRAINT FK_4DAE388134D7649B FOREIGN KEY (bonus_type_id) REFERENCES bonus_type (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE custom_bonuses_types ADD CONSTRAINT FK_4DAE38818C86B102 FOREIGN KEY (custom_bonus_id) REFERENCES custom_bonus (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE custom_bonus_restricted_countries DROP FOREIGN KEY FK_16FA664C8C86B102');
        $this->addSql('ALTER TABLE custom_bonuses_types DROP FOREIGN KEY FK_4DAE38818C86B102');
        $this->addSql('DROP TABLE custom_bonus');
        $this->addSql('DROP TABLE custom_bonus_restricted_countries');
        $this->addSql('DROP TABLE custom_bonuses_types');
    }
}
