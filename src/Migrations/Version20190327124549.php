<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190327124549 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE bonusrestrictedcountries');
        $this->addSql('ALTER TABLE bonus ADD bonustype_id INT DEFAULT NULL, ADD lcb_id INT DEFAULT NULL, CHANGE id id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE bonus ADD CONSTRAINT FK_9F987F7A737521C1 FOREIGN KEY (bonustype_id) REFERENCES bonus_type (id)');
        $this->addSql('CREATE INDEX IDX_9F987F7A737521C1 ON bonus (bonustype_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE bonusrestrictedcountries (country_id INT NOT NULL, bonus_id INT NOT NULL, INDEX IDX_F6CFF873F92F3E70 (country_id), INDEX IDX_F6CFF87369545666 (bonus_id), PRIMARY KEY(bonus_id, country_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE bonusrestrictedcountries ADD CONSTRAINT FK_F6CFF87369545666 FOREIGN KEY (bonus_id) REFERENCES bonus (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE bonusrestrictedcountries ADD CONSTRAINT FK_F6CFF873F92F3E70 FOREIGN KEY (country_id) REFERENCES country (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE bonus DROP FOREIGN KEY FK_9F987F7A737521C1');
        $this->addSql('DROP INDEX IDX_9F987F7A737521C1 ON bonus');
        $this->addSql('ALTER TABLE bonus DROP bonustype_id, DROP lcb_id, CHANGE id id INT NOT NULL');
    }
}
