<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190731111154 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE casino DROP totallikes, DROP totalcomments');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE likes_and_posts (id INT AUTO_INCREMENT NOT NULL, casino_id INT DEFAULT NULL, user_id INT DEFAULT NULL, bonus_id INT DEFAULT NULL, type VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, timeadded DATETIME DEFAULT NULL, content LONGTEXT DEFAULT NULL COLLATE utf8mb4_unicode_ci, timeupdated DATETIME DEFAULT NULL, postlikes INT DEFAULT 0, totallikes INT DEFAULT 0, time_added DATETIME NOT NULL, INDEX IDX_C6A0B006B19AAF95 (casino_id), INDEX IDX_C6A0B006A76ED395 (user_id), INDEX IDX_C6A0B00669545666 (bonus_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');

        $this->addSql('ALTER TABLE casino ADD totallikes INT DEFAULT NULL, ADD totalcomments INT DEFAULT NULL');
    }
}
