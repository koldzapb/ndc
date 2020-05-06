<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190327103828 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE custom_bonus DROP FOREIGN KEY FK_5C958713B613A22');
        $this->addSql('DROP INDEX IDX_5C958713B613A22 ON custom_bonus');
        $this->addSql('ALTER TABLE custom_bonus CHANGE bonustypes_id bonustype_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE custom_bonus ADD CONSTRAINT FK_5C958713737521C1 FOREIGN KEY (bonustype_id) REFERENCES bonus_type (id)');
        $this->addSql('CREATE INDEX IDX_5C958713737521C1 ON custom_bonus (bonustype_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE custom_bonus DROP FOREIGN KEY FK_5C958713737521C1');
        $this->addSql('DROP INDEX IDX_5C958713737521C1 ON custom_bonus');
        $this->addSql('ALTER TABLE custom_bonus CHANGE bonustype_id bonustypes_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE custom_bonus ADD CONSTRAINT FK_5C958713B613A22 FOREIGN KEY (bonustypes_id) REFERENCES bonus_type (id)');
        $this->addSql('CREATE INDEX IDX_5C958713B613A22 ON custom_bonus (bonustypes_id)');
    }
}
