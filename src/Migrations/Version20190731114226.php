<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190731114226 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE like_and_post_type ADD name VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE casino_and_bonus_likes_and_posts ADD type_id INT DEFAULT NULL, ADD post_text VARCHAR(512) DEFAULT NULL');
        $this->addSql('ALTER TABLE casino_and_bonus_likes_and_posts ADD CONSTRAINT FK_4DDAA8BDC54C8C93 FOREIGN KEY (type_id) REFERENCES like_and_post_type (id)');
        $this->addSql('CREATE INDEX IDX_4DDAA8BDC54C8C93 ON casino_and_bonus_likes_and_posts (type_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE casino_and_bonus_likes_and_posts DROP FOREIGN KEY FK_4DDAA8BDC54C8C93');
        $this->addSql('DROP INDEX IDX_4DDAA8BDC54C8C93 ON casino_and_bonus_likes_and_posts');
        $this->addSql('ALTER TABLE casino_and_bonus_likes_and_posts DROP type_id, DROP post_text');
        $this->addSql('ALTER TABLE like_and_post_type DROP name');
    }
}
