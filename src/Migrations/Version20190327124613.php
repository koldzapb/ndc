<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190327124613 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE bonusrestrictedcountries (bonus_id INT NOT NULL, country_id INT NOT NULL, INDEX IDX_F6CFF87369545666 (bonus_id), INDEX IDX_F6CFF873F92F3E70 (country_id), PRIMARY KEY(bonus_id, country_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE bonusrestrictedcountries ADD CONSTRAINT FK_F6CFF87369545666 FOREIGN KEY (bonus_id) REFERENCES bonus (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE bonusrestrictedcountries ADD CONSTRAINT FK_F6CFF873F92F3E70 FOREIGN KEY (country_id) REFERENCES country (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE bonusrestrictedcountries');
    }
}
