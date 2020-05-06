<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180628141334 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE topcasinos_regions (casino_id INT NOT NULL, country_groups_id INT NOT NULL, INDEX IDX_67E306E3B19AAF95 (casino_id), INDEX IDX_67E306E3BAD438AF (country_groups_id), PRIMARY KEY(casino_id, country_groups_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE topcasinos_regions ADD CONSTRAINT FK_67E306E3B19AAF95 FOREIGN KEY (casino_id) REFERENCES casino (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE topcasinos_regions ADD CONSTRAINT FK_67E306E3BAD438AF FOREIGN KEY (country_groups_id) REFERENCES country_groups (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE casino DROP FOREIGN KEY FK_830F4797FE54D947');
        $this->addSql('DROP INDEX IDX_830F4797FE54D947 ON casino');
        $this->addSql('ALTER TABLE casino DROP group_id');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE topcasinos_regions');
        $this->addSql('ALTER TABLE casino ADD group_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE casino ADD CONSTRAINT FK_830F4797FE54D947 FOREIGN KEY (group_id) REFERENCES country_groups (id)');
        $this->addSql('CREATE INDEX IDX_830F4797FE54D947 ON casino (group_id)');
    }
}
