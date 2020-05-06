<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180720070153 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE casino_banking DROP FOREIGN KEY FK_30D7CAEBB19AAF95');
        $this->addSql('ALTER TABLE casino_banking ADD CONSTRAINT FK_30D7CAEBB19AAF95 FOREIGN KEY (casino_id) REFERENCES casino (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE casino_banking DROP FOREIGN KEY FK_30D7CAEBB19AAF95');
        $this->addSql('ALTER TABLE casino_banking ADD CONSTRAINT FK_30D7CAEBB19AAF95 FOREIGN KEY (casino_id) REFERENCES casino (id)');
    }
}
