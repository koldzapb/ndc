<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190809093753 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE no_deposit_bonus_codes (id INT AUTO_INCREMENT NOT NULL, casino_id INT DEFAULT NULL, code VARCHAR(64) NOT NULL, status VARCHAR(64) NOT NULL, hidden TINYINT(1) DEFAULT \'0\' NOT NULL, exclusive TINYINT(1) DEFAULT \'0\' NOT NULL, timeadded DATETIME NOT NULL, time_updated DATETIME DEFAULT NULL, INDEX IDX_AF871A07B19AAF95 (casino_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE no_deposit_bonus_codes ADD CONSTRAINT FK_AF871A07B19AAF95 FOREIGN KEY (casino_id) REFERENCES casino (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE no_deposit_bonus_codes');
    }
}
