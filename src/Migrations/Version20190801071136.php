<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190801071136 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE user_casino_and_bonus_likes_and_posts (user_id INT NOT NULL, casino_and_bonus_likes_and_posts_id INT NOT NULL, INDEX IDX_AD804B63A76ED395 (user_id), INDEX IDX_AD804B63AB1FA515 (casino_and_bonus_likes_and_posts_id), PRIMARY KEY(user_id, casino_and_bonus_likes_and_posts_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE user_casino_and_bonus_likes_and_posts ADD CONSTRAINT FK_AD804B63A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_casino_and_bonus_likes_and_posts ADD CONSTRAINT FK_AD804B63AB1FA515 FOREIGN KEY (casino_and_bonus_likes_and_posts_id) REFERENCES casino_and_bonus_likes_and_posts (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE user_casino_and_bonus_likes_and_posts');
    }
}
