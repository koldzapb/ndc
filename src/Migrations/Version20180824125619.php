<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180824125619 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE bonus_value ADD bonustype_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE bonus_value ADD CONSTRAINT FK_C8CFDB97737521C1 FOREIGN KEY (bonustype_id) REFERENCES bonus_type (id)');
        $this->addSql('CREATE INDEX IDX_C8CFDB97737521C1 ON bonus_value (bonustype_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE bonus_value DROP FOREIGN KEY FK_C8CFDB97737521C1');
        $this->addSql('DROP INDEX IDX_C8CFDB97737521C1 ON bonus_value');
        $this->addSql('ALTER TABLE bonus_value DROP bonustype_id');
    }
}
