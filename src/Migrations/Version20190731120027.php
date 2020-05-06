<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190731120027 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE casino_and_bonus_likes_and_posts ADD user_added_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE casino_and_bonus_likes_and_posts ADD CONSTRAINT FK_4DDAA8BD9E43ABD FOREIGN KEY (user_added_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_4DDAA8BD9E43ABD ON casino_and_bonus_likes_and_posts (user_added_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE casino_and_bonus_likes_and_posts DROP FOREIGN KEY FK_4DDAA8BD9E43ABD');
        $this->addSql('DROP INDEX IDX_4DDAA8BD9E43ABD ON casino_and_bonus_likes_and_posts');
        $this->addSql('ALTER TABLE casino_and_bonus_likes_and_posts DROP user_added_id');
    }
}
