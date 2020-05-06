<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190327101729 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE custom_bonuses_types');
        $this->addSql('ALTER TABLE custom_bonus ADD bonustypes_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE custom_bonus ADD CONSTRAINT FK_5C958713B613A22 FOREIGN KEY (bonustypes_id) REFERENCES bonus_type (id)');
        $this->addSql('CREATE INDEX IDX_5C958713B613A22 ON custom_bonus (bonustypes_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE custom_bonuses_types (bonus_type_id INT NOT NULL, custom_bonus_id INT NOT NULL, INDEX IDX_4DAE388134D7649B (bonus_type_id), INDEX IDX_4DAE38818C86B102 (custom_bonus_id), PRIMARY KEY(bonus_type_id, custom_bonus_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE custom_bonuses_types ADD CONSTRAINT FK_4DAE388134D7649B FOREIGN KEY (bonus_type_id) REFERENCES bonus_type (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE custom_bonuses_types ADD CONSTRAINT FK_4DAE38818C86B102 FOREIGN KEY (custom_bonus_id) REFERENCES custom_bonus (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE custom_bonus DROP FOREIGN KEY FK_5C958713B613A22');
        $this->addSql('DROP INDEX IDX_5C958713B613A22 ON custom_bonus');
        $this->addSql('ALTER TABLE custom_bonus DROP bonustypes_id');
    }
}
