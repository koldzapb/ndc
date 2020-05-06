<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180509113328 extends AbstractMigration
{
    public function up(Schema $schema):void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE article (id INT AUTO_INCREMENT NOT NULL, category_id INT DEFAULT NULL, code VARCHAR(255) DEFAULT NULL, title VARCHAR(255) DEFAULT NULL, menutitle VARCHAR(255) DEFAULT NULL, metadescription VARCHAR(255) DEFAULT NULL, metakeywords VARCHAR(255) DEFAULT NULL, maintext LONGTEXT DEFAULT NULL, thumbnailimagelink VARCHAR(255) DEFAULT NULL, fullimagelink VARCHAR(255) DEFAULT NULL, mediumimagelink VARCHAR(255) DEFAULT NULL, timeadded DATETIME NOT NULL, mainfooter1 TINYINT(1) NOT NULL, mainfooter2 TINYINT(1) NOT NULL, totalviews INT DEFAULT 0, slug VARCHAR(128) NOT NULL, UNIQUE INDEX UNIQ_23A0E66989D9B62 (slug), INDEX IDX_23A0E6612469DE2 (category_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE news (id INT AUTO_INCREMENT NOT NULL, category_id INT DEFAULT NULL, code VARCHAR(255) DEFAULT NULL, title VARCHAR(255) DEFAULT NULL, menutitle VARCHAR(255) DEFAULT NULL, metadescription VARCHAR(255) DEFAULT NULL, metakeywords VARCHAR(255) DEFAULT NULL, maintext LONGTEXT DEFAULT NULL, fullimagelink VARCHAR(255) DEFAULT NULL, timeadded DATETIME NOT NULL, mainfooter1 TINYINT(1) NOT NULL, mainfooter2 TINYINT(1) NOT NULL, totalviews INT DEFAULT 0, slug VARCHAR(128) NOT NULL, UNIQUE INDEX UNIQ_1DD39950989D9B62 (slug), INDEX IDX_1DD3995012469DE2 (category_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE article_category (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, slug VARCHAR(128) NOT NULL, UNIQUE INDEX UNIQ_53A4EDAA989D9B62 (slug), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE banking (id INT NOT NULL, name VARCHAR(64) NOT NULL, addedtime DATETIME NOT NULL, updatedtime DATETIME NOT NULL, totalcountdeposit INT NOT NULL, totalcountwithdrawals INT NOT NULL, uploadedimagelink VARCHAR(255) NOT NULL, uploadedimagesmalllink VARCHAR(255) NOT NULL, imgsrc VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE country_groups (id INT NOT NULL, name VARCHAR(64) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE casino (id INT NOT NULL, group_id INT DEFAULT NULL, casinoname VARCHAR(100) NOT NULL, casinourl LONGTEXT NOT NULL, usallowed INT NOT NULL, newid INT NOT NULL, totallikes INT DEFAULT NULL, totalcomments INT DEFAULT NULL, closed TINYINT(1) NOT NULL, blacklisted TINYINT(1) NOT NULL, averagerating DOUBLE PRECISION NOT NULL, casinologo VARCHAR(255) NOT NULL, casinologourl VARCHAR(255) NOT NULL, parsedlcbimage VARCHAR(255) NOT NULL, awardrank INT DEFAULT NULL, reviewtext LONGTEXT DEFAULT NULL, nodepositoftheweek TINYINT(1) NOT NULL, bannerlink VARCHAR(255) DEFAULT NULL, INDEX IDX_830F4797FE54D947 (group_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE casino_likes (id INT AUTO_INCREMENT NOT NULL, casino_id INT DEFAULT NULL, user_id INT DEFAULT NULL, timeadded DATETIME NOT NULL, INDEX IDX_9252B5CCB19AAF95 (casino_id), INDEX IDX_9252B5CCA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE main_page (id INT AUTO_INCREMENT NOT NULL, code VARCHAR(255) NOT NULL, title VARCHAR(255) NOT NULL, menutitle VARCHAR(255) NOT NULL, metadescription VARCHAR(255) NOT NULL, metakeywords VARCHAR(255) NOT NULL, maintext LONGTEXT NOT NULL, bodyclass VARCHAR(255) DEFAULT NULL, mainfooter1 TINYINT(1) NOT NULL, mainfooter2 TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE software (id INT NOT NULL, title VARCHAR(128) NOT NULL, pageurl VARCHAR(128) NOT NULL, totallinkedcasinos INT NOT NULL, timeadded DATETIME NOT NULL, timeupdated DATETIME NOT NULL, imagelink VARCHAR(255) NOT NULL, Uploadedimagelink VARCHAR(255) NOT NULL, imgsrc VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE casinosoftware (software_id INT NOT NULL, casino_id INT NOT NULL, INDEX IDX_D429E647D7452741 (software_id), INDEX IDX_D429E647B19AAF95 (casino_id), PRIMARY KEY(software_id, casino_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE casino_banking (id INT NOT NULL, casino_id INT DEFAULT NULL, banking_id INT DEFAULT NULL, allowsdeposits TINYINT(1) NOT NULL, allowswithdrawals TINYINT(1) NOT NULL, INDEX IDX_30D7CAEBB19AAF95 (casino_id), INDEX IDX_30D7CAEB758C76C (banking_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(25) NOT NULL, password VARCHAR(64) DEFAULT NULL, email VARCHAR(60) DEFAULT NULL, is_active TINYINT(1) DEFAULT NULL, roles INT DEFAULT 0 NOT NULL, salt VARCHAR(255) DEFAULT NULL, admin TINYINT(1) DEFAULT \'0\', timejoined DATETIME NOT NULL, googleid VARCHAR(255) DEFAULT NULL, twitterid VARCHAR(255) DEFAULT NULL, likessubmited INT DEFAULT 0, commentssubmited INT DEFAULT 0, newsletter TINYINT(1) DEFAULT NULL, UNIQUE INDEX UNIQ_8D93D649F85E0677 (username), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE casinouserlikes (user_id INT NOT NULL, casino_id INT NOT NULL, INDEX IDX_8DAE8033A76ED395 (user_id), INDEX IDX_8DAE8033B19AAF95 (casino_id), PRIMARY KEY(user_id, casino_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE bonus (id INT NOT NULL, casino_id INT DEFAULT NULL, extraintable LONGTEXT DEFAULT NULL, cashable TINYINT(1) DEFAULT NULL, bonuspercent SMALLINT DEFAULT NULL, maxbonus NUMERIC(13, 4) NOT NULL, exclusive TINYINT(1) DEFAULT \'0\', code VARCHAR(40) DEFAULT NULL, symbol VARCHAR(16) DEFAULT NULL, classicblackjack SMALLINT NOT NULL, classicblackjackb TINYINT(1) NOT NULL, classicblackjackd TINYINT(1) NOT NULL, otherblackjack SMALLINT NOT NULL, otherblackjackb TINYINT(1) NOT NULL, otherblackjackd TINYINT(1) NOT NULL, videopoker SMALLINT NOT NULL, videopokerb SMALLINT NOT NULL, videopokerd TINYINT(1) NOT NULL, craps SMALLINT NOT NULL, crapsb TINYINT(1) NOT NULL, crapsd TINYINT(1) NOT NULL, baccarat SMALLINT NOT NULL, baccaratb TINYINT(1) NOT NULL, baccaratd TINYINT(1) NOT NULL, pokergames SMALLINT NOT NULL, pokergamesb TINYINT(1) NOT NULL, pokergamesd TINYINT(1) NOT NULL, casinowar SMALLINT NOT NULL, casinowarb TINYINT(1) NOT NULL, casinoward TINYINT(1) NOT NULL, sicbo SMALLINT NOT NULL, sicbob TINYINT(1) NOT NULL, sicbod TINYINT(1) NOT NULL, americanroulette SMALLINT NOT NULL, americanrouletteb TINYINT(1) NOT NULL, americanrouletted TINYINT(1) NOT NULL, otherroulette SMALLINT NOT NULL, otherrouletteb TINYINT(1) NOT NULL, otherrouletted TINYINT(1) NOT NULL, slots SMALLINT NOT NULL, slotsb TINYINT(1) NOT NULL, slotsd TINYINT(1) NOT NULL, parlorgames SMALLINT NOT NULL, parlorgamesb TINYINT(1) NOT NULL, parlorgamesd TINYINT(1) NOT NULL, bonusgiven TINYINT(1) NOT NULL, bonusurl VARCHAR(255) NOT NULL, forumthread VARCHAR(255) DEFAULT NULL, timeadded DATETIME NOT NULL, timeupdated DATETIME NOT NULL, tcurl VARCHAR(255) NOT NULL, bonusranking INT DEFAULT NULL, wr VARCHAR(10) DEFAULT NULL, freespins INT DEFAULT NULL, INDEX IDX_9F987F7AB19AAF95 (casino_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE currency (id INT NOT NULL, currencycode VARCHAR(10) NOT NULL, name VARCHAR(64) NOT NULL, addedtime DATETIME NOT NULL, uploadedtime DATETIME NOT NULL, imgsrc VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE casinocurrency (currency_id INT NOT NULL, casino_id INT NOT NULL, INDEX IDX_CAAF06B738248176 (currency_id), INDEX IDX_CAAF06B7B19AAF95 (casino_id), PRIMARY KEY(currency_id, casino_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE language (id INT NOT NULL, countrycode VARCHAR(10) NOT NULL, name VARCHAR(64) NOT NULL, addedtime DATETIME NOT NULL, updatedtime DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE casino_language (language_id INT NOT NULL, casino_id INT NOT NULL, INDEX IDX_19DBC64982F1BAF4 (language_id), INDEX IDX_19DBC649B19AAF95 (casino_id), PRIMARY KEY(language_id, casino_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE bonus_type (id INT NOT NULL, name VARCHAR(255) NOT NULL, priority INT NOT NULL, imgsrc VARCHAR(64) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE bonuses_types (bonus_type_id INT NOT NULL, bonus_id INT NOT NULL, INDEX IDX_C7B0767A34D7649B (bonus_type_id), INDEX IDX_C7B0767A69545666 (bonus_id), PRIMARY KEY(bonus_type_id, bonus_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE casino_details (id INT AUTO_INCREMENT NOT NULL, ndcauthorid INT DEFAULT NULL, timeadded DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE post (id INT AUTO_INCREMENT NOT NULL, casino_id INT DEFAULT NULL, user_id INT DEFAULT NULL, content VARCHAR(512) NOT NULL, timeadded DATETIME NOT NULL, timeupdated DATETIME NOT NULL, postlikes INT DEFAULT 0 NOT NULL, INDEX IDX_5A8A6C8DB19AAF95 (casino_id), INDEX IDX_5A8A6C8DA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user_to_user_post (id INT AUTO_INCREMENT NOT NULL, userwhoposts_id INT DEFAULT NULL, userwhoreceives_id INT DEFAULT NULL, content VARCHAR(512) NOT NULL, timeadded DATETIME NOT NULL, INDEX IDX_91648B3789984D55 (userwhoposts_id), INDEX IDX_91648B37F994C49 (userwhoreceives_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE screenshot (id INT NOT NULL, casino_id INT DEFAULT NULL, filename LONGTEXT NOT NULL, url LONGTEXT NOT NULL, slideimgsrc VARCHAR(255) DEFAULT NULL, thumbimgsrc VARCHAR(255) DEFAULT NULL, INDEX IDX_58991E41B19AAF95 (casino_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE country (id INT NOT NULL, group_id INT DEFAULT NULL, countrycode VARCHAR(10) DEFAULT NULL, countryid INT DEFAULT NULL, continentid INT DEFAULT NULL, name VARCHAR(64) NOT NULL, hidden TINYINT(1) DEFAULT \'0\' NOT NULL, lat VARCHAR(255) DEFAULT NULL, lng VARCHAR(255) DEFAULT NULL, citizens VARCHAR(64) DEFAULT NULL, dateadded DATETIME NOT NULL, dateupdated DATETIME NOT NULL, INDEX IDX_5373C966FE54D947 (group_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE restrictedcountries (country_id INT NOT NULL, casino_id INT NOT NULL, INDEX IDX_B3FEDB4AF92F3E70 (country_id), INDEX IDX_B3FEDB4AB19AAF95 (casino_id), PRIMARY KEY(country_id, casino_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE bonusrestrictedcountries (country_id INT NOT NULL, bonus_id INT NOT NULL, INDEX IDX_F6CFF873F92F3E70 (country_id), INDEX IDX_F6CFF87369545666 (bonus_id), PRIMARY KEY(country_id, bonus_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE softwarerestrictedcountries (country_id INT NOT NULL, software_id INT NOT NULL, INDEX IDX_5E663ADF92F3E70 (country_id), INDEX IDX_5E663ADD7452741 (software_id), PRIMARY KEY(country_id, software_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE article ADD CONSTRAINT FK_23A0E6612469DE2 FOREIGN KEY (category_id) REFERENCES article_category (id)');
        $this->addSql('ALTER TABLE news ADD CONSTRAINT FK_1DD3995012469DE2 FOREIGN KEY (category_id) REFERENCES article_category (id)');
        $this->addSql('ALTER TABLE casino ADD CONSTRAINT FK_830F4797FE54D947 FOREIGN KEY (group_id) REFERENCES country_groups (id)');
        $this->addSql('ALTER TABLE casino_likes ADD CONSTRAINT FK_9252B5CCB19AAF95 FOREIGN KEY (casino_id) REFERENCES casino (id)');
        $this->addSql('ALTER TABLE casino_likes ADD CONSTRAINT FK_9252B5CCA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE casinosoftware ADD CONSTRAINT FK_D429E647D7452741 FOREIGN KEY (software_id) REFERENCES software (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE casinosoftware ADD CONSTRAINT FK_D429E647B19AAF95 FOREIGN KEY (casino_id) REFERENCES casino (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE casino_banking ADD CONSTRAINT FK_30D7CAEBB19AAF95 FOREIGN KEY (casino_id) REFERENCES casino (id)');
        $this->addSql('ALTER TABLE casino_banking ADD CONSTRAINT FK_30D7CAEB758C76C FOREIGN KEY (banking_id) REFERENCES banking (id)');
        $this->addSql('ALTER TABLE casinouserlikes ADD CONSTRAINT FK_8DAE8033A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE casinouserlikes ADD CONSTRAINT FK_8DAE8033B19AAF95 FOREIGN KEY (casino_id) REFERENCES casino (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE bonus ADD CONSTRAINT FK_9F987F7AB19AAF95 FOREIGN KEY (casino_id) REFERENCES casino (id)');
        $this->addSql('ALTER TABLE casinocurrency ADD CONSTRAINT FK_CAAF06B738248176 FOREIGN KEY (currency_id) REFERENCES currency (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE casinocurrency ADD CONSTRAINT FK_CAAF06B7B19AAF95 FOREIGN KEY (casino_id) REFERENCES casino (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE casino_language ADD CONSTRAINT FK_19DBC64982F1BAF4 FOREIGN KEY (language_id) REFERENCES language (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE casino_language ADD CONSTRAINT FK_19DBC649B19AAF95 FOREIGN KEY (casino_id) REFERENCES casino (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE bonuses_types ADD CONSTRAINT FK_C7B0767A34D7649B FOREIGN KEY (bonus_type_id) REFERENCES bonus_type (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE bonuses_types ADD CONSTRAINT FK_C7B0767A69545666 FOREIGN KEY (bonus_id) REFERENCES bonus (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE post ADD CONSTRAINT FK_5A8A6C8DB19AAF95 FOREIGN KEY (casino_id) REFERENCES casino (id)');
        $this->addSql('ALTER TABLE post ADD CONSTRAINT FK_5A8A6C8DA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE user_to_user_post ADD CONSTRAINT FK_91648B3789984D55 FOREIGN KEY (userwhoposts_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE user_to_user_post ADD CONSTRAINT FK_91648B37F994C49 FOREIGN KEY (userwhoreceives_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE screenshot ADD CONSTRAINT FK_58991E41B19AAF95 FOREIGN KEY (casino_id) REFERENCES casino (id)');
        $this->addSql('ALTER TABLE country ADD CONSTRAINT FK_5373C966FE54D947 FOREIGN KEY (group_id) REFERENCES country_groups (id)');
        $this->addSql('ALTER TABLE restrictedcountries ADD CONSTRAINT FK_B3FEDB4AF92F3E70 FOREIGN KEY (country_id) REFERENCES country (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE restrictedcountries ADD CONSTRAINT FK_B3FEDB4AB19AAF95 FOREIGN KEY (casino_id) REFERENCES casino (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE bonusrestrictedcountries ADD CONSTRAINT FK_F6CFF873F92F3E70 FOREIGN KEY (country_id) REFERENCES country (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE bonusrestrictedcountries ADD CONSTRAINT FK_F6CFF87369545666 FOREIGN KEY (bonus_id) REFERENCES bonus (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE softwarerestrictedcountries ADD CONSTRAINT FK_5E663ADF92F3E70 FOREIGN KEY (country_id) REFERENCES country (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE softwarerestrictedcountries ADD CONSTRAINT FK_5E663ADD7452741 FOREIGN KEY (software_id) REFERENCES software (id) ON DELETE CASCADE');

    }

    public function down(Schema $schema):void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');
        $this->addSql('ALTER TABLE article DROP FOREIGN KEY FK_23A0E6612469DE2');
        $this->addSql('ALTER TABLE news DROP FOREIGN KEY FK_1DD3995012469DE2');
        $this->addSql('ALTER TABLE casino_banking DROP FOREIGN KEY FK_30D7CAEB758C76C');
        $this->addSql('ALTER TABLE casino DROP FOREIGN KEY FK_830F4797FE54D947');
        $this->addSql('ALTER TABLE country DROP FOREIGN KEY FK_5373C966FE54D947');
        $this->addSql('ALTER TABLE casino_likes DROP FOREIGN KEY FK_9252B5CCB19AAF95');
        $this->addSql('ALTER TABLE casinosoftware DROP FOREIGN KEY FK_D429E647B19AAF95');
        $this->addSql('ALTER TABLE casino_banking DROP FOREIGN KEY FK_30D7CAEBB19AAF95');
        $this->addSql('ALTER TABLE casinouserlikes DROP FOREIGN KEY FK_8DAE8033B19AAF95');
        $this->addSql('ALTER TABLE bonus DROP FOREIGN KEY FK_9F987F7AB19AAF95');
        $this->addSql('ALTER TABLE casinocurrency DROP FOREIGN KEY FK_CAAF06B7B19AAF95');
        $this->addSql('ALTER TABLE casino_language DROP FOREIGN KEY FK_19DBC649B19AAF95');
        $this->addSql('ALTER TABLE post DROP FOREIGN KEY FK_5A8A6C8DB19AAF95');
        $this->addSql('ALTER TABLE screenshot DROP FOREIGN KEY FK_58991E41B19AAF95');
        $this->addSql('ALTER TABLE restrictedcountries DROP FOREIGN KEY FK_B3FEDB4AB19AAF95');
        $this->addSql('ALTER TABLE casinosoftware DROP FOREIGN KEY FK_D429E647D7452741');
        $this->addSql('ALTER TABLE softwarerestrictedcountries DROP FOREIGN KEY FK_5E663ADD7452741');
        $this->addSql('ALTER TABLE casino_likes DROP FOREIGN KEY FK_9252B5CCA76ED395');
        $this->addSql('ALTER TABLE casinouserlikes DROP FOREIGN KEY FK_8DAE8033A76ED395');
        $this->addSql('ALTER TABLE post DROP FOREIGN KEY FK_5A8A6C8DA76ED395');
        $this->addSql('ALTER TABLE user_to_user_post DROP FOREIGN KEY FK_91648B3789984D55');
        $this->addSql('ALTER TABLE user_to_user_post DROP FOREIGN KEY FK_91648B37F994C49');
        $this->addSql('ALTER TABLE bonuses_types DROP FOREIGN KEY FK_C7B0767A69545666');
        $this->addSql('ALTER TABLE bonusrestrictedcountries DROP FOREIGN KEY FK_F6CFF87369545666');
        $this->addSql('ALTER TABLE casinocurrency DROP FOREIGN KEY FK_CAAF06B738248176');
        $this->addSql('ALTER TABLE casino_language DROP FOREIGN KEY FK_19DBC64982F1BAF4');
        $this->addSql('ALTER TABLE bonuses_types DROP FOREIGN KEY FK_C7B0767A34D7649B');
        $this->addSql('ALTER TABLE restrictedcountries DROP FOREIGN KEY FK_B3FEDB4AF92F3E70');
        $this->addSql('ALTER TABLE bonusrestrictedcountries DROP FOREIGN KEY FK_F6CFF873F92F3E70');
        $this->addSql('ALTER TABLE softwarerestrictedcountries DROP FOREIGN KEY FK_5E663ADF92F3E70');
        $this->addSql('DROP TABLE article');
        $this->addSql('DROP TABLE news');
        $this->addSql('DROP TABLE article_category');
        $this->addSql('DROP TABLE banking');
        $this->addSql('DROP TABLE country_groups');
        $this->addSql('DROP TABLE casino');
        $this->addSql('DROP TABLE casino_likes');
        $this->addSql('DROP TABLE main_page');
        $this->addSql('DROP TABLE software');
        $this->addSql('DROP TABLE casinosoftware');
        $this->addSql('DROP TABLE casino_banking');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE casinouserlikes');
        $this->addSql('DROP TABLE bonus');
        $this->addSql('DROP TABLE currency');
        $this->addSql('DROP TABLE casinocurrency');
        $this->addSql('DROP TABLE language');
        $this->addSql('DROP TABLE casino_language');
        $this->addSql('DROP TABLE bonus_type');
        $this->addSql('DROP TABLE bonuses_types');
        $this->addSql('DROP TABLE casino_details');
        $this->addSql('DROP TABLE post');
        $this->addSql('DROP TABLE user_to_user_post');
        $this->addSql('DROP TABLE screenshot');
        $this->addSql('DROP TABLE country');
        $this->addSql('DROP TABLE restrictedcountries');
        $this->addSql('DROP TABLE bonusrestrictedcountries');
        $this->addSql('DROP TABLE softwarerestrictedcountries');
    }
}
