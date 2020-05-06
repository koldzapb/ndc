<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191203140419 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE custom_bonus_restricted_countries DROP FOREIGN KEY FK_16FA664C8C86B102');
        $this->addSql('ALTER TABLE postuserlikes DROP FOREIGN KEY FK_FF43BE6E4B89032C');
        $this->addSql('DROP TABLE bonuses_types');
        $this->addSql('DROP TABLE casino_likes');
        $this->addSql('DROP TABLE custom_bonus');
        $this->addSql('DROP TABLE custom_bonus_restricted_countries');
        $this->addSql('DROP TABLE post');
        $this->addSql('DROP TABLE postuserlikes');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE bonuses_types (bonus_type_id INT NOT NULL, bonus_id INT NOT NULL, INDEX IDX_C7B0767A34D7649B (bonus_type_id), INDEX IDX_C7B0767A69545666 (bonus_id), PRIMARY KEY(bonus_type_id, bonus_id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE casino_likes (id INT AUTO_INCREMENT NOT NULL, casino_id INT DEFAULT NULL, user_id INT DEFAULT NULL, timeadded DATETIME NOT NULL, INDEX IDX_9252B5CCA76ED395 (user_id), INDEX IDX_9252B5CCB19AAF95 (casino_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE custom_bonus (id INT AUTO_INCREMENT NOT NULL, casino_id INT DEFAULT NULL, bonustype_id INT DEFAULT NULL, extraintable LONGTEXT CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, cashable TINYINT(1) DEFAULT NULL, bonuspercent SMALLINT DEFAULT NULL, maxbonus NUMERIC(13, 4) NOT NULL, exclusive TINYINT(1) DEFAULT \'0\', code VARCHAR(40) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, symbol VARCHAR(16) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, classicblackjack INT DEFAULT 0 NOT NULL, classicblackjackb TINYINT(1) NOT NULL, classicblackjackd TINYINT(1) NOT NULL, otherblackjack INT DEFAULT 0 NOT NULL, otherblackjackb TINYINT(1) NOT NULL, otherblackjackd TINYINT(1) NOT NULL, videopoker INT DEFAULT 0 NOT NULL, videopokerb TINYINT(1) NOT NULL, videopokerd TINYINT(1) DEFAULT \'0\' NOT NULL, craps INT DEFAULT 0 NOT NULL, crapsb TINYINT(1) NOT NULL, crapsd TINYINT(1) NOT NULL, baccarat INT DEFAULT 0 NOT NULL, baccaratb TINYINT(1) NOT NULL, baccaratd TINYINT(1) NOT NULL, pokergames INT DEFAULT 0 NOT NULL, pokergamesb TINYINT(1) NOT NULL, pokergamesd TINYINT(1) NOT NULL, casinowar INT DEFAULT 0 NOT NULL, casinowarb TINYINT(1) NOT NULL, casinoward TINYINT(1) NOT NULL, sicbo INT DEFAULT 0 NOT NULL, sicbob TINYINT(1) NOT NULL, sicbod TINYINT(1) NOT NULL, americanroulette INT DEFAULT 0 NOT NULL, americanrouletteb TINYINT(1) NOT NULL, americanrouletted TINYINT(1) NOT NULL, otherroulette INT DEFAULT 0 NOT NULL, otherrouletteb TINYINT(1) NOT NULL, otherrouletted TINYINT(1) NOT NULL, slots INT DEFAULT 0 NOT NULL, slotsb TINYINT(1) NOT NULL, slotsd TINYINT(1) NOT NULL, parlorgames INT DEFAULT 0 NOT NULL, parlorgamesb TINYINT(1) NOT NULL, parlorgamesd TINYINT(1) DEFAULT \'0\' NOT NULL, bonusgiven TINYINT(1) DEFAULT \'0\' NOT NULL, bonusurl VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, forumthread VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, timeadded DATETIME NOT NULL, timeupdated DATETIME NOT NULL, tcurl VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, bonusranking INT DEFAULT NULL, wr VARCHAR(10) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, freespins INT DEFAULT NULL, show_only_first_value TINYINT(1) NOT NULL, INDEX IDX_5C958713737521C1 (bonustype_id), INDEX IDX_5C958713B19AAF95 (casino_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE custom_bonus_restricted_countries (custom_bonus_id INT NOT NULL, country_id INT NOT NULL, INDEX IDX_16FA664C8C86B102 (custom_bonus_id), INDEX IDX_16FA664CF92F3E70 (country_id), PRIMARY KEY(custom_bonus_id, country_id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE post (id INT AUTO_INCREMENT NOT NULL, casino_id INT DEFAULT NULL, user_id INT DEFAULT NULL, content LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_unicode_ci`, timeadded DATETIME NOT NULL, timeupdated DATETIME NOT NULL, postlikes INT DEFAULT 0 NOT NULL, totallikes INT DEFAULT 0, INDEX IDX_5A8A6C8DA76ED395 (user_id), INDEX IDX_5A8A6C8DB19AAF95 (casino_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE postuserlikes (user_id INT NOT NULL, post_id INT NOT NULL, INDEX IDX_FF43BE6EA76ED395 (user_id), INDEX IDX_FF43BE6E4B89032C (post_id), PRIMARY KEY(user_id, post_id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE bonuses_types ADD CONSTRAINT FK_C7B0767A34D7649B FOREIGN KEY (bonus_type_id) REFERENCES bonus_type (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE bonuses_types ADD CONSTRAINT FK_C7B0767A69545666 FOREIGN KEY (bonus_id) REFERENCES bonus (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE casino_likes ADD CONSTRAINT FK_9252B5CCA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE casino_likes ADD CONSTRAINT FK_9252B5CCB19AAF95 FOREIGN KEY (casino_id) REFERENCES casino (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE custom_bonus ADD CONSTRAINT FK_5C958713737521C1 FOREIGN KEY (bonustype_id) REFERENCES bonus_type (id)');
        $this->addSql('ALTER TABLE custom_bonus ADD CONSTRAINT FK_5C958713B19AAF95 FOREIGN KEY (casino_id) REFERENCES casino (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE custom_bonus_restricted_countries ADD CONSTRAINT FK_16FA664C8C86B102 FOREIGN KEY (custom_bonus_id) REFERENCES custom_bonus (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE custom_bonus_restricted_countries ADD CONSTRAINT FK_16FA664CF92F3E70 FOREIGN KEY (country_id) REFERENCES country (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE post ADD CONSTRAINT FK_5A8A6C8DA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE post ADD CONSTRAINT FK_5A8A6C8DB19AAF95 FOREIGN KEY (casino_id) REFERENCES casino (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE postuserlikes ADD CONSTRAINT FK_FF43BE6E4B89032C FOREIGN KEY (post_id) REFERENCES post (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE postuserlikes ADD CONSTRAINT FK_FF43BE6EA76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
    }
}
