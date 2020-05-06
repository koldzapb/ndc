<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180601123354 extends AbstractMigration
{
    public function up(Schema $schema):void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE user_to_user_like');
    }

    public function down(Schema $schema):void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE user_to_user_like (id INT AUTO_INCREMENT NOT NULL, userwholikesotheruser_id INT DEFAULT NULL, userslikedbythisuser_id INT DEFAULT NULL, INDEX IDX_678DA70981B6AD51 (userwholikesotheruser_id), INDEX IDX_678DA709D0BB6CCE (userslikedbythisuser_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE user_to_user_like ADD CONSTRAINT FK_678DA70981B6AD51 FOREIGN KEY (userwholikesotheruser_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE user_to_user_like ADD CONSTRAINT FK_678DA709D0BB6CCE FOREIGN KEY (userslikedbythisuser_id) REFERENCES user (id)');
    }
}
