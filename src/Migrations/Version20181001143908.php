<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181001143908 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE softwares_list ADD software_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE softwares_list ADD CONSTRAINT FK_DDADF673D7452741 FOREIGN KEY (software_id) REFERENCES software (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_DDADF673D7452741 ON softwares_list (software_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE softwares_list DROP FOREIGN KEY FK_DDADF673D7452741');
        $this->addSql('DROP INDEX UNIQ_DDADF673D7452741 ON softwares_list');
        $this->addSql('ALTER TABLE softwares_list DROP software_id');
    }
}
