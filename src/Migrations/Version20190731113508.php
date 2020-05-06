<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190731113508 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE like_and_post_type (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE casino_and_bonus_likes_and_posts (id INT AUTO_INCREMENT NOT NULL, casino_liked_id INT DEFAULT NULL, post_to_casino_id INT DEFAULT NULL, liked_bonus_id INT DEFAULT NULL, INDEX IDX_4DDAA8BD2FEDAF85 (casino_liked_id), INDEX IDX_4DDAA8BD2B040537 (post_to_casino_id), INDEX IDX_4DDAA8BDFF27E6AB (liked_bonus_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE casino_and_bonus_likes_and_posts ADD CONSTRAINT FK_4DDAA8BD2FEDAF85 FOREIGN KEY (casino_liked_id) REFERENCES casino (id)');
        $this->addSql('ALTER TABLE casino_and_bonus_likes_and_posts ADD CONSTRAINT FK_4DDAA8BD2B040537 FOREIGN KEY (post_to_casino_id) REFERENCES casino (id)');
        $this->addSql('ALTER TABLE casino_and_bonus_likes_and_posts ADD CONSTRAINT FK_4DDAA8BDFF27E6AB FOREIGN KEY (liked_bonus_id) REFERENCES bonus (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE like_and_post_type');
        $this->addSql('DROP TABLE casino_and_bonus_likes_and_posts');
    }
}
